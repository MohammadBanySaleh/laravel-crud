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

Route::get('/', [ProductController::class, 'index']);

Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::put('update/{id}', [ProductController::class, 'update']);

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/create', function () {
    return view('create');
})->name('products.create');

Route::get('/index', function () {
    return view('index');
})->name('products.index');

Route::get('/table-data', 'TableController@index');

Route::delete('/products/{id}', [ProductController::class, 'detrory' ])->name('product.delete');