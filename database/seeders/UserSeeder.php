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
                'id' => 1,
                'role' => 'admin',
                'name' => 'admin',
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 100,
                'role' => 'user',
                'name' => 'dummy',
                'password' => Hash::make('dummy'),
                'created_at' => now(),
                'updated_at' => now()
            ]
            // Add more users here if needed
        ]);
    }
}
