<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Role::create([
            'name' => 'super-admin',
            'display_name' => 'Super Administrator',
            'description' => 'Super Administrator users can do anything.',
        ]);

        $teamAdmin = Role::create([
            'name' => 'team-admin',
            'display_name' => 'Client',
            'description' => 'Administrator users can perform any action.',
        ]);

        $employe = Role::create([
            'name' => 'employe',
            'display_name' => 'Employé',
            'description' => 'Employe users can perform any action.',
        ]);

    }
}
