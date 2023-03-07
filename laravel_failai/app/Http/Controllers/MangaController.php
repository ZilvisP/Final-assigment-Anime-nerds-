<?php

namespace App\Http\Controllers;

use App\Models\Manga;

class MangaController extends Controller
{
    public function index()
    {
        $mangacollection = Manga::all();
        return view('manga.index', ['mangacollection' => $mangacollection]);
    }
}
