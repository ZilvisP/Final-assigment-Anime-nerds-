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
        $userManga = UserManga::where('user_id', Auth::id())->where('manga_id', $manga->id)->first();
        $userManga->status_id = $request->input('status_id');
        $userManga->save();

        return response()->json(['message' => 'Status updated successfully.']);
    }

    public function show(Manga $manga)
    {
        return view('public.manga.show', ['manga' => $manga]);
    }
}
