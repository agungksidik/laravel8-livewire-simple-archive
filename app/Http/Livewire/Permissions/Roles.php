<?php

namespace App\Http\Livewire\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    public function render()
    {
        $roles = Role::get();
        return view('livewire.permissions.roles', compact('roles'));
    }

    public function store() {
        dd('its works');
        request()->validate([
            'name' => 'required',
        ]);

        Role::create([
            'name' => request('name'),
            'guard_name' => request('guard_name') ?? 'web',
        ]);
        $this->emit('userStore');

        return back();
    }

    public function addRole() {
        dd('its, woks');
    }

    public function openModal()
    {
        $this->emit('show');
    }
}
