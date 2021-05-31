<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAgenUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAgen = User::create([
        	'name' => 'Agen Xylo', 
        	'email' => 'agen@gmail.com',
        	'password' => bcrypt('123456')
        ]);

        $agen = Role::create(['name' => 'agen'])
            ->givePermissionTo(['create task', 'edit task', 'show task', 'delete task']);       

        $userAgen->assignRole($agen);

        User::factory(50)->create()->each(function ($user) {
            $user->assignRole('agen'); 
        });
    }
}
