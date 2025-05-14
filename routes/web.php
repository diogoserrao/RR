<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

// Página inicial
Route::get('/', function () {
    $featuredProducts = Product::with('brand', 'category')->take(4)->get();
    $brands = Brand::all();
    $categories = Category::all();
    return view('home.index', compact('featuredProducts', 'brands', 'categories'));
})->name('home');

// Sobre nós
Route::get('/sobre', function () {
    return view('home.about');
})->name('about');

// Catálogo principal
Route::prefix('catalogo')->group(function () {
    Route::get('/', function () {

        $query = Product::with('brand', 'category');
        // Filtro categoria
        if (request('category')) {
            $query->where('category_id', request('category'));
        }
        // Filtro marcas (array de IDs)
        if (request('brands')) {
            $query->whereIn('brand_id', request('brands'));
        }

        // Filtro preço mínimo
        if (request('price_min') !== null && request('price_min') !== '') {
            $query->where('discounted_price', '>=', floatval(request('price_min')));
        }

        // Filtro preço máximo
        if (request('price_max') !== null && request('price_max') !== '') {
            $query->where('discounted_price', '<=', floatval(request('price_max')));
        }

        
        // Ordenação
        switch (request('sort')) {
            case 'price_asc':
                $query->orderBy('discounted_price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('discounted_price', 'desc');
                break;
            case 'best_sellers':
                $query->orderBy('reviews_count', 'desc');
                break;
            case 'top_rated':
                // Supondo que tenha um campo de avaliação, senão pode usar reviews_count
                $query->orderBy('reviews_count', 'desc');
                break;
            default:
                // Relevância ou padrão
                $query->orderBy('id', 'desc');
        }

        $products = $query->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        return view('catalog.index', compact('products', 'categories', 'brands'));
    })->name('catalog.index');

    // Categoria (rota direta por slug, se quiser manter)
    Route::get('/{category}', function ($category) {
        $categoryModel = Category::where('slug', $category)->firstOrFail();
        $products = Product::with('brand')->where('category_id', $categoryModel->id)->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        return view('catalog.category', [
            'category' => $categoryModel,
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands
        ]);
    })->name('catalog.category');

    // Produto
    Route::get('/{category}/{id}', function ($category, $id) {
        $product = Product::with('brand', 'category')->findOrFail($id);
        return view('catalog.product', compact('product'));
    })->name('catalog.product');
});

// Contato
Route::get('/contato', function () {
    return view('contact');
})->name('contact');
