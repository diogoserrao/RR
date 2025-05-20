<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::with('brand', 'category')->take(4)->get();
        $brands = Brand::all();
       
        $categories = Category::whereNull('parent_id')->get();
        $topProducts = Product::where('is_best_seller', true)->take(8)->get(); // Só 3 produtos
        $cart = session('cart', []);
        $cartCount = array_sum(array_column($cart, 'quantity'));
        return view('home.index', compact('featuredProducts', 'brands', 'categories', 'topProducts', 'cartCount'));
    }

    public function about()
    {
        return view('home.about');
    }
}
