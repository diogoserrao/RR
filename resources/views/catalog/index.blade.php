@extends('layouts.app')

@section('title', 'Catálogo de Produtos - ElectroHome')

@section('content')
<div class="row mb-4">
    <div class="col-md-6">
        <h1 class="display-6">Catálogo de Produtos</h1>
    </div>
    <div class="col-md-6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-md-end">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Catálogo</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-3">
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Filtrar</h5>
            </div>
            <div class="card-body">
                <h6 class="card-title">Categorias</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('catalog.index') }}" class="text-decoration-none">Todos</a></li>
                    @foreach($categories as $category)
                    <li class="mb-2">
                        <a href="{{ route('catalog.category', Str::slug($category)) }}" class="text-decoration-none">
                            {{ $category->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>

                <hr>

                <h6 class="card-title">Marcas</h6>
                @foreach($brands as $brand)
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="brand{{ $brand->id }}">
                    <label class="form-check-label" for="brand{{ $brand->id }}">{{ $brand->name }}</label>
                </div>
                @endforeach

                <hr>

                <h6 class="card-title">Preço</h6>
                <div class="range-slider mb-3">
                    <input type="range" class="form-range" min="0" max="10000" step="100" id="priceRange">
                    <div class="d-flex justify-content-between">
                        <span>R$ 0</span>
                        <span>R$ 10.000</span>
                    </div>
                </div>

                <button class="btn btn-primary w-100">Aplicar Filtros</button>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Produtos em Destaque</h5>
            </div>
            <div class="card-body">
                @for($i = 1; $i <= 3; $i++)
                    <div class="d-flex mb-3">
                    <img src="https://via.placeholder.com/80x80?text=Produto+{{ $i }}" class="me-3" alt="Produto {{ $i }}">
                    <div>
                        <h6 class="mb-1">Produto {{ $i }}</h6>
                        <p class="mb-1 text-primary fw-bold">R$ {{ number_format(rand(500, 2000), 2, ',', '.') }}</p>
                        <div class="small text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
    </div>
</div>

<div class="col-md-9">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            Mostrando <span class="fw-bold">{{ $products->firstItem() ?? 0 }}-{{ $products->lastItem() ?? 0 }}</span> de <span class="fw-bold">{{ $products->total() }}</span> produtos
        </div>
        <div class="d-flex align-items-center">
            <label for="sortBy" class="me-2 mb-0">Ordenar por:</label>
            <select class="form-select form-select-sm" style="width: auto;" id="sortBy">
                <option selected>Relevância</option>
                <option>Menor Preço</option>
                <option>Maior Preço</option>
                <option>Mais Vendidos</option>
                <option>Melhor Avaliados</option>
            </select>
        </div>
    </div>

    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100 product-card">
                <div class="position-relative">
                    <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="product-actions position-absolute top-0 end-0 p-2">
                        <button class="btn btn-sm btn-light rounded-circle mb-2">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button class="btn btn-sm btn-light rounded-circle">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    @if($product->discount > 0)
                    <div class="product-badge position-absolute top-0 start-0 bg-danger text-white p-2">
                        -{{ $product->discount }}%
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <span class="badge bg-secondary">{{ $product->brand->name }}</span>
                    </div>
                    <h5 class="card-title">
                        <a href="{{ route('catalog.product', ['category' => $product->category->slug, 'id' => $product->id]) }}" class="text-decoration-none">{{ $product->name }}</a>
                    </h5>
                    <div class="mb-2">
                        <div class="small text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="small text-muted">({{ $product->reviews_count }} avaliações)</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            @if($product->discount > 0)
                            <span class="text-decoration-line-through text-muted small">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
                            @endif
                            <div class="fw-bold text-primary">R$ {{ number_format($product->discounted_price, 2, ',', '.' )}}</div>
                        </div>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <nav aria-label="Page navigation">
        {{ $products->links() }}
    </nav>
</div>
</div>
@endsection

@push('styles')
<style>
    .product-card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .product-actions button {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .product-card:hover .product-actions button {
        opacity: 1;
    }
</style>
@endpush