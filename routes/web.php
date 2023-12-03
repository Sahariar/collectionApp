<?php

use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware collection. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::get('/shop', [ShopController::class, 'shopIndex'])->middleware(['verify.shopify'])->name('shop.index');

Route::get('/collections', [CollectionsController::class, 'collectionIndex'])->middleware(['verify.shopify'])->name('collection.index');

Route::post('/collections', [CollectionsController::class, 'collectionIndex'])->middleware(['verify.shopify'])->name('collection.save');

Route::get('/product/{collectionId}', [CollectionsController::class, 'product'])->middleware(['verify.shopify'])->name('collection.product');

Route::post('/product/{collectionId}', [CollectionsController::class, 'product'])->middleware(['verify.shopify'])->name('collection.product.save');

Route::get('/product', [ProductController::class, 'productIndex'])->middleware(['verify.shopify'])->name('product.index');
