@extends('layouts.app')

@section('title', 'ElectroHome - Sua loja de eletrodomésticos')

@section('content')
    <!-- Carrossel de Destaques -->
    <div id="mainCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner rounded">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1200x400?text=Promoção+de+Geladeiras" class="d-block w-100" alt="Promoção de Geladeiras">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <h5>Geladeiras com até 30% off</h5>
                    <p>As melhores marcas com os melhores preços</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400?text=Ofertas+de+Microondas" class="d-block w-100" alt="Ofertas de Microondas">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <h5>Microondas com 20% de desconto</h5>
                    <p>Frete grátis para toda a região</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400?text=Novidades+em+Ar+Condicionado" class="d-block w-100" alt="Novidades em Ar Condicionado">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <h5>Ar Condicionado Inverter</h5>
                    <p>Economize até 60% na conta de luz</p>
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

    <!-- Destaques -->
    <section class="mb-5">
        <h2 class="mb-4 text-center">Produtos em Destaque</h2>
        <div class="row">
            @for($i = 1; $i <= 4; $i++)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="badge bg-danger position-absolute" style="top: 0.5rem; right: 0.5rem;">Promoção</div>
                    <img src="https://via.placeholder.com/300x300?text=Produto+{{ $i }}" class="card-img-top" alt="Produto {{ $i }}">
                    <div class="card-body">
                        <h5 class="card-title">Produto {{ $i }}</h5>
                        <p class="card-text">Descrição breve do produto {{ $i }} com suas principais características.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-decoration-line-through text-muted me-2">R$ {{ number_format(rand(2000, 5000), 2, ',', '.' )}}</span>
                                <span class="fw-bold">R$ {{ number_format(rand(1000, 1999), 2, ',', '.' )}}</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <div class="text-center mt-3">
            <a href="{{ route('catalog.index') }}" class="btn btn-primary">Ver Todos os Produtos</a>
        </div>
    </section>

    <!-- Categorias -->
    <section class="mb-5">
        <h2 class="mb-4 text-center">Nossas Categorias</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card category-card">
                    <a href="{{ route('catalog.category', 'geladeiras') }}" class="text-decoration-none">
                        <img src="https://via.placeholder.com/400x300?text=Geladeiras" class="card-img" alt="Geladeiras">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
                            <h3 class="text-white">Geladeiras</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card category-card">
                    <a href="{{ route('catalog.category', 'fogões') }}" class="text-decoration-none">
                        <img src="https://via.placeholder.com/400x300?text=Fogões" class="card-img" alt="Fogões">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
                            <h3 class="text-white">Fogões</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card category-card">
                    <a href="{{ route('catalog.category', 'lavadoras') }}" class="text-decoration-none">
                        <img src="https://via.placeholder.com/400x300?text=Lavadoras" class="card-img" alt="Lavadoras">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
                            <h3 class="text-white">Lavadoras</h3>
                        </div>
                    </a>
                </div>
            </div>
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
                <img src="https://via.placeholder.com/600x400?text=Loja+ElectroHome" alt="Loja ElectroHome" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <!-- Marcas Parceiras -->
    <section class="mb-5">
        <h2 class="mb-4 text-center">Nossas Marcas</h2>
        <div class="row g-4">
            @foreach(['Brastemp', 'Electrolux', 'Consul', 'Samsung', 'LG', 'Philco'] as $brand)
            <div class="col-4 col-md-2 text-center">
                <div class="p-3 border rounded bg-white">
                    <img src="https://via.placeholder.com/150x80?text={{ $brand }}" alt="{{ $brand }}" class="img-fluid">
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection