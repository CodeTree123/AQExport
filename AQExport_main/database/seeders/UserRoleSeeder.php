<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user_role;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_role::create([
            'role' => 'Admin',
        ]);
        user_role::create([
            'role' => 'Manager',
        ]);
        user_role::create([
            'role' => 'QC',
        ]);
        user_role::create([
            'role' => 'Merchendiser',
        ]);
        user_role::create([
            'role' => 'Buyer',
        ]);
    }
}
