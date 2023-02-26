<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\GlobalStatus;

class GlobalStatusSeeder extends Seeder
{
    public function run()
    {
        $global_statuses = [
            ['name' => 'Finished Airing', 'category' => 'anime'],
            ['name' => 'Currently Airing', 'category' => 'anime'],
            ['name' => 'Not Yet Aired', 'category' => 'anime'],
            ['name' => 'On Hiatus', 'category' => 'anime'],
            ['name' => 'Cancelled', 'category' => 'anime'],
            ['name' => 'Finished', 'category' => 'manga'],
            ['name' => 'Ongoing', 'category' => 'manga'],
            ['name' => 'Not Yet Published', 'category' => 'manga'],
            ['name' => 'On Hiatus', 'category' => 'manga'],
            ['name' => 'Cancelled', 'category' => 'manga'],
        ];

        foreach ($global_statuses as $status) {
            GlobalStatus::create([
                'name' => $status['name'],
                'category' => $status['category'],
            ]);
        }
    }
}
