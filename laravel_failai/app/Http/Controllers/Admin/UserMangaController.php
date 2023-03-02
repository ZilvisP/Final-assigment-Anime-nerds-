<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserMangaRequest;
use App\Models\UserManga;

class UserMangaController extends Controller
{
    public function index()
    {
        $usermangacollection = UserManga::all();
        return view('usermanga.index', ['usermangacollection' => $usermangacollection]);
    }

    public function create()
    {
        return view('usermanga.create');
    }

    public function store(UserMangaRequest $request)
    {
        $usermanga = UserManga::create($request->all());
        return redirect()->route('usermanga.show', $usermanga);
    }

    public function show(UserManga $usermanga)
    {
        return view('usermanga.show', ['usermanga' => $usermanga]);
    }

    public function edit(UserManga $usermanga)
    {
        return view('usermanga.edit', compact('usermanga'));
    }

    public function update(UserMangaRequest $request, UserManga $usermanga)
    {
        $usermanga->update($request->all());
        return redirect()->route('usermanga.show', $usermanga);
    }

    public function destroy(UserManga $usermanga)
    {
        $usermanga->delete();
        return redirect()->route('usermanga.index');
    }
}
