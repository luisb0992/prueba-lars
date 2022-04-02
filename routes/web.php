<?php

use App\Http\Controllers\OrderController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// -------------- Authentication --------------
require __DIR__ . '/auth.php';

// -------------- index --------------
Route::get('/', function () {
    return Inertia::render('Auth/Login', [
        'canResetPassword' => Route::has('password.request'),
        'status' => session('status'),
    ]);
});

// -------------- dashboard --------------
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// -------------- ordenes --------------
Route::resource('/orders', OrderController::class)->middleware(['auth', 'verified']);
