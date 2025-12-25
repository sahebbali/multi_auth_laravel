<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/wallet', [AdminDashboardController::class, 'wallet'])->name('admin.wallet');
        Route::get('/deposit', [AdminDashboardController::class, 'deposit'])->name('admin.deposit');
        Route::get('/support', [AdminDashboardController::class, 'support'])->name('admin.support');
    });
});
