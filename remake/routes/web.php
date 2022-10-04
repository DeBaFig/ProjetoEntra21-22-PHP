<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/contato', function (Request $request){
    $message = $request->session()->get('message');
    $request->session()
            ->put(
                'message',
                "Sua mensagem foi efetivada"
            );
    return view('contato', compact('message'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


