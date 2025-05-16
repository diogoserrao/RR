<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;

// Página inicial
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [HomeController::class, 'about'])->name('about');

// Catálogo principal e filtros
Route::prefix('catalogo')->group(function () {
    Route::get('/', [CatalogController::class, 'index'])->name('catalog.index');
    Route::get('/{category}', [CatalogController::class, 'category'])->name('catalog.category');
    Route::get('/{category}/{id}', [CatalogController::class, 'product'])->name('catalog.product');
});

Route::get('/promocoes', [CatalogController::class, 'promotions'])->name('catalog.promotions');

// Carrinho
Route::get('/carrinho', [CartController::class, 'index'])->name('cart');
Route::post('/carrinho/adicionar', [CartController::class, 'add'])->name('cart.add');
Route::get('/checkout', function () {
    return 'Página de checkout';
})->name('checkout');

Route::post('/carrinho/remover', [CartController::class, 'remove'])->name('cart.remove');

Route::post('/carrinho/limpar', [CartController::class, 'clear'])->name('cart.clear');

// Contacto
Route::get('/contato', [ContactController::class, 'index'])->name('contact');