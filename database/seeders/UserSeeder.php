<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_manager = Role::where('name', 'manager')->first();
        $role_employee = Role::where('name', 'employee')->first();

        $manager = new User();
        $manager->name = 'Rory';
        $manager->email = 'rory@larafest.ie';
        $manager->password = Hash::make('secret');
        $manager->save();
        $manager->roles()->attach($role_manager);

        $employee = new User();
        $employee->name = 'John';
        $employee->email = 'john@larafest.ie';
        $employee->password = Hash::make('secret');
        $employee->save();
        $employee->roles()->attach($role_employee);

    }
}
