<?php

use App\Http\Controllers\BkrController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\teamscontroller;
use App\Http\Controllers\storingController;
use App\Http\Controllers\NieuwklantController;
use App\Http\Controllers\FactuurController;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::get('/inkoop/create', [ProductCategoriesController::class, 'getcreate'])->name('inkoop.create')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);
Route::post('/inkoop/create', [ProductCategoriesController::class, 'postcategorie'])->name('inkoop.create.inkoop');
Route::get('/inkoop/categorielist', [ProductCategoriesController::class, 'getlist'])->name('inkoop.categorielist');
Route::get('/inkoop/productlist/{Product_Categories}', [ProductsController::class, 'getlist'])->name('inkoop.productlist');

Route::get('/inkoop/productcreate', [ProductsController::class, 'getcategories'])->name('inkoop.productcreate');
Route::post('/inkoop/productcreate', [ProductsController::class, 'postproduct'])->name('inkoop.productcreate.inkoop');
Route::get('/product/edit/{products}', [ProductsController::class, 'getEdit'])->name('inkoop.productedit');
Route::put('/product/edit/{products}', [ProductsController::class, 'putEdit'])->name('inkoop.productedit.put');
Route::get('/product/delete/{products}', [ProductsController::class, 'getDelete'])->name('inkoop.productdelete.delete');
Route::delete('/product/delete/{products}', [ProductsController::class, 'deleteDelete'])->name('inkoop.productdelete');
Route::get('/categorie/edit/{product_categories}', [ProductCategoriesController::class, 'getEdit'])->name('inkoop.categorie');
Route::put('/categorie/edit/{product_categories}', [ProductCategoriesController::class, 'putEdit'])->name('inkoop.categorie.put');
Route::get('/categorie/delete/{categories}', [ProductCategoriesController::class, 'getDelete'])->name('inkoop.categoriedelete.delete');
Route::delete('/categorie/delete/{categories}', [ProductCategoriesController::class, 'deleteDelete'])->name('inkoop.categoriedelete');
Route::get('/sales/notes', [NotesController::class, 'getcreate'])->name('sales.notes');
Route::post('/sales/notes', [NotesController::class, 'postnotes'])->name('sales.notes.sales');
Route::get('/sales/nieuwklant', [NieuwklantController::class, 'getcreate'])->name('sales.nieuwklant');
Route::post('/sales/nieuwklant', [NieuwklantController::class, 'postklant'])->name('sales.nieuwklant.sales');

Route::get('/productpagina/{product_categories}', [ProductsController::class, 'productpagina'])->name('productpagina');

Route::get('/finance/bkr-check', [BkrController::class, 'bkrPageView']);
Route::get('/finance/bkr-check-load/{companies}', [BkrController::class, 'bkrPageLoad'])->name('finance.bkr');

Route::get('/', [ProductsController::class, 'getproduct'])->name('getproduct'); 

Route::get('/dashboard', [teamscontroller::class, 'team'])->name('dashboard');


Route::get('/maintenance/storing', [storingController::class, 'storingPageView'])->name('maintenance.storing');


Route::get('/enkelpagina/{products}', [ProductsController::class, 'enkelproduct'])->name('enkelproduct');

Route::get('/contact', [ProductsController::class, 'contact'])->name('contact');

Route::get('/finance', [FactuurController::class, 'factuurPageView'])->name('factuurPageView');
