<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class UsersSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dipta Arsyani',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin23'),
            'role' => null,
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);

    }
}
