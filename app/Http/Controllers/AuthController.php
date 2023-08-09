<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(String $id) {
        $data = $request->validate([
            'name' => ['required', 'max:50', 'string'],
            'email' => ['requered', 'email'],
            'password' => ['required', 'confirm'],
        ]);

        $user = User::create($data);

        try {
            Auth::login($user);

            return redirect()->route('home');
        } catch (\Throwable $th) {
            throw $th;

            return back()->withInput();
        }

        return back()->withInput();
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }
}
