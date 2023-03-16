<?php

namespace App\Http\Managers;

use App\Models\Manga;
use Illuminate\Foundation\Http\FormRequest;

class MangaManager extends MediaManager
{
    protected static $model = Manga::class;
    protected string $entityType = 'manga';

    protected function setMediaSpecificProperties($manga, $request)
    {
        //taking different from anime

        $manga->volumes = $request->volumes;
        $manga->chapters = $request->chapters;
    }
}
