<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('menu')->group(function () {
    Route::get('/{slug}/{id}', [ProductController::class, 'showProduct'])->name('menu.view');

    Route::get('/{id}', [ProductController::class, 'showProductByCategory'])->name('menu.product');
});
