<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genres = [
            ['name' => 'Action'],
            ['name' => 'Adventure'],
            ['name' => 'Avant Garde'],
            ['name' => 'Boys Love'],
            ['name' => 'Comedy'],
            ['name' => 'Demons'],
            ['name' => 'Drama'],
            ['name' => 'Ecchi'],
            ['name' => 'Fantasy'],
            ['name' => 'Girls Love'],
            ['name' => 'Gourmet'],
            ['name' => 'Harem'],
            ['name' => 'Horror'],
            ['name' => 'Isekai'],
            ['name' => 'Iyashikei'],
            ['name' => 'Josei'],
            ['name' => 'Kids'],
            ['name' => 'Magic'],
            ['name' => 'Mahou Shoujo'],
            ['name' => 'Martial Arts'],
            ['name' => 'Mecha'],
            ['name' => 'Military'],
            ['name' => 'Music'],
            ['name' => 'Mystery'],
            ['name' => 'Parody'],
            ['name' => 'Psychological'],
            ['name' => 'Reverse Harem'],
            ['name' => 'Romance'],
            ['name' => 'School'],
            ['name' => 'Sci-Fi'],
            ['name' => 'Seinen'],
            ['name' => 'Shoujo'],
            ['name' => 'Shounen'],
            ['name' => 'Slice of Life'],
            ['name' => 'Space'],
            ['name' => 'Sports'],
            ['name' => 'Super Power'],
            ['name' => 'Supernatural'],
            ['name' => 'Suspense'],
            ['name' => 'Thriller'],
            ['name' => 'Vampire'],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
