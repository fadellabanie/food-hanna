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
        $data['categories'] = Setting::select('do_ghazal','happy_cow_cheese','dutso')->first();
    
        return view('application.index',compact('data'));
    }

    public function showCategory($name)
    { 
        
      //  $categories =  Category::whereType($name)->Parent()->get();
        $categories =  Category::get();

       return view('application.categories',compact('categories'));
    }

    public function showProduct($name)
    { 
        $product =  Product::whereName($name)->get();

        return view('application.single-product',compact('product'));
    }
        
        public function allProduct($type)
    { 
        
      //  $products =  Product::whereFather($type)->get();
        $products =  Product::get();

       return view('application.products',compact('products'));
    }
}
