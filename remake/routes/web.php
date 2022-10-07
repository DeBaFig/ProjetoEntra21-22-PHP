<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;;
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


// Admin Routes

Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'Index'])->name('login_from');
    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
});


Route::post('/user/atualiza/envia', [UserController::class, 'update'])->middleware(['auth'])->name('user.update');
Route::get('/user/atualiza', [UserController::class, 'edit'])->middleware(['auth'])->name('user.edit');

Route::get('/dashboard', function () {
    return view('user.index');
})->middleware(['auth'])->name('dashboard');

// Não precisa de autenticação 

Route::get('/', [
    HomeController::class, 'index'
])->name('home');

Route::get('/contato', [
    HomeController::class, 'contact'
])->name('contato');

Route::get('/Sobre', [
    HomeController::class, 'about'
])->name('sobre');

Route::get('/SobreBalcao', [
    HomeController::class, 'aboutBalcao'
])->name('sobre-balcao');

Route::get('/termos', [
    HomeController::class, 'termos'
])->name('termos');

Route::get('contato/obrigado', function () {
    return view('home.obrigado');
});

require __DIR__ . '/auth.php';
