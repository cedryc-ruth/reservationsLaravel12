<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["type" => "comédien"],
            ["type" => "scénographe"],
            ["type" => "auteur"],
        ];

        //Vider la table
        DB::table('types')->truncate();

        //Insérer les données dans la table
        DB::table('types')->insert($data);
    }
}
