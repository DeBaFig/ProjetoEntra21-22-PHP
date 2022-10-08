<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;;

Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'index'])->name('login_from');
    Route::post('/login/owner', [AdminController::class, 'login'])->name('admin.login');


    Route::middleware('admin')->group(function () {
        Route::get('/home', [AdminController::class, 'adminHome'])->name('admin.index');
        Route::get('/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
        Route::get('/gerencia/user', [AdminController::class, 'adminUsers'])->name('admin.users');
        Route::get('/gerencia/products', [AdminController::class, 'adminProducts'])->name('admin.products');
        Route::get('/register', [AdminController::class, 'adminRegister'])->name('admin.register');
        Route::post('/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    });
});
