<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Document;
use App\Models\Download;
use App\Models\History_document;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = History_document::
        orderBy('created_at','DESC')
        ->get()
        ->unique('document_id');

        // $documents = History_document::orderBy('created_at', 'desc')->groupBy('document_id')->get();
        // return $messages;
        // $documents = Document::with('history')->paginate(10);
        
        return view('document.index', compact('documents'));
    }

    public function addDocument()
    { 
        return view('document.add');
    }

    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required|unique:documents',
            'file' => 'file|required|mimes:xls,xlsx,doc,pdf,docx,jpg,bmp,png,jpeg|max:10240',
        ]);

        $attr = $request->all();

        $slug = \Str::slug(request('name'));
        $attr['file'] = $slug;

        $upload = request()->file('file');
        $date = date('dmY_H.i');
        $file_name = "{$slug}.{$date}.{$upload->extension()}";
        $path = "document/" . $slug;
        $file = $upload->storeAs('public/' . $path, $file_name);

        $document = Document::create([            
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'path' => $path,
            'file' => $file_name,            
            'slug' => $slug,            
            'created_at' => Carbon::now(),
        ]);
        $documentId = $document->id;

        History_document::create([
            'document_id' => $documentId,
            'name' => $request->name,
            'path' => $path,
            'file' => $file_name,            
            'slug' => $slug,   
            'user_id' => auth()->user()->id,         
            'created_at' => Carbon::now(),
        ]);

        ActivityLog::create([
            'document_id' => $documentId,
            'user_id' => auth()->user()->id,      
            'action' => 'create',      
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('document.index')->with('success', 'Document was created');
    }

    public function download(History_document $document)
    {
        Download::create([
            'document_id' => $document->document_id,
            'user_id' => auth()->user()->id,
            'created_at' => Carbon::now(),
        ]);

        $path = $document->path .'/' . $document->file;

        return response()->download(storage_path('app/public/' . $path)); 
    }

    
}
