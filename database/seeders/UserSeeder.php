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

        DB::statement('SET FOREIGN_KEY_CHECKS=0'); 
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1'); 

        DB::table('users')->insert($data);
    }
}
