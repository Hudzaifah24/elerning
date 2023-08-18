<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_page() {
        return view('pages.auth.login');
    }

    public function register_page() {
        return view('pages.auth.register');
    }
    
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

    public function register(Request $request) {
        $data = $request->validate([
            'name' => ['required', 'max:50', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create($data);

        try {
            return redirect()->route('login');
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
