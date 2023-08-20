<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index() {
        $user = User::find(Auth::user()->id);
        
        return view('pages.admin.settings', compact('user'));
    }

    public function update(Request $request) {
        $user = User::find(Auth::user()->id);
        
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($validated);
        
        return redirect()->back();
    }

    public function change_password() {
        return view('pages.admin.change_password');
    }

    public function change_password_process(Request $request) {
        $user = User::find(Auth::user()->id);

        $validated = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back();
        }

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.setting.index');
    }
}
