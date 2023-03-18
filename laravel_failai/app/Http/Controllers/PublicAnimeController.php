<?php

namespace App\Http\Controllers;
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
    public function showByStatus($status_id)
    {
        $animecollection = Anime::whereHas('userAnime', function($query) use ($status_id) {
            $query->where('user_id', Auth::id())->where('status_id', $status_id);
        })->get();
        if ($animecollection->isEmpty()) {
            $animecollection = Anime::all();
        }
        return view('public.anime.index', [
            'animecollection' => $animecollection,
        ]);
    }
    public function rateAnime(Request $request, Anime $anime)
    {
        $userAnime = $anime->userAnime()->where('user_id', Auth::id())->where('anime_id', $anime->id)->first();

        if (!$userAnime) {
            $userAnime = new UserAnime();
            $userAnime->anime_id = $anime->id;
            $userAnime->user_id = Auth::id();
        }

        $userAnime->rating = $request->input('rating');
        $userAnime->save();
    }

    public function show(Anime $anime)
    {
        return view('dojo.anime.show', compact('anime'));
    }
}
