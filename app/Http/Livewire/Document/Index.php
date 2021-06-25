<?php

namespace App\Http\Livewire\Document;

use App\Models\Document;
use App\Models\History_document;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $getQueryString = ['page'];
    public $perPage = 5;
    public $query = '';
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $documents = Document::with(['user' => function ($query) {
            $query->where('name', 'like', "%$this->query%");
        }])
        ->where('name', 'like', "%$this->query%")
        ->orWhere('path', 'like', "%$this->query%")
        ->orWhere('file', 'like', "%$this->query%")
        ->orderBy('id', 'desc')->paginate($this->perPage);
       

        $this->page > $documents->lastPage() ? $this->page = $documents->lastPage() : true;

        return view('livewire.document.index', ['documents' => $documents]);
    }
}
