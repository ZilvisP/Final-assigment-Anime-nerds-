<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manga;
use App\Models\GlobalStatus;

class MangaSeeder extends Seeder
{
    public function run()
    {
        $mangas = [
            [
                'title' => 'One Piece',
                'description' => 'A story about Monkey D. Luffy and his friends who sail the Grand Line in search of the One Piece treasure.',
                'rating' => 5,
                'release_date' => '1997-07-22',
                'cover_image' => 'one_piece_cover.jpg',
                'thumbnail_image' => 'one_piece_thumbnail.jpg',
                'status_id' => 1,
            ],
            [
                'title' => 'Naruto',
                'description' => 'A story about Naruto Uzumaki, a young ninja who dreams of becoming the Hokage, the leader of his village.',
                'rating' => 5,
                'release_date' => '1999-09-21',
                'cover_image' => 'naruto_cover.jpg',
                'thumbnail_image' => 'naruto_thumbnail.jpg',
                'status_id' => 1,
            ],
            [
                'title' => 'Bleach',
                'description' => 'A story about Ichigo Kurosaki, a high school student who becomes a Soul Reaper and protects the living world from evil spirits.',
                'rating' => 5,
                'release_date' => '2001-08-07',
                'cover_image' => 'bleach_cover.jpg',
                'thumbnail_image' => 'bleach_thumbnail.jpg',
                'status_id' => 1,
            ],
            [
                'title' => 'Dragon Ball',
                'description' => 'A story about Goku, a warrior with superhuman strength who goes on adventures to find the seven Dragon Balls and save the world.',
                'rating' => 5,
                'release_date' => '1984-11-20',
                'cover_image' => 'dragon_ball_cover.jpg',
                'thumbnail_image' => 'dragon_ball_thumbnail.jpg',
                'status_id' => 1,
            ]
        ];

        foreach ($mangas as $manga) {
            Manga::create($manga);
        }
    }
}
