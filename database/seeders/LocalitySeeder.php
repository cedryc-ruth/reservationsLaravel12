<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'postal_code' => '1000',
                'locality' => 'Bruxelles',
            ],
            [
                'postal_code' => '1020',
                'locality' => 'Laeken',
            ],
            [
                'postal_code' => '1050',
                'locality' => 'Ixelles',
            ],
            [
                'postal_code' => '4000',
                'locality' => 'Namur',
            ],
        ];

        DB::table('localities')->truncate();
        DB::table('localities')->insert($data);
    }
}
