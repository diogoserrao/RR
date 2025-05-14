@extends('layouts.app')

@section('title', 'ElectroHome - Sua loja de eletrodomésticos')

<!-- Bootstrap JS (com Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@section('content')
<!-- Carrossel de Destaques -->

<div id="mainCarousel" class="carousel slide mb-5 mt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($featuredProducts as $i => $product)
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="{{ $i }}" @if($i == 0) class="active" @endif></button>
        @endforeach
    </div>
    <div class="carousel-inner rounded">
        @foreach($featuredProducts as $i => $product)
        <div class="carousel-item @if($i == 0) active @endif">
            <img src="{{ $product->image_url }}" class="d-block w-100" alt="{{ $product->name }}">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                <h5>{{ $product->name }}</h5>
                <p>{{ $product->short_description }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Destaques -->
<section class="mb-5">
    <h2 class="mb-4 text-center">Produtos em Destaque</h2>
    <div class="row">
        @foreach($featuredProducts as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="badge bg-danger position-absolute" style="top: 0.5rem; right: 0.5rem;">Promoção</div>
                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->short_description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-decoration-line-through text-muted me-2">R$ {{ number_format($product->price, 2, ',', '.' )}}</span>
                            <span class="fw-bold">R$ {{ number_format($product->discounted_price, 2, ',', '.' )}}</span>
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
    <div class="text-center mt-3">
        <a href="{{ route('catalog.index') }}" class="btn btn-primary">Ver Todos os Produtos</a>
    </div>
</section>

<!-- Mais Vendidos -->
<section class="mb-5">
    <h2 class="mb-4 text-center">Mais Vendidos</h2>
    <div class="row">
        @foreach($topProducts as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="badge bg-success position-absolute" style="top: 0.5rem; right: 0.5rem;">Mais Vendido</div>
                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text flex-grow-1">{{ $product->short_description }}</p>
                    <div class="d-flex justify-content-between align-items-center mt-auto">
                        <div>
                            <span class="text-decoration-line-through text-muted me-2">R$ {{ number_format($product->price, 2, ',', '.' )}}</span>
                            <span class="fw-bold text-danger">R$ {{ number_format($product->discounted_price, 2, ',', '.' )}}</span>
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
</section>

<!-- Categorias -->
<section class="mb-5">
    <h2 class="mb-4 text-center">Nossas Categorias</h2>
    <div class="row g-4">
        @foreach($categories as $category)
        <div class="col-md-4">
            <div class="card category-card">
                <a href="{{ route('catalog.category', $category->slug) }}" class="text-decoration-none">
                    <img src="{{ $category->image_url ?? 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80' }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
                        <h3 class="text-white">{{ $category->name }}</h3>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Sobre Nós -->
<section class="mb-5 bg-light p-4 rounded">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>Sobre a ElectroHome</h2>
            <p>A ElectroHome é uma loja especializada em eletrodomésticos, oferecendo os melhores produtos das principais marcas do mercado. Com mais de 15 anos de experiência, nos destacamos pelo atendimento personalizado e pós-venda de qualidade.</p>
            <p>Nossa missão é proporcionar conforto e praticidade para seu lar, com produtos que facilitam seu dia a dia e tornam sua vida mais simples.</p>
            <a href="{{ route('about') }}" class="btn btn-outline-primary">Saiba Mais</a>
        </div>
        <div class="col-md-6">
            <img src="https://media.timeout.com/images/105396679/1536/1152/image.jpg" alt="Nossa Loja" class="img-fluid rounded shadow">
        </div>
    </div>
</section>

<!-- Marcas Parceiras -->
<section class="mb-5">
    <h2 class="mb-4 text-center">Nossas Marcas</h2>
    <div class="brand-slider-wrapper overflow-hidden" style="width: 100%;">
        <div class="brand-slider d-flex align-items-center">
            @foreach($brands as $brand)
                <div class="brand-item px-4 py-2">
                    <img src="{{ $brand->logo_url ?? 'https://via.placeholder.com/150x80?text='.$brand->name }}" alt="{{ $brand->name }}" class="img-fluid" style="max-height: 60px;">
                </div>
            @endforeach
            @foreach($brands as $brand) {{-- Repete para efeito infinito --}}
                <div class="brand-item px-4 py-2">
                    <img src="{{ $brand->logo_url ?? 'https://via.placeholder.com/150x80?text='.$brand->name }}" alt="{{ $brand->name }}" class="img-fluid" style="max-height: 60px;">
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection