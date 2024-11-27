<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeds extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            [
                'nama' => 'Hansen Ganteng',
                'username' => 'YMK',
                'password' => Hash::make('capekbet'),
                'level' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Userek',
                'username' => 'tester',
                'password' => Hash::make('admin1234#'),
                'level' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
