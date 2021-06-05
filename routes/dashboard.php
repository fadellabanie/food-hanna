<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', App\Http\Controllers\Dashboard\HomeController::class)->name('admin');
});
