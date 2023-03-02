<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Managers\AnimeManager;
use App\Http\Requests\AnimeRequest;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    protected $animeManager;

    public function __construct(AnimeManager $animeManager)
    {
        $this->animeManager = $animeManager;
    }

    public function index()
    {
        $animeList = $this->animeManager->getAllAnime();

        return view('anime.index', compact('animeList'));
    }

    public function create()
    {
        return view('anime.create');
    }

    public function store(AnimeRequest $request)
    {
        $this->animeManager->createAnime($request->validated());

        return redirect()->route('anime.index')->with('success', 'Anime created successfully.');
    }

    public function show(Anime $anime)
    {
        return view('anime.show', compact('anime'));
    }

    public function edit(Anime $anime)
    {
        return view('anime.edit', compact('anime'));
    }

    public function update(AnimeRequest $request, Anime $anime)
    {
        $this->animeManager->updateAnime($anime->id, $request->validated());

        return redirect()->route('anime.index')->with('success', 'Anime updated successfully.');
    }

    public function destroy(Anime $anime)
    {
        $this->animeManager->deleteAnime($anime->id);

        return redirect()->route('anime.index')->with('success', 'Anime deleted successfully.');
    }
}
