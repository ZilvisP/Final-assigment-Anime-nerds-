<?php

namespace App\Http\Managers;

use App\Models\Anime;
use Illuminate\Foundation\Http\FormRequest;

class AnimeManager extends MediaManager
{
    protected static $model = Anime::class;
    protected string $entityType = 'anime';

    protected function setMediaSpecificProperties($anime, $request)
    {
        //taking different from manga
        $anime->episodes = $request->episodes;
    }
}
