<?php

namespace App\Http\Livewire\Document;

use App\Models\History_document;
use Carbon\Carbon;
use Livewire\Component;

class Download extends Component
{
    public $document; 

    public function mount($document) {
        $this->document = $document;
    }

    public function download(History_document $document)
    {
        $download = \App\Models\Download::create([
            'document_id' => $document->document_id,
            'user_id' => auth()->user()->id,
            'created_at' => Carbon::now(),
        ]);

        $path = $document->path .'/' . $document->file;

        $this->emit('downloadAdded', $download->id);
        return response()->download(storage_path('app/public/' . $path));
    }

    public function render()
    {
        return view('livewire.document.download');
    }
}
