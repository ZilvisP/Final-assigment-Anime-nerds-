<?php

namespace App\Http\Controllers;

use App\Models\Manga;

class PublicMangaController extends Controller
{
    public function index()
    {
        $mangacollection = Manga::all();
        return view('public.manga.index', ['mangacollection' => $mangacollection]);
    }
    public function show(Manga $manga)
    {
        return view('public.manga.show', ['manga' => $manga]);
    }
}
