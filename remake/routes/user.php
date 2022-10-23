<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::prefix('user')->group(function () {

    Route::middleware('auth')->group(function () {

        Route::get('/', [UserController::class, 'index'])->name('user.home');
        Route::post('/atualiza/senha/envia', [UserController::class, 'updatePassword'])->name('user.update.password');
        Route::post('/atualiza/envia', [UserController::class, 'update'])->name('user.update');
        Route::get('/atualiza', [UserController::class, 'edit'])->name('user.edit');
        Route::get('/atualiza/senha', [UserController::class, 'editPassword'])->name('user.edit.password');
        Route::get('/anuncios', [UserController::class, 'create'])->name('user.product');


        Route::get('/criar', [ProductController::class, 'create'])->name('user.add.product');
        Route::post('/criar/salva', [ProductController::class, 'store'])->name('user.store.product');
        
        Route::get('/editar/{id}', [ProductController::class, 'edit'])->name('user.edit.product');
        Route::post('/editar/update/{id}', [ProductController::class, 'update'])->name('user.update.product');
        
        Route::get('/detalhes/{id}', [UserController::class, 'detalhes'])->name('user.detalhes');
    });
});
