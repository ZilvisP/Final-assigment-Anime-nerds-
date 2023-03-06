<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnimeCollection;
use App\Http\Resources\AnimeResource;
use App\Models\Anime;

class AnimeController extends Controller
{
    /**
     * Get popular anime with highest average rating.
     *
     * @return AnimeCollection
     *
     */
//    public function index()
//    {
//        $animecollection = Anime::all();
//
//        return new AnimeCollection($animecollection);
//    }
    public function popular()
    {
        $popularAnime = Anime::withAvg('userAnime', 'rating')
            ->orderByDesc('user_anime_avg_rating')
            ->take(6)
            ->get();

        return new AnimeCollection($popularAnime);
    }

    /**
     * Get newest anime added by date.
     *
     * @return AnimeCollection
     */
    public function newest()
    {
        $newestAnime = Anime::latest()
            ->take(6)
            ->get();

        return new AnimeCollection($newestAnime);
    }

    /**
     * Get a specific anime.
     *
     * @param Anime $anime
     * @return AnimeResource
     */
    public function show(Anime $anime)
    {
        $anime->load(['genres', 'ratings']);
        $averageRating = $anime->ratings()->avg('rating');
        return new AnimeResource($anime, $averageRating);
    }
}
