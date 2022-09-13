<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin_direktur = User::create([
            'name' => 'admin_direktur',
            'email' => 'admin@role.com',
            'password' => bcrypt('admin')
        ]);
        $admin_direktur->assignRole('admin_direktur');

        $spv = User::create([
            'name' => 'spv',
            'email' => 'spv@role.com',
            'password' => bcrypt('spv')
        ]);
        $spv->assignRole('spv');

        $sales = User::create([
            'name' => 'sales',
            'email' => 'sales@role.com',
            'password' => bcrypt('sales')
        ]);
        $sales->assignRole('sales');

        $admin1 = User::create([
            'name' => 'admin1',
            'email' => 'admin1@role.com',
            'password' => bcrypt('admin1')
        ]);
        $admin1->assignRole('admin1');
    }
}
