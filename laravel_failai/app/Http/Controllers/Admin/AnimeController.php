<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Managers\AnimeManager;
use App\Http\Requests\AnimeRequest;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    protected AnimeManager $animeManager;

    public function __construct(AnimeManager $animeManager)
    {
        $this->animeManager = $animeManager;
    }

    public function index()
    {
        $animecollection = Anime::all();

        return view('dojo.anime.index', ['animecollection' => $animecollection]);
    }

    public function create()
    {
        return view('dojo.anime.create');
    }

//modifikuoju kad is managerio grazintu ne void o media ir galeciau show
    public function store(AnimeRequest $request)
    {
        $anime = $this->animeManager->create($request);

        return redirect()->route('anime.show', ['anime' => $anime->id])->with('success', 'Anime created successfully.');
    }

    public function show(Anime $anime)
    {
        return view('dojo.anime.show', compact('anime'));
    }

    public function edit(Anime $anime)
    {
        return view('dojo.anime.edit', compact('anime'));
    }

    public function update(AnimeRequest $request, Anime $anime)
    {
        $this->animeManager->update($anime->id, $request);

        return redirect()->route('anime.show', ['anime' => $anime->id])->with('success', 'Anime updated successfully.');
    }

    public function destroy(Anime $anime)
    {
        $this->animeManager->delete($anime->id);

        return redirect()->route('anime.index')->with('success', 'Anime deleted successfully.');
    }
}
