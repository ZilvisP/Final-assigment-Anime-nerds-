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
            'rating' => 4,
            'date_rated' => '2022-03-10',
        ]);

        UserAnime::create([
            'user_id' => 2,
            'anime_id' => 5,
            'status_id' => 2,
            'rating' => 3.5,
            'date_rated' => '2022-02-25',
        ]);

        UserAnime::create([
            'user_id' => 3,
            'anime_id' => 10,
            'status_id' => 3,
            'rating' => 2,
            'date_rated' => '2022-01-15',
        ]);

        UserAnime::create([
            'user_id' => 4,
            'anime_id' => 12,
            'status_id' => 4,
            'rating' => 4.5,
            'date_rated' => '2022-03-01',
        ]);

        UserAnime::create([
            'user_id' => 5,
            'anime_id' => 3,
            'status_id' => 5,
            'rating' => 5,
            'date_rated' => '2022-02-12',
        ]);

        UserAnime::create([
            'user_id' => 6,
            'anime_id' => 7,
            'status_id' => 1,
            'rating' => 3,
            'date_rated' => '2022-02-27',
        ]);

        UserAnime::create([
            'user_id' => 7,
            'anime_id' => 15,
            'status_id' => 2,
            'rating' => 4.5,
            'date_rated' => '2022-03-05',
        ]);

        UserAnime::create([
            'user_id' => 8,
            'anime_id' => 18,
            'status_id' => 3,
            'rating' => 2.5,
            'date_rated' => '2022-01-20',
        ]);

        UserAnime::create([
            'user_id' => 9,
            'anime_id' => 4,
            'status_id' => 4,
            'rating' => 3,
            'date_rated' => '2022-03-03',
        ]);

        UserAnime::create([
            'user_id' => 1,
            'anime_id' => 8,
            'status_id' => 5,
            'rating' => 4,
            'date_rated' => '2022-02-18',
        ]);

        UserAnime::create([
            'user_id' => 2,
            'anime_id' => 11,
            'status_id' => 1,
            'rating' => 5,
            'date_rated' => '2022-03-08',
        ]);

        UserAnime::create([
            'user_id' => 3,
            'anime_id' => 16,
            'status_id' => 2,
            'rating' => 3.5,
            'date_rated' => '2022-01-28',
        ]);
    }
}
