<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomerController;

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

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');

Route::resource("reviews", ReviewController::class);

Route::get('/settings', function () {
    return view('settings');
});

// Auth::routes(['verify' => true]);

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth.shopify'])->name('home');

// Auth::routes();

Route::get('/', [MainController::class, 'index'])->middleware(['auth.shopify'])->name('home');

Route::get('/customers', [CustomerController::class, 'getcustomers'])->middleware(['auth.shopify'])->name('home');

Route::get('/products', [ProductsController::class, 'getproducts'])->middleware(['auth.shopify'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth.shopify'])->name('home');

// Route::view('/login-shopify', 'login');

// Route::get('/logout', function() {
//     Auth::logout();
//     return redirect('/login-shopify');
// });

// Route::get('auth', [App\Http\Controllers\HomeController::class, 'shopify_auth']);


