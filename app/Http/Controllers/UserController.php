<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Housing;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function dashboard()
    {
        $number_user = User::all()->count();
        // dd($number_user);
        $number_housing = Housing::all()->count();
        return view('user.dashboard', [
            'user' => $number_user,
            'housing' => $number_housing
        ]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('user.list')->with('success', "l'utilisateur a bien ete cree");
    }

    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'age' => ['required', 'integer'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['required', 'numeric'],
        ]);


        $user->update($validated);

        return redirect()->route('user.list')->with('success', 'l\'utilisateur a bien ete modifie');
    }

    public function show(User $user)
    {
        return view('user.show', ['user' => $user]);
    }

    public function test() {
        return "fsdfsdfsd";
    }

    public function list()
    {
        $user = User::paginate(3);
        // dd($user);
        return view('user.list', ['user' => $user]);
    }

    function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.list')->with('success', 'Utilisateur a ete supprimé avec succès.');
    }

}
