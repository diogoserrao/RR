@extends('layouts.app')

@section('title', 'Catálogo de Produtos - ElectroHome')

@php
$categories = [
    (object)['slug' => 'refrigerators', 'name' => 'Geladeiras'],
    (object)['slug' => 'washing-machines', 'name' => 'Lavadoras'],
    (object)['slug' => 'ovens', 'name' => 'Fornos'],
];
$brands = [
    (object)['id' => 1, 'name' => 'LG'],
    (object)['id' => 2, 'name' => 'Samsung'],
];
$products = [
    (object)[
        'id' => 1,
        'name' => 'Geladeira Frost Free LG',
        'discount' => 10,
        'brand' => (object)['name' => 'LG'],
        'reviews_count' => 12,
        'price' => 3500,
        'discounted_price' => 3150,
    ],
    (object)[
        'id' => 2,
        'name' => 'Lavadora Samsung 12kg',
        'discount' => 15,
        'brand' => (object)['name' => 'Samsung'],
        'reviews_count' => 8,
        'price' => 2200,
        'discounted_price' => 1870,
    ],
    (object)[
        'id' => 3,
        'name' => 'Forno Elétrico Consul',
        'discount' => 5,
        'brand' => (object)['name' => 'Consul'],
        'reviews_count' => 5,
        'price' => 900,
        'discounted_price' => 855,
    ],
    // Adicione mais produtos conforme desejar
];
@endphp

@section('content')
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Filtrar Produtos</h5>
            </div>
            <div class="card-body">
                <h6>Categorias</h6>
                 <ul class="list-unstyled">
                    @foreach($categories as $category)
                    <li class="mb-2">
                        <a href="/catalogo/{{ $category->slug }}" class="text-decoration-none">
                            <i class="fas fa-chevron-right me-2"></i> {{ $category->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>

                <hr>

                <h6>Filtrar por Preço</h6>
                <div class="range-slider mt-3">
                    <input type="range" class="form-range" min="0" max="10000" step="100" id="priceRange">
                    <div class="d-flex justify-content-between">
                        <span id="minPrice">R$ 0</span>
                        <span id="maxPrice">R$ 10.000</span>
                    </div>
                </div>

                <hr>

                <h6>Marcas</h6>
                 @foreach($brands as $brand)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="brand{{ $brand->id }}">
                    <label class="form-check-label" for="brand{{ $brand->id }}">
                        {{ $brand->name }}
                    </label>
                </div>
                @endforeach

                <button class="btn btn-primary mt-3 w-100">Aplicar Filtros</button>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Todos os Produtos</h2>
            <div class="d-flex">
                <div class="me-3">
                    <label for="sortBy" class="form-label">Ordenar por:</label>
                    <select class="form-select" id="sortBy">
                        <option selected>Mais relevantes</option>
                        <option value="price_asc">Preço: Menor para Maior</option>
                        <option value="price_desc">Preço: Maior para Menor</option>
                        <option value="name_asc">Nome: A-Z</option>
                        <option value="name_desc">Nome: Z-A</option>
                        <option value="rating">Melhor Avaliados</option>
                    </select>
                </div>
                <div>
                    <label for="itemsPerPage" class="form-label">Itens por página:</label>
                    <select class="form-select" id="itemsPerPage">
                        <option selected>12</option>
                        <option>24</option>
                        <option>36</option>
                        <option>Todos</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row g-4">
             @foreach($products as $product)
            <div class="col-md-4">
                <div class="card product-card h-100">
                    @if($product->discount > 0)
                    <div class="badge bg-danger position-absolute" style="top: 10px; right: 10px;">-{{ $product->discount }}%</div>
                    @endif
                    @php
                    $name = strtolower($product->name);
                    if(str_contains($name, 'geladeira')) {
                    $imgUrl = 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80';
                    } elseif(str_contains($name, 'lavadora')) {
                    $imgUrl = 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80';
                    } elseif(str_contains($name, 'forno')) {
                    $imgUrl = 'https://th.bing.com/th/id/OIP.pbUdIDVE6fj5VZDEO6H_xQHaHa?w=186&h=186&c=7&r=0&o=5&pid=1.7';
                    } else {
                    $imgUrl = 'https://images.pexels.com/photos/276528/pexels-photo-276528.jpeg?auto=compress&w=600';
                    }
                    @endphp
                    <img src="{{ $imgUrl }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <div class="product-brand text-muted small">{{ $product->brand->name }}</div>
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <div class="product-rating mb-2 text-warning small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-muted ms-1">({{ $product->reviews_count }})</span>
                        </div>
                        <div class="product-price mb-3">
                            @if($product->discount > 0)
                            <span class="text-muted text-decoration-line-through">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
                            @endif
                            <span class="fw-bold text-primary"> R$ {{ number_format($product->discounted_price, 2, ',', '.') }}</span>
                        </div>
                        <div class="product-actions d-flex justify-content-between">
                            <a href="/product/{{ $product->id }}" class="btn btn-sm btn-outline-secondary">Detalhes</a>
                            <button class="btn btn-sm btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Próxima</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<section class="features-section bg-light py-4 mb-5 rounded">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="feature-item p-3">
                    <i class="fas fa-shipping-fast fa-2x text-primary mb-3"></i>
                    <h5>Entrega Rápida</h5>
                    <p>Entregamos em todo o país em até 5 dias úteis</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item p-3">
                    <i class="fas fa-lock fa-2x text-primary mb-3"></i>
                    <h5>Compra Segura</h5>
                    <p>Site protegido com criptografia SSL</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item p-3">
                    <i class="fas fa-exchange-alt fa-2x text-primary mb-3"></i>
                    <h5>Troca Fácil</h5>
                    <p>Política de troca sem complicações</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection