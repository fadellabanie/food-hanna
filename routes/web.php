<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Application\HomeController;
use App\Http\Controllers\LocaleController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('news', [HomeController::class, 'news'])->name('news');
Route::get('news/{title}', [HomeController::class, 'showNews'])->name('show.news');
Route::get('main-categories/{name}', [HomeController::class, 'showFatherCategory'])->name('show.father.categories.by.type');
Route::get('categories/{name}', [HomeController::class, 'showCategory'])->name('show.categories.by.type');
Route::get('products-by/{name}', [HomeController::class, 'allProduct'])->name('show.products.by.type');
Route::get('products/{name}', [HomeController::class, 'showProduct'])->name('show.product.by.type');
Route::post('search-for-products', [HomeController::class, 'searchForProduct'])->name('search.for.products');
Route::get('lang/{locale}', LocaleController::class)->name('locale');

require __DIR__.'/auth.php';

require __DIR__.'/dashboard.php';
