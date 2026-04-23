<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Bob Sull',
                'email'=>'bob@sull.com',
                'password'=>'epfc',         //TODO Hasher ce mot de passe
            ],
            [
                'name'=>'Anna Lynn',
                'email'=>'anna@sull.com',
                'password'=>'epfc',         //TODO Hasher ce mot de passe
            ],
        ];

        DB::table('users')->truncate();
        DB::table('users')->insert($data);
    }
}
