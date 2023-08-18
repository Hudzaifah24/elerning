<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserVideo;

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
        $user = User::find($id);

        $userVideos = UserVideo::with(['user', 'videos'])->where('user_id', $id)->get();
        
        return view('pages.admin.users.show', compact('user', 'userVideos'));
    }

    public function edit($id) {
        $user = User::find($id);

        return view('pages.admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:admin,teacher,user',
        ]);

        $user = User::find($id);

        $user->update($validated);

        return redirect()->route('admin.user.index');
    }

    public function change_password() {
        return view('pages.admin.change_password');
    }

    public function destroy($id) {
        $user = User::find($id);

        if ($user->userVideo) {
            $user->userVideo()->delete();
        }
        
        $user->delete();

        return redirect()->route('admin.user.index');
    }

    public function destroy_all(Request $request) {
        if ($request->id) {
            foreach ($request->id as $key => $value) {
                $user = User::find($key);

                if ($user->userVideo) {
                    $user->userVideo()->delete();
                }
    
                $user->delete();
            }
        }

        return redirect()->route('admin.user.index');
    }
}
