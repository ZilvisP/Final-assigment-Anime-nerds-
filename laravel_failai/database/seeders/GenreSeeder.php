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
            ['name' => 'Comedy'],
            ['name' => 'Drama'],
            ['name' => 'Fantasy'],
            ['name' => 'Horror'],
            ['name' => 'Mystery'],
            ['name' => 'Romance'],
            ['name' => 'Science Fiction'],
            ['name' => 'Thriller'],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
