<?php

use Illuminate\Support\Facades\Route;
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






//  USER AUTH ROUTE
require __DIR__ . '/user.php';

// NO AUTH REQUIRE = ABOUT/ABOUT-BALCAO/HOME 
require __DIR__ . '/auth.php';

// ADMIN AUTH ROUTE
require __DIR__ . '/admin.php';
