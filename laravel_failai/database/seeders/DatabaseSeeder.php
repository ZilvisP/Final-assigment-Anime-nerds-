<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(UserStatusSeeder::class);
        $this->call(GlobalStatusSeeder::class);
        $this->call(AnimeSeeder::class);
        $this->call(UserAnimeSeeder::class);
        $this->call(MangaSeeder::class);
//        $this->call(UserMangaSeeder::class);
    }
}
