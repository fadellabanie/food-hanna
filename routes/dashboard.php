<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', App\Http\Controllers\Dashboard\HomeController::class)->name('admin');
    
    Route::resource('news', App\Http\Controllers\Dashboard\NewsController::class);
    Route::resource('teams', App\Http\Controllers\Dashboard\TeamController::class);
    Route::resource('clients', App\Http\Controllers\Dashboard\ClientController::class);
    Route::resource('products', App\Http\Controllers\Dashboard\ProductController::class);
    Route::resource('categories', App\Http\Controllers\Dashboard\CategoryController::class);
});