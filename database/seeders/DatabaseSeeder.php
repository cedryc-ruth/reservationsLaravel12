<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Désactiver la vérification des contraintes de clés étrangères
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); 

        $this->call([
            ArtistSeeder::class,
            TypeSeeder::class,
            LocalitySeeder::class,
            RoleSeeder::class,
            PriceSeeder::class,
            UserSeeder::class,
        ]);

        //Réactiver la vérification des contraintes de clés étrangères
        DB::statement('SET FOREIGN_KEY_CHECKS=1'); 
    }
}
