<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('admins')->insert([
            [
                'name' => 'admin1',
                'email' => 'admin1@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
           
    }
}
