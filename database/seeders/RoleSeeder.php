<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['role' => 'admin'],
            ['role' => 'member'],
            ['role' => 'affiliate'],
            ['role' => 'producer'],
            ['role' => 'press'],
        ];

        DB::table('roles')->truncate();
        DB::table('roles')->insert($data);
    }
}
