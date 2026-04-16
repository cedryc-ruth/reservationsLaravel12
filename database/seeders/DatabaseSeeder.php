<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ArtistSeeder::class,
            TypeSeeder::class,
            LocalitySeeder::class,
            RoleSeeder::class,
            PriceSeeder::class,
            UserSeeder::class,
        ]);
    }
}
