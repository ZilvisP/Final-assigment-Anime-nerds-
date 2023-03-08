<?php

namespace App\Http\Controllers;

use App\Http\Managers\AnimeManager;
use App\Models\Anime;

class PublicAnimeController extends Controller
{

    public function index()
    {
//        $animeList = $this->animeManager->getAllAnime();
        $animecollection = Anime::all();

        return view('public.anime.index', ['animecollection' => $animecollection]);
    }
    public function show(Anime $anime)
    {
        return view('public.anime.show', ['anime' => $anime]);
    }
}
