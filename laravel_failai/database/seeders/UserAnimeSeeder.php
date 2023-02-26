<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserAnime;

class UserAnimeSeeder extends Seeder
{
    public function run()
    {
        UserAnime::create([
            'user_id' => 1,
            'anime_id' => 1,
            'status_id' => 1,
            'rating' => 9.0,
            'date_voted' => '2022-02-01',
        ]);

        UserAnime::create([
            'user_id' => 1,
            'anime_id' => 2,
            'status_id' => 1,
            'rating' => 8.0,
            'date_voted' => '2022-02-02',
        ]);

        UserAnime::create([
            'user_id' => 3,
            'anime_id' => 2,
            'status_id' => 3,
            'rating' => 7.5,
            'date_voted' => '2022-02-03',
        ]);
    }
}
