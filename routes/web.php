<?php

use Illuminate\Support\Facades\Route;
use Shopper\Framework\Repositories\Ecommerce\BrandRepository;

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

Route::get('/', [\App\Http\Controllers\Site\StaticPagesController::class, 'home'])->name('site.home');

Route::get('about', [\App\Http\Controllers\Site\StaticPagesController::class, 'about'])->name('site.about');
Route::get('services', [\App\Http\Controllers\Site\StaticPagesController::class, 'services'])->name('site.services');

Route::get('produits', [\App\Http\Controllers\Site\ProductsController::class, 'index'])->name('site.products.index');
Route::get('produits/{product:slug}', [\App\Http\Controllers\Site\ProductsController::class, 'show'])->name('site.products.show');
Route::get('checkout', [\App\Http\Controllers\Site\StaticPagesController::class, 'checkout'])->name('site.checkout');


# Redirects
Route::redirect('admin', 'admin/login');
