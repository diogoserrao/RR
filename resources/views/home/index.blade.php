@extends('layouts.app')

@section('title', 'ElectroHome - Eletrodomésticos Premium')

@section('content')
<div class="hero-section mb-5">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner rounded">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Promoção de Geladeiras">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Promoção de Geladeiras</h2>
                    <p>Até 30% de desconto nas melhores marcas</p>
                    <a href="/catalogo/refrigerators" class="btn btn-primary">Comprar Agora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Linha Premium">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Linha Premium</h2>
                    <p>Os melhores eletrodomésticos para sua casa</p>
                    <a href="/catalogo" class="btn btn-primary">Ver Catálogo</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<section class="featured-categories mb-5">
    <h2 class="text-center mb-4">Nossas Categorias</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card category-card h-100">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Geladeiras">
                <div class="card-body text-center">
                    <h3 class="card-title">Geladeiras</h3>
                    <a href="/catalogo/refrigerators" class="btn btn-outline-primary">Ver Produtos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card category-card h-100">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Lavadoras">
                <div class="card-body text-center">
                    <h3 class="card-title">Lavadoras</h3>
                    <a href="/catalogo/washing-machines" class="btn btn-outline-primary">Ver Produtos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card category-card h-100">
                <img src="https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Fornos">
                <div class="card-body text-center">
                    <h3 class="card-title">Fornos</h3>
                    <a href="/catalogo/ovens" class="btn btn-outline-primary">Ver Produtos</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-products mb-5">
    <h2 class="text-center mb-4">Produtos em Destaque</h2>
    {{-- <div class="row g-4">
        @foreach($featuredProducts as $product)
        <div class="col-md-3">
            <div class="card product-card h-100">
                <div class="badge bg-danger position-absolute" style="top: 10px; right: 10px;">-{{ $product->discount }}%</div>
    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <div class="product-price mb-2">
            <span class="text-muted text-decoration-line-through">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
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
    </div>--}}
    <div class="text-center mt-4">
        <a href="/catalogo" class="btn btn-outline-primary">Ver Todos os Produtos</a>
    </div>
</section>

<section class="brands-section mb-5">
    <h2 class="text-center mb-4">Marcas Parceiras</h2>
    <div class="row g-4 align-items-center">
        <div class="col"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/LG_logo_%282015%29.svg/320px-LG_logo_%282015%29.svg.png" alt="LG" class="img-fluid"></div>
        <div class="col"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/320px-Samsung_Logo.svg.png" alt="Samsung" class="img-fluid"></div>
        <div class="col"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Whirlpool_Corporation_logo_2017.svg/320px-Whirlpool_Corporation_logo_2017.svg.png" alt="Whirlpool" class="img-fluid"></div>
        <div class="col"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Bosch-logotype.svg/320px-Bosch-logotype.svg.png" alt="Bosch" class="img-fluid"></div>
        <div class="col"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Electrolux_Logo.svg/320px-Electrolux_Logo.svg.png" alt="Electrolux" class="img-fluid"></div>
    </div>
</section>

<section class="benefits-section bg-light py-4 mb-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="benefit-item">
                    <i class="fas fa-truck fa-2x text-primary mb-2"></i>
                    <h5>Frete Grátis</h5>
                    <p class="mb-0">Para compras acima de R$ 999</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="benefit-item">
                    <i class="fas fa-credit-card fa-2x text-primary mb-2"></i>
                    <h5>Parcele em até 12x</h5>
                    <p class="mb-0">Sem juros no cartão</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="benefit-item">
                    <i class="fas fa-shield-alt fa-2x text-primary mb-2"></i>
                    <h5>Garantia Estendida</h5>
                    <p class="mb-0">Até 3 anos disponível</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="benefit-item">
                    <i class="fas fa-store fa-2x text-primary mb-2"></i>
                    <h5>Retire na Loja</h5>
                    <p class="mb-0">Compre online e retire</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection