<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAnimeRequest;
use App\Models\UserAnime;

class UserAnimeController extends Controller
{
    public function index()
    {
        $useranimecollection = UserAnime::all();
        return view('useranime.index', ['useranimecollection' => $useranimecollection]);
    }

    public function create()
    {
        return view('useranime.create');
    }

    public function store(UserAnimeRequest $request)
    {
        $useranime = UserAnime::create($request->all());
        return redirect()->route('useranime.show', $useranime);
    }

    public function show(UserAnime $useranime)
    {
        return view('useranime.show', ['useranime' => $useranime]);
    }

    public function edit(UserAnime $useranime)
    {
        return view('useranime.edit', compact('useranime'));
    }

    public function update(UserAnimeRequest $request, UserAnime $useranime)
    {
        $useranime->update($request->all());
        return redirect()->route('useranime.show', $useranime);
    }

    public function destroy(UserAnime $useranime)
    {
        $useranime->delete();
        return redirect()->route('useranime.index');
    }
}
