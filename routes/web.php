<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Application\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('main-categories/{name}', [HomeController::class, 'showFatherCategory'])->name('show.father.categories.by.type');
Route::get('categories/{name}', [HomeController::class, 'showCategory'])->name('show.categories.by.type');
Route::get('products/{name}', [HomeController::class, 'allProduct'])->name('show.products.by.type');
Route::get('products/{name}', [HomeController::class, 'showProduct'])->name('show.products.by.type');

Route::get('mysitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to(), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
    $sitemap->add(URL::to('page'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

    // get all posts from db
    $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();

    // add every post to the sitemap
    foreach ($posts as $post)
    {
        $sitemap->add($post->slug, $post->modified, $post->priority, $post->freq);
    }

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'mysitemap');
    // this will generate file mysitemap.xml to your public folder

});
require __DIR__.'/auth.php';

require __DIR__.'/dashboard.php';
