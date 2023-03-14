<?php

namespace App\Http\Controllers;

use App\Http\Managers\AnimeManager;
use App\Models\Anime;
use App\Models\UserAnime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicAnimeController extends Controller
{

    public function index()
    {
        $animecollection = Anime::all();

        return view('public.anime.index', ['animecollection' => $animecollection]);
    }
    public function updateStatus(Request $request, Anime $anime)
    {
        $userAnime = $anime->userAnime()->where('user_id', Auth::id())->first();

        if (!$userAnime) {
            $userAnime = new UserAnime();
            $userAnime->anime_id = $anime->id;
            $userAnime->user_id = Auth::id();
        }

        $userAnime->status_id = $request->input('status_id');
        $userAnime->save();


    }


    public function show(Anime $anime)
    {
        return view('public.anime.show', ['anime' => $anime]);
    }
}


//        $userAnime = $anime->userAnime()->where('user_id', Auth::id())->firstOrFail();
//        $userAnime->status_id = $request->input('status_id');
////
////        if (!$anime) {
////            return response()->json(['message' => 'Anime not found.'], 404);
////        }
//
//        $userAnime->anime_id = $anime->id;
//        $userAnime->save();
//
//        return response()->json(['message' => 'Status updated successfully.']);
