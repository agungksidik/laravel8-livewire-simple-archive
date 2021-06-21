<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Download extends Component
{
    public $download;
    public $downloadId;

    public $listeners = ['downloaded'];

    public function dowloaded() {
        dd('work');
    }

    public function mount($download) {
        $this->download = $download;
    }

    public function render()
    {
        return view('livewire.dashboard.download');
    }
}
