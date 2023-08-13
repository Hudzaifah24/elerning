<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::get();

        return view('pages.admin.users.index', compact('users'));
    }

    public function create() {
        return view('pages.admin.users.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users',
            'role' => 'required|in:admin,teacher,user',
            'password' => 'required|confirmed',
        ]);

        $validated['password'] = Hash::make($request->password);

        User::create($validated);

        return redirect()->route('admin.user.index');
    }

    public function show($id) {
        return view('pages.admin.users.show');
    }

    public function edit($id) {
        $user = User::find($id);

        return view('pages.admin.users.edit', compact('user'));
    }

    public function change_password() {
        return view('pages.admin.change_password');
    }

    public function destroy($id) {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin.user.index');
    }
}
