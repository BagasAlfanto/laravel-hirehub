<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\CompanyController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\LowonganController;
use App\Http\Controllers\Dashboard\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::resource('register', RegisterController::class)->only(['index', 'store']);
    Route::resource('login', LoginController::class)->only(['index', 'store'])->names([
        'index' => 'login',
        'store' => 'login.store',
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Lowongan
    Route::get('/dashboard/lowongan', [LowonganController::class, 'index'])->name('lowongan.index');

    // Profile
    // Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile.index');
    // Route::get('/dashboard/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::put('/dashboard/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('/dashboard/profile', ProfileController::class);

    // Company
    Route::get('/dashboard/addcompany', [CompanyController::class, 'index'])->name('company.create');
    Route::post('/dashboard/addcompany', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/dashboard/company/{id}', [CompanyController::class, 'show'])->name('company.show');

    // Logout
    Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout');
});

