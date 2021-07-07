<?php

namespace App\Http\Controllers\Application;

use App\Models\News;
use App\Models\Team;
use App\Models\Video;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;
use Hamcrest\Core\Set;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    SEOMeta::setTitle('Hanna Food');
    SEOMeta::setDescription('Hanna Food');
    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to('home'), now(), '1.0', 'daily');
    $sitemap->add(URL::to('home'), now(), '0.9', 'monthly');

    // get all posts from db
    $products = DB::table('products')->orderBy('created_at', 'desc')->get();

    // add every post to the sitemap
    foreach ($products as $product) {
      $sitemap->add($product->name_en);
    }

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'mysitemap');
    // this will generate file mysitemap.xml to your public folder



    $data['news'] = News::limit(6)->get();
    $data['videos'] = Video::limit(3)->active()->get();
    $data['teams'] = Team::limit(6)->get();
    $data['categories'] = Setting::select('do_ghazal', 'happy_cow_cheese', 'dutso')->first();

    return view('application.index', compact('data'));
  }

  public function showFatherCategory($name)
  {
    SEOMeta::setTitle('Hanna Food Category' . $name);
    SEOMeta::setDescription('Hanna Food Category' . $name);
    $categories =  Category::Father($name)->Parent()->get();
    // $categories =  Category::get();
    //dd($categories);
    return view('application.categories', compact('categories'));
  }
  public function showCategory($name)
  {
    SEOMeta::setTitle('Hanna Food Category' . $name);
    SEOMeta::setDescription('Hanna Food Category' . $name);
    $category =  Category::where('name_en', $name)->first();
    // dd($category);
    if ($category->parent_id == 0 && $category->child_id == 0 && $category->sub_child_id == 0) {
      $categories =  Category::where('parent_id', $category->id)->onlyParent()->get();
    } elseif ($category->parent_id != 0 && $category->child_id == 0 && $category->sub_child_id == 0) {
      $categories =  Category::where('child_id', $category->id)->where('sub_child_id', 0)->get();
    } elseif ($category->parent_id != 0 && $category->child_id != 0 && $category->sub_child_id == 0) {
      $categories =  Category::where('sub_child_id', $category->id)->get();
    } elseif ($category->parent_id != 0 && $category->child_id != 0 && $category->sub_child_id != 0) {
      $product = Product::where('father', $category->father)->where('category_id', $category->id)->first();
      if (!$product) {
        return redirect()->route('home');
      }
      return redirect()->route('show.products.by.type', $product->name_en);
    }

    // $categories =  Category::get();

    return view('application.categories', compact('categories'));
  }

  public function showProduct($name)
  {
    SEOMeta::setTitle('Hanna Food Product' . $name);
    SEOMeta::setDescription('Hanna Food Product' . $name);
    $product =  Product::where('name_en', $name)->first();

    return view('application.single-product', compact('product'));
  }

  public function allProduct($type)
  {
    SEOMeta::setTitle('Hanna Food Products' . $type);
    SEOMeta::setDescription('Hanna Food Products' . $type);
    //  $products =  Product::whereFather($type)->get();
    $products =  Product::get();

    return view('application.products', compact('products'));
  }
  public function aboutUs()
  {
    SEOMeta::setTitle('Hanna Food About Us');
    SEOMeta::setDescription('Hanna Food About Us');
    $data['setting'] = Setting::first();
   
    return view('application.about-us',compact('data'));
  }
  public function contact()
  {
    SEOMeta::setTitle('Hanna Food Contact Us');
    SEOMeta::setDescription('Hanna Food Contact Us');

    return view('application.contact');
  } 
  public function news()
  {
    SEOMeta::setTitle('Hanna Food News');
    SEOMeta::setDescription('Hanna Food News');
    $news = News::get();
    return view('application.news',compact('news'));
  } 
  public function showNews($name)
  {
   $name = str_replace('-', ' ', $name);
    SEOMeta::setTitle('Hanna Food News');
    SEOMeta::setDescription('Hanna Food News');
    $news = News::where('title_en','like',$name)->first();
    
    return view('application.show-news',compact('news'));
  }
}
