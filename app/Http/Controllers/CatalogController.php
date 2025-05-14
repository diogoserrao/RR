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

        if ($request->category) {
            $query->where('category_id', $request->category);
        }
        if ($request->brands) {
            $query->whereIn('brand_id', $request->brands);
        }
        if ($request->price_min !== null && $request->price_min !== '') {
            $query->where('discounted_price', '>=', floatval($request->price_min));
        }
        if ($request->price_max !== null && $request->price_max !== '') {
            $query->where('discounted_price', '<=', floatval($request->price_max));
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
        return view('catalog.index', compact('products', 'categories', 'brands'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::with('brand')->where('category_id', $category->id)->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        return view('catalog.category', compact('category', 'products', 'categories', 'brands'));
    }

    public function product($category, $id)
    {
        $product = Product::with('brand', 'category')->findOrFail($id);
        return view('catalog.product', compact('product'));
    }
}