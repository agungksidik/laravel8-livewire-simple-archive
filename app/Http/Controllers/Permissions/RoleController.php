<?php

namespace App\Http\Controllers\Permissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('permission.role.index', [
            'roles' => Role::paginate(10),
        ]);
    }

    public function store() {
        request()->validate([
            'name' => 'required',
        ]);

        Role::create([
            'name' => request('name'),
            'guard_name' => request('guard_name') ?? 'web',
        ]);

        return back();
    }
}
