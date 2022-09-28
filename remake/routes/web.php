<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::prefix('admin')->group(function(){

    // middleware redirect to this route
Route::get('/login', [AdminController::class, 'Index'])->name('login_from');

    // para o form 
Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');

    // quando o login como admin for ok (dashboard)
Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contato', [App\Http\Controllers\HomeController::class, 'contact'])->name('contato');
Route::get('/Sobre', [App\Http\Controllers\HomeController::class, 'about'])->name('sobre');
Route::get('/SobreBalcao', [App\Http\Controllers\HomeController::class, 'aboutBalcao'])->name('sobre-balcao');




Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
