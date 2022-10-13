<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\ProductsController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/inkoop/create', [ProductCategoriesController::class, 'getcreate'])->name('inkoop.create');
Route::post('/inkoop/create', [ProductCategoriesController::class, 'postcategorie'])->name('inkoop.create.inkoop');
Route::get('/inkoop/categorielist', [ProductCategoriesController::class, 'getlist'])->name('inkoop.categorielist');

Route::get('/inkoop/productcreate', [ProductsController::class, 'getcategories'])->name('inkoop.productcreate');
Route::post('/inkoop/productcreate', [ProductsController::class, 'postproduct'])->name('inkoop.productcreate.inkoop');
