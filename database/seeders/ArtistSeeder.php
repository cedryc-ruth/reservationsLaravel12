<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "firstname" => "Bob",
                "lastname" => "Sull",
            ],
            [
                "firstname" => "Clara",
                "lastname" => "Lynn",
            ],
        ];

        DB::table('artists')->truncate();

        foreach($data as $row) {
            $artist = new Artist();
            $artist->firstname = $row["firstname"];
            $artist->lastname = $row["lastname"];

            $artist->save();
        }
    }
}
