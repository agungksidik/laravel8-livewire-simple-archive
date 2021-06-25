<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Download extends Component
{
    public $download;
    public $downloadId;

    public $listeners = ['downloadAdded' => 'addDownload'];

    public function downloadAdded($downloadId) {}
    
    public function addDownload() {
        dd('it works');
    }


    public function mount($download) {
        $this->download = $download;
    }

    public function render()
    {
        return view('livewire.dashboard.download');
    }
}
