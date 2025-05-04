<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');

Route::get('/proses-login', function (Illuminate\Http\Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    $validUsers = [
        'aldi keren' => '123123',
    ];

    if (isset($validUsers[$username]) && $validUsers[$username] === $password) {
        return redirect('/dashboard?username=' . $username);
    }

    return redirect()->route('login')->with('error', 'Username atau password salah');
})->name('login.proses');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
