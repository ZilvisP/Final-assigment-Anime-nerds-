<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GlobalStatusRequest;
use App\Models\GlobalStatus;

class GlobalStatusesController extends Controller
{
    public function index()
    {
        $globalstatuses = GlobalStatus::all();
        return view('globalstatuses.index', ['globalstatuses' => $globalstatuses]);
    }

    public function create()
    {
        return view('globalstatuses.create');
    }

    public function store(GlobalStatusRequest $request)
    {
        $globalstatus = GlobalStatus::create($request->all());
        return redirect()->route('globalstatuses.show', $globalstatus);
    }

    public function show(GlobalStatus $globalstatus)
    {
        return view('globalstatuses.show', ['globalstatus' => $globalstatus]);
    }

    public function edit(GlobalStatus $globalstatus)
    {
        return view('globalstatuses.edit', compact('globalstatus'));
    }

    public function update(GlobalStatusRequest $request, GlobalStatus $globalstatus)
    {
        $globalstatus->update($request->all());
        return redirect()->route('globalstatuses.show', $globalstatus);
    }

    public function destroy(GlobalStatus $category)
    {
        $category->delete();
        return redirect()->route('globalstatuses.index');
    }
}
