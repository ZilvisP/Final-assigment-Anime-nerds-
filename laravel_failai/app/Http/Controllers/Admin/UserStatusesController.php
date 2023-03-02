<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStatusRequest;
use App\Models\UserStatus;

class UserStatusesController extends Controller
{
    public function index()
    {
        $userstatuses = UserStatus::all();
        return view('userstatuses.index', ['userstatuses' => $userstatuses]);
    }

    public function create()
    {
        return view('userstatuses.create');
    }

    public function store(UserStatusRequest $request)
    {
        $userstatus = UserStatus::create($request->all());
        return redirect()->route('userstatuses.show', $userstatus);
    }

    public function show(UserStatus $userstatus)
    {
        return view('userstatuses.show', ['userstatus' => $userstatus]);
    }

    public function edit(UserStatus $userstatus)
    {
        return view('userstatuses.edit', compact('userstatus'));
    }

    public function update(UserStatusRequest $request, UserStatus $userstatus)
    {
        $userstatus->update($request->all());
        return redirect()->route('userstatuses.show', $userstatus);
    }

    public function destroy(UserStatus $userstatus)
    {
        $userstatus->delete();
        return redirect()->route('userstatuses.index');
    }
}
