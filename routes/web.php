<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('/user')->name('user.')->group(function() {

    Route::get('/videos', function () {
        return view('pages.user.videos');
    })->name('video');

    Route::get('/my-videos', function () {
        return view('pages.user.my_videos');
    })->name('my.video');
});

// AUTHENTICATION
Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');
