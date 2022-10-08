<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user.home');
Route::post('/user/atualiza/senha/envia', [UserController::class, 'updatePassword'])->middleware(['auth'])->name('user.update.password');
Route::post('/user/atualiza/envia', [UserController::class, 'update'])->middleware(['auth'])->name('user.update');
Route::get('/user/atualiza', [UserController::class, 'edit'])->middleware(['auth'])->name('user.edit');
Route::get('/user/atualiza/senha', [UserController::class, 'editPassword'])->middleware(['auth'])->name('user.edit.password');
Route::get('/user/anuncios', [UserController::class, 'create'])->middleware(['auth'])->name('user.product');

// Não precisa de autenticação ABOUT/ABOUT-BALCAO/HOME 
require __DIR__ . '/auth.php';

// Admin Routes
require __DIR__ . '/admin.php';
