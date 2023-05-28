<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
            DB::table('users')->insert([
                [
                    'name' => 'user1',
                    'email' => 'user1@example.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password1234'),
                    'role' => 9,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'user2',
                    'email' => 'user2@example.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password1234'),
                    'role' => 9,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'user3',
                    'email' => 'user3@example.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password1234'),
                    'role' => 9,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'user4',
                    'email' => 'user4@example.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password1234'),
                    'role' => 9,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'user5',
                    'email' => 'user5@example.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password1234'),
                    'role' => 9,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
        ]);
    }
}
