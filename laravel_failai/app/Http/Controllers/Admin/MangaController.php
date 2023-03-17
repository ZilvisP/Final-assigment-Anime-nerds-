<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MangaRequest;
use App\Http\Managers\MangaManager;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{

    protected MangaManager $mangaManager;

    public function __construct(MangaManager $mangaManager)
    {
        $this->mangaManager = $mangaManager;
    }

    public function index()
    {
        $mangacollection = Manga::all();

        return view('dojo.manga.index', ['mangacollection' => $mangacollection]);
    }

    public function create()
    {
        return view('dojo.manga.create');
    }
//modifikuoju kad is managerio grazintu ne void o media ir galeciau show
    public function store(MangaRequest $request)
    {
        $manga =  $this->mangaManager->create($request);

        return redirect()->route('manga.show', ['manga' => $manga->id])->with('success', 'Manga created successfully.');
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
        $this->mangaManager->update($manga->id, $request);

        return redirect()->route('manga.show', ['manga' => $manga->id] )->with('success', 'Manga updated successfully.');
    }

    public function destroy(Manga $manga)
    {
        $this->mangaManager->delete($manga->id);

        return redirect()->route('manga.index')->with('success', 'Manga deleted successfully.');
    }
}
