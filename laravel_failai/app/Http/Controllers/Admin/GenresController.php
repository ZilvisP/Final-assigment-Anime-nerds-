<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenreRequest;
use App\Models\Genre;

class GenresController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', ['genres' => $genres]);
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store(GenreRequest $request)
    {
        $genre = Genre::create($request->all());
        return redirect()->route('genres.show', $genre);
    }

    public function show(Genre $genre)
    {
        return view('genres.show', ['genre' => $genre]);
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function update(GenreRequest $request, Genre $genre)
    {
        $genre->update($request->all());
        return redirect()->route('genres.show', $genre);
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genres.index');
    }
}
