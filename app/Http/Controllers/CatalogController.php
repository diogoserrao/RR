<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('brand', 'category');


        $selectedCategory = null;
        $subcategories = collect();

        // Filtro de categorias
        if ($request->has('category')) {
            $selectedCategory = Category::where('slug', $request->category)->first();
            if ($selectedCategory) {
                $query->where('category_id', $selectedCategory->id);
                // Buscar subcategorias da categoria selecionada
                $subcategories = Category::where('parent_id', $selectedCategory->id)->get();
            }
        }

        // Filtro de subcategorias
        if ($request->has('subcategory')) {
            $subcat = Category::where('slug', $request->subcategory)->first();
            if ($subcat) {
                $query->where('category_id', $subcat->id);
            }
        }

        if ($request->has('category')) {
            $category = Category::where('slug', $request->category)->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        // Filtro de promoções
        if ($request->has('promotions') && $request->promotions == 1) {
            $query->where('discount', '>', 0)->where('discounted_price', '>', 0);
        } elseif ($request->has('no_promotions') && $request->no_promotions == 1) {
            $query->where(function ($q) {
                $q->where('discount', 0)->orWhere('discounted_price', 0);
            });
        }

        // Filtro de pesquisa
        if ($request->brands) {
            $query->whereIn('brand_id', $request->brands);
        }
        // Filtro de pesquisa
        if ($request->price_min !== null && $request->price_min !== '') {
            $query->where('discounted_price', '>=', floatval($request->price_min));
        }
        // Filtro de preço máximo
        if ($request->price_max !== null && $request->price_max !== '') {
            $query->where('discounted_price', '<=', floatval($request->price_max));
        }

        // Filtro de promoções
        if ($request->has('promotions') && $request->promotions == 1) {
            $query->where('discount', '>', 0)->where('discounted_price', '>', 0);
        }



        switch ($request->sort) {
            case 'price_asc':
                $query->orderBy('discounted_price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('discounted_price', 'desc');
                break;
            case 'best_sellers':
            case 'top_rated':
                $query->orderBy('reviews_count', 'desc');
                break;
            default:
                $query->orderBy('id', 'desc');
        }



        $products = $query->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        $featuredProducts = Product::with('brand', 'category')->take(3)->get(); // Adiciona esta linha
        $cart = session('cart', []);
        $cartCount = array_sum(array_column($cart, 'quantity'));

        return view('catalog.index', compact('products', 'categories', 'brands', 'featuredProducts', 'cartCount', 'selectedCategory', 'subcategories'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::with('brand')->where('category_id', $category->id)->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        $cart = session('cart', []);
        $cartCount = array_sum(array_column($cart, 'quantity'));

        return view('catalog.category', compact('category', 'products', 'categories', 'brands', 'cartCount'));
    }

    public function product($category, $id)
    {
        $product = Product::with('brand', 'category')->findOrFail($id);

        return view('catalog.product', compact('product'));
    }

    public function promotions()
    {
        $products = Product::where('discount', '>', 0)->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        return view('catalog.promotions', compact('products', 'categories', 'brands'));
    }
}
