<?php

namespace App\Http\Controllers;

use App\Models\document;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::paginate(10);
        return view('document.index', compact('documents'));
    }

    public function addDocument()
    { 
        return view('document.add');
    }

    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'file' => 'file|required|mimes:xls,xlsx,doc,pdf,docx|max:10240',
        ]);

        $attr = $request->all();

        $slug = \Str::slug(request('name'));
        $attr['file'] = $slug;

        $upload = request()->file('file');
        $date = date('dmY_H.i');
        $file_name = "{$slug}.{$date}.{$upload->extension()}";
        $path = "document/" . $slug;
        $file = $upload->storeAs($path, $file_name);

        Document::insert([            
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'path' => $path,
            'file' => $file_name,            
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('document.index')->with('success', 'Document was created');
    }

    public function download($fileName, $path)
    {
        return response()->download($path . $fileName);
    }
}
