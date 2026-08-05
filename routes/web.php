<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('dashboard')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/auth', [DashboardController::class, 'auth'])->name('dashboard.auth');
    Route::get('/dashboard/agents', [DashboardController::class, 'agents'])->name('dashboard.agents');
    Route::get('/dashboard/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');
    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
    Route::get('/dashboard/reports', [DashboardController::class, 'reports'])->name('dashboard.reports');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('auth', function () {
    return view('auth');
})->name('auth');

Route::get('houses', function (){
    return view('houses');
})->name('houses');

Route::get('agents', function () {
    return view('agents');
})->name('agents');

Route::get('bot', function (){
    return view('bot');
})->name('bot');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
