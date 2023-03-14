<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserManga;

class UserMangaSeeder extends Seeder
{
    public function run()
    {
        UserManga::create([
            'user_id' => 1,
            'manga_id' => 1,
            'status_id' => 6,
            'rating' => 4,
            'date_rated' => '2022-03-10',
        ]);

        UserManga::create([
            'user_id' => 2,
            'manga_id' => 5,
            'status_id' => 7,
            'rating' => 3.5,
            'date_rated' => '2022-02-25',
        ]);

        UserManga::create([
            'user_id' => 3,
            'manga_id' => 10,
            'status_id' => 8,
            'rating' => 2,
            'date_rated' => '2022-01-15',
        ]);

        UserManga::create([
            'user_id' => 4,
            'manga_id' => 12,
            'status_id' => 9,
            'rating' => 4.5,
            'date_rated' => '2022-03-01',
        ]);

        UserManga::create([
            'user_id' => 5,
            'manga_id' => 3,
            'status_id' => 10,
            'rating' => 5,
            'date_rated' => '2022-02-12',
        ]);

        UserManga::create([
            'user_id' => 6,
            'manga_id' => 7,
            'status_id' => 6,
            'rating' => 3,
            'date_rated' => '2022-02-27',
        ]);

        UserManga::create([
            'user_id' => 7,
            'manga_id' => 15,
            'status_id' => 7,
            'rating' => 4.5,
            'date_rated' => '2022-03-05',
        ]);

        UserManga::create([
            'user_id' => 8,
            'manga_id' => 18,
            'status_id' => 8,
            'rating' => 2.5,
            'date_rated' => '2022-01-20',
        ]);

        UserManga::create([
            'user_id' => 9,
            'manga_id' => 4,
            'status_id' => 9,
            'rating' => 3,
            'date_rated' => '2022-03-03',
        ]);

        UserManga::create([
            'user_id' => 1,
            'manga_id' => 8,
            'status_id' => 10,
            'rating' => 4,
            'date_rated' => '2022-02-18',
        ]);

        UserManga::create([
            'user_id' => 2,
            'manga_id' => 11,
            'status_id' => 6,
            'rating' => 5,
            'date_rated' => '2022-03-08',
        ]);
    }
}
