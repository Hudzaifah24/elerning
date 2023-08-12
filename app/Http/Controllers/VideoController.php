<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index() {
        return view('pages.admin.videos.index');
    }

    public function create() {
        return view('pages.admin.videos.create');
    }

    public function show($id) {
        return view('pages.admin.videos.show');
    }

    public function edit($id) {
        return view('pages.admin.videos.edit');
    }
}
