<?php

namespace Database\Seeders;

use App\Models\UserStatus;
use Illuminate\Database\Seeder;

class UserStatusSeeder extends Seeder
{
    public function run()
    {
        $statuses = [
            ['name' => 'Want to watch', 'category' => 'Anime'],
            ['name' => 'Watching', 'category' => 'Anime'],
            ['name' => 'Completed', 'category' => 'Anime'],
            ['name' => 'Dropped', 'category' => 'Anime'],
            ['name' => 'Plan to watch', 'category' => 'Anime'],
            ['name' => 'Want to read', 'category' => 'Manga'],
            ['name' => 'Reading', 'category' => 'Manga'],
            ['name' => 'Completed', 'category' => 'Manga'],
            ['name' => 'Dropped', 'category' => 'Manga'],
            ['name' => 'Plan to read', 'category' => 'Manga'],
            ['name' => 'Active', 'category' => 'User'],
            ['name' => 'Inactive', 'category' => 'User'],
            ['name' => 'Blocked', 'category' => 'User'],
            ['name' => 'Deleted', 'category' => 'User'],
        ];

        foreach ($statuses as $status) {
            UserStatus::create([
                'name' => $status['name'],
                'category' => $status['category'],
            ]);
        }
    }
}
