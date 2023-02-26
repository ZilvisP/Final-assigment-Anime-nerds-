<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Anime;

class AnimeSeeder extends Seeder
{
    public function run()
    {
        $anime = [
            [
                'title' => 'Attack on Titan',
                'description' => 'A story about Eren Yeager and his friends who live in a world overrun by Titans.',
                'release_date' => '2013-04-07',
                'cover_image' => 'attack_on_titan_cover.jpg',
                'thumbnail_image' => 'attack_on_titan_thumbnail.jpg',
                'status_id' => 1,
            ],
            [
                'title' => 'Death Note',
                'description' => 'A story about Light Yagami, a high school student who discovers a supernatural notebook that allows him to kill anyone whose name he writes in it.',
                'release_date' => '2006-10-04',
                'cover_image' => 'death_note_cover.jpg',
                'thumbnail_image' => 'death_note_thumbnail.jpg',
                'status_id' => 1,
            ]
        ];

        foreach ($anime as $ani) {
            Anime::create($ani);
        }
    }
}
