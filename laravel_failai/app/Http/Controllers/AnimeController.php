<?php

namespace App\Http\Controllers;

use App\Http\Managers\AnimeManager;
use App\Models\Anime;

class AnimeController extends Controller
{

    public function index()
    {
//        $animeList = $this->animeManager->getAllAnime();
        $animecollection = Anime::all();

        return view('anime.index', ['animecollection' => $animecollection]);
    }
}
