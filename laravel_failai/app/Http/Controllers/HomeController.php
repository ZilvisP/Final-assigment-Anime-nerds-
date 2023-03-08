<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Api\AnimeController;
use App\Http\Controllers\Api\MangaController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */

    public function __invoke(Request $request)
    {
        $animeController = new AnimeController();
        $popularAnime = $animeController->popular();
        $newestAnime = $animeController->newest();

        $mangaController = new MangaController();
        $popularManga = $mangaController->popular();
        $newestManga = $mangaController->newest();

        return view('public.home', compact('popularAnime', 'newestAnime', 'popularManga', 'newestManga'));

    }
}
