<?php

use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('/', function () {
    return view('home.index');
})->name('home');

// Sobre nós
Route::get('/sobre', function () {
    return view('home.about');
})->name('about');

// Catálogo
Route::prefix('catalogo')->group(function () {
    Route::get('/', function () {
        return view('catalog.index');
    })->name('catalog.index');
    
    Route::get('/{category}', function ($category) {
        return view('catalog.category', ['category' => $category]);
    })->name('catalog.category');
    
    Route::get('/{category}/{id}', function ($category, $id) {
        // Simulando dados do produto
        $product = [
            'name' => 'Produto ' . $id,
            'category' => ucfirst($category),
            'category_slug' => $category,
            'short_description' => 'Este é um produto incrível da categoria ' . $category . ' com muitas características especiais.',
            'description' => 'Este é um produto incrível da categoria ' . $category . ' com muitas características especiais. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.',
            'brand' => ['Brastemp', 'Electrolux', 'Consul', 'Samsung'][rand(0, 3)],
            'sku' => 'SKU-' . strtoupper($category) . '-' . str_pad($id, 4, '0', STR_PAD_LEFT),
            'price' => rand(1000, 2999),
            'original_price' => rand(2000, 4000),
            'discount' => rand(0, 30),
            'rating' => rand(30, 50) / 10,
            'reviews' => rand(5, 50),
            'features' => [
                'Tecnologia Inverter para economia de energia',
                'Design moderno e elegante',
                'Controle digital com display LED',
                'Função turbo para desempenho máximo',
                'Baixo nível de ruído'
            ],
            'specifications' => [
                'Marca' => ['Brastemp', 'Electrolux', 'Consul', 'Samsung'][rand(0, 3)],
                'Modelo' => 'MOD-' . strtoupper(substr($category, 0, 3)) . '-' . rand(100, 999),
                'Cor' => ['Branco', 'Prata', 'Preto', 'Inox'][rand(0, 3)],
                'Dimensões' => rand(50, 100) . ' x ' . rand(50, 100) . ' x ' . rand(50, 100) . ' cm',
                'Peso' => rand(30, 80) . ' kg',
                'Garantia' => '12 meses',
                'Voltagem' => '220V'
            ],
            'reviews_list' => [
                [
                    'author' => ['João Silva', 'Maria Souza', 'Carlos Oliveira', 'Ana Pereira'][rand(0, 3)],
                    'date' => date('d/m/Y', strtotime('-'.rand(1, 30).' days')),
                    'rating' => rand(3, 5),
                    'comment' => ['Ótimo produto!', 'Superou minhas expectativas.', 'Recomendo a todos.', 'Qualidade excelente.'][rand(0, 3)],
                    'response' => ['Obrigado pelo feedback!', 'Ficamos felizes com sua avaliação.', 'Volte sempre!'][rand(0, 2)]
                ],
                [
                    'author' => ['Pedro Santos', 'Juliana Lima', 'Roberto Costa', 'Fernanda Alves'][rand(0, 3)],
                    'date' => date('d/m/Y', strtotime('-'.rand(1, 30).' days')),
                    'rating' => rand(3, 5),
                    'comment' => ['Entrega rápida.', 'Produto conforme descrito.', 'Atendimento excelente.'][rand(0, 2)],
                    'response' => null
                ]
            ]
        ];
        
        return view('catalog.product', ['product' => $product]);
    })->name('catalog.product');
});

// Contato
Route::get('/contato', function () {
    return view('contact');
})->name('contact');