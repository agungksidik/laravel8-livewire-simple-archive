<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateSuperAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userSuperAdmin = User::create([
        	'name' => 'Agung Sidik Muhamad', 
        	'email' => 'agungksidik@gmail.com',
        	'password' => bcrypt('123456')
        ]);
  
        $roleSuperAdmin = Role::create(['name' => 'super admin']);  
        $permissions = Permission::pluck('id','id')->all();
        $roleSuperAdmin->syncPermissions($permissions);
        $userSuperAdmin->assignRole([$roleSuperAdmin->id]);
    }
}
