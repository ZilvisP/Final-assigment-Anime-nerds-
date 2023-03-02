<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MangaRequest;
use App\Http\Managers\MangaManager;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index()
    {
        $mangas = Manga::all();

        return view('manga.index', compact('mangas'));
    }

    public function create()
    {
        return view('manga.create');
    }

    public function store(MangaRequest $request)
    {
        $manga = (new MangaManager)->create($request);

        return redirect()->route('manga.show', $manga);
    }

    public function show(Manga $manga)
    {
        return view('manga.show', compact('manga'));
    }

    public function edit(Manga $manga)
    {
        return view('manga.edit', compact('manga'));
    }

    public function update(MangaRequest $request, Manga $manga)
    {
        $manga = (new MangaManager)->update($request, $manga);

        return redirect()->route('manga.show', $manga);
    }

    public function destroy(Manga $manga)
    {
        MangaManager::delete($manga);

        return redirect()->route('manga.index');
    }
}
