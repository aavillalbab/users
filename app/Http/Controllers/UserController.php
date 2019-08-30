<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStore;
use App\Http\Requests\UserUpdate;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }

    public function store(UserStore $request)
    {
        $user = $request->validated();

        $userCreated = User::create($user);

        return redirect('users')->with('success', "Usuario $userCreated->name creado exitosamente.");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    public function update(UserUpdate $request, $id)
    {
        $userValidate = $request->validated();

        $user = User::findOrFail($id);

        $user->update($userValidate);

        return redirect('users')->with('success', "Usuario $user->name editado exitosamente.");
    }

    public function destroy($id)
    {
        //
    }
}
