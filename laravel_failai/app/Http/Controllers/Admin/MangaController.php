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
        $mangacollection = Manga::all();
        return view('dojo.manga.index', ['mangacollection' => $mangacollection]);
    }

    public function create()
    {
        return view('dojo.manga.create');
    }

    public function store(MangaRequest $request)
    {
        $manga = (new MangaManager)->create($request);

        return redirect()->route('manga.show', $manga);
    }

    public function show(Manga $manga)
    {
        return view('dojo.manga.show', compact('manga'));
    }

    public function edit(Manga $manga)
    {
        return view('dojo.manga.edit', compact('manga'));
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
