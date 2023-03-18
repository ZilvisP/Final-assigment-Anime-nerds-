<?php

namespace App\Http\Controllers;
use App\Models\Manga;
use App\Models\UserManga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicMangaController extends Controller
{
    public function index()
    {
        $mangacollection = Manga::all();

        return view('public.manga.index', ['mangacollection' => $mangacollection]);
    }


    public function updateStatus(Request $request, Manga $manga)
    {
        $userManga = $manga->userManga()->where('user_id', Auth::id())->first();

        if (!$userManga) {
            $userManga = new UserManga();
            $userManga->manga_id = $manga->id;
            $userManga->user_id = Auth::id();
        }

        $userManga->status_id = $request->input('status_id');
        $userManga->save();
    }
    public function showByStatus($status_id)
    {
        $mangacollection = Manga::whereHas('userManga', function($query) use ($status_id) {
            $query->where('user_id', Auth::id())->where('status_id', $status_id);
        })->get();
        if ($mangacollection->isEmpty()) {
            $mangacollection = Manga::all();
        }
        return view('public.manga.index', [
            'mangacollection' => $mangacollection,
        ]);
    }
    public function rateManga(Request $request, Manga $manga)
    {
        $userManga = $manga->userManga()->where('user_id', Auth::id())->where('manga_id', $manga->id)->first();

        if (!$userManga) {
            $userManga = new UserManga();
            $userManga->manga_id = $manga->id;
            $userManga->user_id = Auth::id();
        }


        $userManga->rating = $request->input('rating');
        $userManga->save();
    }
    public function show(Manga $manga)
    {
        return view('dojo.manga.show', compact('manga'));
    }
}
