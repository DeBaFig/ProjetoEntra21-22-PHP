<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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


// Admin Routes

Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'Index'])->name('login_from');
    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contato', [App\Http\Controllers\HomeController::class, 'contact'])->name('contato');
Route::get('/Sobre', [App\Http\Controllers\HomeController::class, 'about'])->name('sobre');
Route::get('/SobreBalcao', [App\Http\Controllers\HomeController::class, 'aboutBalcao'])->name('sobre-balcao');
Route::get('/termos', [App\Http\Controllers\HomeController::class, 'termos'])->name('termos');



Route::get('user/add', function () {
    return view('user.add');
})->middleware(['auth'])->name('user.add');

Route::post('/user/add', [ProductController::class, 'create'])->middleware(['auth'])->name('product.save');

Route::get('dashboard', function () {
    return view('user.add');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
