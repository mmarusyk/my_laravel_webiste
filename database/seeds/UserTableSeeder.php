<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'User Name';
        $user->email = 'user@a.a';
        $user->password = bcrypt('123123123');
        $user->save();
        $user->roles()->attach($role_user);


        $admin = new User();
        $admin->name = 'Admin Name';
        $admin->email = 'admin@a.a';
        $admin->password = bcrypt('123123123');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
