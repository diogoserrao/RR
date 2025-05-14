<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;

// Página inicial
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [HomeController::class, 'about'])->name('about');

// Catálogo principal e filtros
Route::prefix('catalogo')->group(function () {
    Route::get('/', [CatalogController::class, 'index'])->name('catalog.index');
    Route::get('/{category}', [CatalogController::class, 'category'])->name('catalog.category');
    Route::get('/{category}/{id}', [CatalogController::class, 'product'])->name('catalog.product');
});

// Contacto
Route::get('/contato', [ContactController::class, 'index'])->name('contact');