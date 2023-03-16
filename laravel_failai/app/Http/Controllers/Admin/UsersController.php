<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Managers\UserManager;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dojo.users.index', compact('users'));
    }

    public function store(UserStoreRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = Hash::make($request->password);
        if (Auth::user()->role === User::ROLE_ADMIN) {
            $user->role = $request->role;
        }
        $user->save();
        return redirect()->route('users.show', $user);
    }

    public function create()
    {
        return view('dojo.users.create');
    }

    public function show(User $user)
    {
        return view('dojo.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('dojo.users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
//        $data = $request->all();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->email_verified_at = $request->email_verified_at;
        if (Auth::user()->role === User::ROLE_ADMIN){
            $user->role = $request->role;
        }
        $user->save();

        return redirect()->route('users.show', $user);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
