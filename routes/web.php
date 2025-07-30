<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::resource('login', LoginController::class)->only(['index', 'store'])->names([
        'index' => 'login',
        'store' => 'login.store',
    ]);
    Route::resource('register', RegisterController::class)->only(['index', 'store']);
});

Route::middleware('auth')->group(function (){
    Route::get('/home', function () {
        return view('dashboard.index');
    })->name('home');

    Route::POST('/logout', [LogoutController::class, 'destroy'])->name('logout');
});
