<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreatePimpinanUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userPimpinan = User::create([
        	'name' => 'Pimpinan', 
        	'email' => 'pimpinan@gmail.com',
        	'password' => bcrypt('123456')
        ]);

        $pimpinan = Role::create(['name' => 'pimpinan'])
            ->givePermissionTo(['create task', 'edit task', 'show task', 'delete task']);       

        $userPimpinan->assignRole($pimpinan);        
    }
}
