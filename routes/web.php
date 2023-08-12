<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SettingController;

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

// User
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

Route::get('/register', function () {
    return view('pages.auth.register');
})->name('register');


// Admin
Route::prefix('/admin')->name('admin.')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/user', UserController::class);
    Route::resource('/video', VideoController::class);
    Route::resource('/transaction', TransactionController::class);
    Route::resource('/transaction', TransactionController::class);

    // Setting
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');

    // Ubah Password
    Route::get('/change/password/{id}', [UserController::class, 'change_password'])->name('setting.password.edit');
});
