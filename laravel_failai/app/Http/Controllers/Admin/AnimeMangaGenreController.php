<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnimeMangaGenreRequest;
use App\Models\AnimeMangaGenre;

class AnimeMangaGenreController extends Controller
{
    public function index()
    {
        $animemangagenres = AnimeMangaGenre::all();
        return view('dojo.animemangagenres.index', ['animemangagenres' => $animemangagenres]);
    }

    public function create()
    {
        return view('dojo.animemangagenres.create');
    }

    public function store(AnimeMangaGenreRequest $request)
    {
        $animemangagenre = AnimeMangaGenre::create($request->all());
        return redirect()->route('animemangagenres.show', $animemangagenre);
    }

    public function show(AnimeMangaGenre $animeMangaGenre)
    {
        return view('dojo.animemangagenres.show', ['animemangagenre' => $animeMangaGenre]);
    }

    public function edit(AnimeMangaGenre $animemangagenre)
    {
        return view('dojo.animemangagenres.edit', compact('animemangagenre'));
    }

    public function update(AnimeMangaGenreRequest $request, AnimeMangaGenre $animemangagenre)
    {
        $animemangagenre->update($request->all());
        return redirect()->route('animemangagenres.show', $animemangagenre);
    }

    public function destroy(AnimeMangaGenre $animemangagenre)
    {
        $animemangagenre->delete();
        return redirect()->route('animemangagenres.index');
    }
}
