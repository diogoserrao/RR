@extends('layouts.app')

@section('title', $product['name'] . ' - ElectroHome')

@section('content')
<div class="row mb-4">
    <div class="col-md-6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('catalog.index') }}">Catálogo</a></li>
                <li class="breadcrumb-item"><a href="{{ route('catalog.category', $product->category->slug) }}">{{ $product->category->name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-6">
        <div class="mb-3">
            <img src="https://via.placeholder.com/600x600?text={{ $product['name'] }}" class="img-fluid rounded border" alt="{{ $product['name'] }}" id="mainProductImage">
        </div>
        <div class="row g-2">
            @for($i = 1; $i <= 4; $i++)
                <div class="col-3">
                <img src="https://via.placeholder.com/150x150?text={{ $product['name'] }}+{{ $i }}" class="img-fluid rounded border cursor-pointer" alt="{{ $product['name'] }} {{ $i }}" onclick="document.getElementById('mainProductImage').src = this.src">
        </div>
        @endfor
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-6">
        <div class="mb-3">
            <img src="{{ $product->image_url }}" class="img-fluid rounded border" alt="{{ $product->name }}" id="mainProductImage">
        </div>
    </div>
    <div class="col-md-6">
        <h1 class="mb-3">{{ $product->name }}</h1>
        <div class="d-flex align-items-center mb-3">
            <div class="me-3">
                <span class="text-warning">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </span>
                <span class="small text-muted ms-1">({{ $product->reviews_count }} avaliações)</span>
            </div>
            <div>
                <span class="badge bg-success">
                    <i class="fas fa-check-circle me-1"></i> Em estoque
                </span>
            </div>
        </div>
        @if($product->discount > 0)
        <div class="mb-2">
            <span class="text-decoration-line-through text-muted me-2">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
            <span class="badge bg-danger">-{{ $product->discount }}%</span>
        </div>
        @endif
        <h2 class="text-primary mb-4">R$ {{ number_format($product->discounted_price, 2, ',', '.') }}</h2>
        <div class="mb-4">
            <p>{{ $product->short_description }}</p>
        </div>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <strong class="me-2">Marca:</strong>
                <span>{{ $product->brand->name }}</span>
            </div>
            <div class="d-flex align-items-center mb-2">
                <strong class="me-2">Categoria:</strong>
                <a href="{{ route('catalog.category', $product->category->slug) }}" class="text-decoration-none">{{ $product->category->name }}</a>
            </div>
        </div>
        <div class="border-top border-bottom py-3 mb-4">
            <div class="d-flex align-items-center mb-2">
                <i class="fas fa-truck text-primary me-2"></i>
                <span>Frete grátis para todo o país</span>
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="fas fa-shield-alt text-primary me-2"></i>
                <span>Garantia de 12 meses</span>
            </div>
            <div class="d-flex align-items-center">
                <i class="fas fa-credit-card text-primary me-2"></i>
                <span>Parcele em até 12x sem juros</span>
            </div>
        </div>
        <div class="d-flex align-items-center mb-4">
            <div class="input-group me-3" style="width: 120px;">
                <button class="btn btn-outline-secondary" type="button" id="decrement">-</button>
                <input type="text" class="form-control text-center" value="1" id="quantity">
                <button class="btn btn-outline-secondary" type="button" id="increment">+</button>
            </div>
            <button class="btn btn-primary me-2 flex-grow-1">
                <i class="fas fa-shopping-cart me-2"></i> Adicionar ao Carrinho
            </button>
            <button class="btn btn-outline-secondary">
                <i class="far fa-heart"></i>
            </button>
        </div>
        <div class="alert alert-info">
            <i class="fas fa-info-circle me-2"></i> Entrega em 3-5 dias úteis para a maioria das regiões.
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('increment').addEventListener('click', function() {
        const quantityInput = document.getElementById('quantity');
        quantityInput.value = parseInt(quantityInput.value) + 1;
    });

    document.getElementById('decrement').addEventListener('click', function() {
        const quantityInput = document.getElementById('quantity');
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    });
</script>
@endpush