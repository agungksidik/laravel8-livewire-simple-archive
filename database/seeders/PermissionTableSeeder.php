<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'create contact',
            'show contact',
            'edit contact',
            'delete contact',
            'create task',
            'show task',
            'edit task',
            'delete task'
         ];
    
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
