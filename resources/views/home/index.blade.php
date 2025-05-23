@extends('layouts.app')

@section('title', 'ElectroHome - Sua loja de eletrodomésticos')

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('home/index.css') }}" rel="stylesheet">

</head>
@section('content')
<!-- Carrossel de Destaques -->

<div id="mainCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($featuredProducts as $i => $product)
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="{{ $i }}" @if($i==0) class="active" @endif></button>
        @endforeach
    </div>
    <div class="carousel-inner rounded">
        @foreach($featuredProducts as $i => $product)
        <div class="carousel-item @if($i == 0) active @endif">
            <img src="{{ $product->image_url }}" class="carousel-img" alt="{{ $product->name }}">
            <div class="carousel-caption carousel-caption-custom">
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
<section class="section-destaques">
    <h2 class="section-title">Produtos em Destaque</h2>
    <div class="row-destaques">
        @foreach($featuredProducts as $product)
        <div class="col-destaque">
            <a href="{{ route('catalog.product', ['category' => $product->category->slug, 'id' => $product->id]) }}" class="col-destaque-link">
                <div class="card-destaque">
                    <div class="badge-destaque">Promoção</div>
                    <div class="featured-img-wrapper">
                        <img src="{{ $product->image_url }}" class="featured-img" alt="{{ $product->name }}">
                    </div>
                    <div class="card-body-destaque">
                        <h5 class="card-title-destaque">{{ $product->name }}</h5>
                        <p class="card-text-destaque">{{ $product->short_description }}</p>
                        <div class="card-footer-destaque">
                            <div>
                                <span class="preco-antigo"> {{ number_format($product->price, 2, ',', '.' )}} €</span>
                                <span class="preco-novo"> {{ number_format($product->discounted_price, 2, ',', '.' )}} €</span>
                            </div>
                            <button class="btn-carrinho ">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-3" style="margin-top: 1.5rem !important">
        <a href="{{ route('catalog.index', ['promotions' => 1]) }}" class="btn-ver-todos" style="background:#dc3545; border:none;">
            Promoções
        </a>
    </div>
</section>

<!-- Mais Vendidos -->
<section class="section-mais-vendidos">
    <h2 class="section-title">Mais Vendidos</h2>
    <div class="row-mais-vendidos">
        @foreach($topProducts as $product)
        <div class="col-mais-vendido">
            <a href="{{ route('catalog.product', ['category' => $product->category->slug, 'id' => $product->id]) }}" class="col-mais-vendido-link">
                <div class="card-mais-vendido">
                    <div class="badge-mais-vendido">Mais Vendido</div>
                    <div class="mais-vendido-img-wrapper">
                        <img src="{{ $product->image_url }}" class="mais-vendido-img" alt="{{ $product->name }}">
                    </div>
                    <div class="card-body-mais-vendido">
                        <h5 class="card-title-mais-vendido">{{ $product->name }}</h5>
                        <p class="card-text-mais-vendido">{{ $product->short_description }}</p>
                        <div class="card-footer-mais-vendido">
                            <div>
                                @if($product->discounted_price < $product->price)
                                    <span class="preco-antigo"> {{ number_format($product->price, 2, ',', '.' )}} €</span>
                                    <span class="preco-novo preco-novo-vendido"> {{ number_format($product->discounted_price, 2, ',', '.' )}} €</span>
                                    @else
                                    <span class="preco-novo preco-novo-vendido"> {{ number_format($product->price, 2, ',', '.' )}} €</span>
                                    @endif
                            </div>
                            <button class="btn-carrinho " type="button">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>

<!-- Categorias -->
<section class="section-categorias" id="categorias">
    <div class="container">
        <h2 class="section-title">Explore Nossas Categorias</h2>
        <p class="section-subtitle">Descubra produtos incríveis em cada categoria</p>

        <div class="row-categorias">
            @foreach($categories as $category)
            <div class="col-categoria">
                <div class="card-categoria">
                    <a href="{{ route('catalog.index', ['category' => $category->slug]) }}" class="categoria-link">
                        <div class="category-img-wrapper">
                            <img src="{{ $category->image_url ?? 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80' }}"
                                class="category-img"
                                alt="{{ $category->name }}">
                            <div class="category-overlay"></div>
                        </div>
                        <h5 class="categoria-nome">{{ $category->name }}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Sobre Nós -->
<section class="section-sobre  p-4 rounded">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>Sobre a ElectroHome</h2>
            <p>A ElectroHome é uma loja especializada em eletrodomésticos, oferecendo os melhores produtos das principais marcas do mercado. Com mais de 15 anos de experiência, nos destacamos pelo atendimento personalizado e pós-venda de qualidade.</p>
            <p>Nossa missão é proporcionar conforto e praticidade para seu lar, com produtos que facilitam seu dia a dia e tornam sua vida mais simples.</p>
            <a href="{{ route('about') }}" class="btn-sobre">Saiba Mais</a>
        </div>
        <div class="col-md-6">
            <img src="https://media.timeout.com/images/105396679/1536/1152/image.jpg" alt="Nossa Loja" class="img-sobre">
        </div>
    </div>
</section>

<!-- Marcas Parceiras -->
<section class="section-marcas">
    <h2 class="section-title">Nossas Marcas</h2>
    <div class="brand-slider-wrapper">
        <div class="brand-slider" id="brandSlider">
            @foreach($brands as $brand)
            <div class="brand-item">
                <img src="{{ $brand->logo_url ?? 'https://via.placeholder.com/150x80?text='.$brand->name }}" alt="{{ $brand->name }}" class="brand-img">
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('brandSlider');
        // Duplicar o conteúdo para efeito infinito
        slider.innerHTML += slider.innerHTML;
        let scrollAmount = 0;
        const speed = 1; // pixels por frame

        function animate() {
            scrollAmount += speed;
            if (scrollAmount >= slider.scrollWidth / 2) {
                scrollAmount = 0;
            }
            slider.style.transform = `translateX(-${scrollAmount}px)`;
            requestAnimationFrame(animate);
        }
        animate();
    });
</script>

@endsection