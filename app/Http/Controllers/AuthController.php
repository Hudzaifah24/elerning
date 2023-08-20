<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\Fonnte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use Fonnte;
    
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

        $user = User::where('email', $request->email)->first();

        if ($user && $user->active == 0) {
            return redirect()->route('activication');
        }

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
            'phone' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);

        $data['token'] = rand(111111, 999999);

        $user = User::create($data);

        $messages = "Verification Your Account $user->token";

        $this->send_message($user->phone, $messages);

        try {
            return redirect()->route('activication');
        } catch (\Throwable $th) {
            throw $th;

            return back()->withInput();
        }

        return back()->withInput();
    }

    public function activication() {
        return view('pages.auth.activication');
    }

    public function activication_process(Request $request) {
        $user = User::where('token', $request->token)->first();
        
        if ($user) {
            $user->update([
                'active' => 1,
            ]);

            return redirect()->route('login');
        }

        return redirect()->back()->with('error', 'Token Tidak Sesuai');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }
}
