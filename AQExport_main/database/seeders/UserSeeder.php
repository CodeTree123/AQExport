<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user_info;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_info::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'rootadmin',
            'role_id' => '1',
            'emp_id' => '1',
        ]);
    }
}
