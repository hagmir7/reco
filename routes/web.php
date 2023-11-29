<?php

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

Route::get('/', [\App\Http\Controllers\Site\StaticPagesController::class, 'home'])->name('site.home');

Route::get('about', [\App\Http\Controllers\Site\StaticPagesController::class, 'about'])->name('site.about');
Route::get('services', [\App\Http\Controllers\Site\StaticPagesController::class, 'services'])->name('site.services');

Route::get('produits', [\App\Http\Controllers\Site\ProductsController::class, 'index'])->name('site.products.index');
Route::get('produits/{product:slug}', [\App\Http\Controllers\Site\ProductsController::class, 'show'])->name('site.products.show');
Route::get('checkout', [\App\Http\Controllers\Site\StaticPagesController::class, 'checkout'])->name('site.checkout');

Route::get('eclairage-ombrage-et-confort', [\App\Http\Controllers\Site\StaticPagesController::class, 'eclairageOmbrage'])->name('site.eclairage-ombrage-et-confort');
Route::get('divertissement', [\App\Http\Controllers\Site\StaticPagesController::class, 'divertissement'])->name('site.divertissement');
Route::get('securite-et-controle-dacces', [\App\Http\Controllers\Site\StaticPagesController::class, 'securiteControle'])->name('site.securite-et-controle-dacces');
Route::get('brands', [\App\Http\Controllers\Site\StaticPagesController::class, 'brands'])->name('site.brands');

Route::get('contact', [\App\Http\Controllers\Site\StaticPagesController::class, 'contact'])->name('site.contact');

Route::get('artisan/optimize:clear', function (){
    \Artisan::call('optimize:clear');
    echo 'Done!';
});

Route::get('artisan/storage:link', function (){
    \Artisan::call('storage:link');
    echo 'Done!';
});

# Redirects
Route::redirect('admin', 'admin/login');
