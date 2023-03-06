<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MangaCollection;
use App\Http\Resources\MangaResource;
use App\Models\Manga;

class MangaController extends Controller
{
    /**
     * Get popular manga with highest average rating.
     *
     * @return MangaCollection
     */

//    public function index()
//    {
//        $mangacollection = Manga::all();
//
//        return new MangaCollection($mangacollection);
//    }
    public function popular()
    {
        $popularManga = Manga::withAvg('userManga', 'rating')
            ->orderByDesc('user_manga_avg_rating')
            ->take(6)
            ->get();

        return new MangaCollection($popularManga);
    }

    /**
     * Get newest manga added by date.
     *
     * @return MangaCollection
     */
    public function newest()
    {
        $newestManga = Manga::latest()
            ->take(6)
            ->get();

        return new MangaCollection($newestManga);
    }

    /**
     * Get a specific manga.
     *
     * @param Manga $manga
     * @return MangaResource
     */
    public function show(Manga $manga)
    {
        $manga->load(['genres', 'ratings']);
        $averageRating = $manga->ratings()->avg('rating');
        return new MangaResource($manga, $averageRating);
    }
}
