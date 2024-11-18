<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*

*/

Route::middleware('splade')->group(function () {
    Route::spladeWithVueBridge();
    Route::spladePasswordConfirmation();
    Route::spladeTable();
    Route::spladeUploads();

    Route::middleware('auth')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('users', UserController::class);
        Route::get('users/{user}/restore', [UserController::class, 'restore'])->name('users.restore');
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::get('@{user:username}', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('profile/image', [ProfileController::class, 'image'])->name('profile.image');
        Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});
