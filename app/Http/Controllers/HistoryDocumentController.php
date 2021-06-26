<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Document;
use App\Models\Download;
use App\Models\History_document;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoryDocumentController extends Controller
{
    public function index(Document $document)
    {
        // $document = Document::where('slug', $document->slug)->first();
        $historys = History_document::where('slug', $document->slug)->orderBy('id', 'desc')->get();
        return view('history.index', [
            'document' => $document,
            'historys' => $historys
        ]);
    }

    public function store(Request $request, Document $document)
    {        
        $request->validate([            
            'file' => 'file|required|mimes:xls,xlsx,doc,pdf,docx,jpg,bmp,png,jpeg|max:10240',
        ]);

        $attr = $request->all();

        $slug = $document->slug;
        $attr['file'] = $slug;

        $upload = request()->file('file');
        $date = date('dmY_H.i');
        $file_name = "{$slug}.{$date}.{$upload->extension()}";
        $path = "document/" . $slug;
        $file = $upload->storeAs('public/' . $path, $file_name);

        History_document::create([            
            'document_id' => $document->id,
            'path' => $document->path,
            'file' => $file_name,            
            'slug' => $document->slug,
            'user_id' => auth()->user()->id,
            'created_at' => Carbon::now(),
        ]);
        
        $document->file = $file_name;
        $document->updated_at = Carbon::now();
        $document->user_id = auth()->user()->id;
        $document->save();

        ActivityLog::create([
            'document_id' => $document->id,
            'user_id' => auth()->user()->id,      
            'action' => 'update',      
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('history.index', $document->slug)->with('success', 'Document was updated');
    }

    public function destroy($id)
    {
        $history_document = History_document::where('id', $id)->first();
        
        $history_document->delete();
        
        \Storage::delete('public/' . $history_document->path .'/'. $history_document->file);

        ActivityLog::create([
            'document_id' => $history_document->document_id,
            'user_id' => auth()->user()->id,      
            'action' => 'delete',      
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('history.index', $history_document->slug)->with('success', 'The history document was deleted');
    }
}
