<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "kad",
                'email' => "kad@gmail.com",
                'password' => Hash::make("kad@gmail.com"),
                'role_id' => 2,
            ],
            [
                'name' => "guest",
                'email' => "guest@gmail.com",
                'password' => Hash::make("guest@gmail.com"),
                'role_id' => 1,
            ]
        ]);
    }
}
