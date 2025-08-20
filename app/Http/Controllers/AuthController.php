<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        $credentials = $request->validated();
        // dd(Auth::user()->role);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->route('user.dashboard');
        }

        return to_route('auth.login')->withErrors([
            'email' => 'Email invalide'
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'age' => ['required', 'integer'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['required', 'numeric'],
            'password' => ['required', 'confirmed', 'string'],
            'password_confirmation' => ['required', 'string'],
        ]);

        $data['role'] = 'realto';

        User::create($data);

        return redirect()->route('auth.login')->with('success', "Votre compte a bien ete cree");
    }

    public function logout()
    {
        Auth::logout();

        return to_route('home');
    }
}
