<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->description = 'Company manager';
        $role_manager->save();

        $role_employee = new Role();
        $role_employee->name = 'employee';
        $role_employee->description = 'Company employee';
        $role_employee->save();
    }
}
