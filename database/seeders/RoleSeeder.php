<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'name' => 'admin_direktur',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'spv',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'sales',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'admin1',
            'guard_name' => 'web',
        ]);
    }
}
