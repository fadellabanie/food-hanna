<?php

namespace App\Http\Controllers\Application;

use App\Models\News;
use App\Models\Team;
use App\Models\Video;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data['news'] = News::limit(6)->get();
    $data['videos'] = Video::limit(3)->active()->get();
    $data['teams'] = Team::limit(6)->get();
    $data['categories'] = Setting::select('do_ghazal', 'happy_cow_cheese', 'dutso')->first();

    return view('application.index', compact('data'));
  }

  public function showFatherCategory($name)
  {

    $categories =  Category::Father($name)->Parent()->get();
    // $categories =  Category::get();

    return view('application.categories', compact('categories'));
  }
  public function showCategory($name)
  {
    $category =  Category::where('name_en', $name)->first();
    // dd($category);
    if ($category->parent_id == 0 && $category->child_id == 0 && $category->sub_child_id == 0) {
      $categories =  Category::where('parent_id', $category->id)->onlyParent()->get();
    } elseif ($category->parent_id != 0 && $category->child_id == 0 && $category->sub_child_id == 0) {
      $categories =  Category::where('child_id', $category->id)->where('sub_child_id', 0)->get();
     
    } elseif ($category->parent_id != 0 && $category->child_id != 0 && $category->sub_child_id == 0) {
      $categories =  Category::where('sub_child_id', $category->id)->get();
    } elseif($category->parent_id != 0 && $category->child_id != 0 && $category->sub_child_id != 0){
     $product = Product::where('father',$category->father)->where('category_id',$category->id)->first();
     if(!$product){
       return redirect()->route('home');
     }
     return redirect()->route('show.products.by.type',$product->name_en);
    }

    // $categories =  Category::get();

    return view('application.categories', compact('categories'));
  }

  public function showProduct($name)
  {
    $product =  Product::where('name_en',$name)->first();
  
    return view('application.single-product', compact('product'));
  }

  public function allProduct($type)
  {

    //  $products =  Product::whereFather($type)->get();
    $products =  Product::get();

    return view('application.products', compact('products'));
  }
   public function aboutUs()
  {
    return view('application.about-us');
  } 
   public function contact()
  {
    return view('application.contact');
  }
}
