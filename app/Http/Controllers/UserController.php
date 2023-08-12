<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('pages.admin.users.index');
    }

    public function create() {
        return view('pages.admin.users.create');
    }

    public function show($id) {
        return view('pages.admin.users.show');
    }

    public function edit($id) {
        return view('pages.admin.users.edit');
    }

    public function change_password() {
        return view('pages.admin.change_password');
    }
}
