<?php

namespace App\Http\Controllers;

use App\Http\Managers\AnimeManager;
use App\Models\Anime;

class PublicAnimeController extends Controller
{

    public function index()
    {
        $animecollection = Anime::all();

        $UserAnime = auth()->user()->anime;

        return view('public.anime.index', ['animecollection' => $animecollection]);
    }
    public function show(Anime $anime)
    {
        return view('public.anime.show', ['anime' => $anime]);
    }
}
