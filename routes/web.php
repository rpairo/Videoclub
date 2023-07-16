<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['auth'])->group(function () {
    Route::get('/catalog', [CatalogController::class, 'getIndex'])->name('catalog.index');
    Route::get('/catalog/show/{id}', [CatalogController::class, 'getShow'])->name('catalog.show');
    Route::get('/catalog/create', [CatalogController::class, 'getCreate']);
    Route::get('/catalog/edit/{id}', [CatalogController::class, 'getEdit']);

    Route::post('/catalog/create', [CatalogController::class, 'postCreate'])->name('catalog.store');
    Route::put('/catalog/edit/{id}', [CatalogController::class, 'putEdit'])->name('catalog.update');

    Route::put('/catalog/rent/{id}', [CatalogController::class, 'putRent'])->name('catalog.rent');
    Route::put('/catalog/return/{id}', [CatalogController::class, 'putReturn'])->name('catalog.return');
    Route::delete('/catalog/delete/{id}', [CatalogController::class, 'deleteMovie'])->name('catalog.delete');
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false, 'reset' => false]);