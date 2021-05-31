<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = User::create([
        	'name' => 'Admin', 
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('password')
        ]);

        $admin = Role::create(['name' => 'admin'])
        ->givePermissionTo(['create contact', 'edit contact', 'show contact', 'delete contact']);

        $userAdmin->assignRole($admin);
    }
}
