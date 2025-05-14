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
        $products = Product::with('brand', 'category')->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        return view('catalog.index', compact('products', 'categories', 'brands'));
    })->name('catalog.index');

    // Categoria
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