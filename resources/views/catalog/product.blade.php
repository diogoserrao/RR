@extends('layouts.app')

@section('title', $product['name'] . ' - ElectroHome')

<head>
    <!-- Bootstrap e CSS do produto -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('catalog/product.css') }}" rel="stylesheet">
</head>

@section('content')
<!-- Espaço para compensar o header fixo -->
<div style="margin-top: 80px;"></div>

<!-- Breadcrumb e botão voltar -->
<div class="product-breadcrumb-row">
    <nav aria-label="breadcrumb">
        <ol class="product-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('catalog.index') }}">Catálogo</a></li>
            <!-- Link para categoria filtrada -->
            <li><a href="{{ route('catalog.category', $product->category->slug) }}">{{ $product->category->name }}</a></li>
            <li class="active">{{ $product->name }}</li>
        </ol>
    </nav>
    <a href="{{ route('catalog.index') }}" class="product-back-btn product-back-btn-main">
        <i class="fas fa-arrow-left"></i> Voltar ao Catálogo
    </a>
</div>

<!-- Linha principal do produto -->
<div class="product-main-row">
    <!-- Coluna esquerda: galeria de imagens e vídeo -->
    <div class="product-main-col-left">
        <div class="product-gallery">
            <div class="product-gallery-main">
                <img src="{{ $product->image_url }}" class="product-main-img" alt="{{ $product->name }}" id="mainProductImage">
                <!-- Vídeo do produto (opcional) -->
                <video id="mainProductVideo" class="product-main-video" controls style="display:none;">
                    <source src="{{ $product->video_url ?? '' }}" type="video/mp4">
                    Seu navegador não suporta vídeo.
                </video>
            </div>
            <div class="product-gallery-thumbs">
                <!-- Miniatura da imagem principal -->
                <div class="product-thumb-col">
                    <img src="{{ $product->image_url }}" class="product-thumb-img" alt="{{ $product->name }}" onclick="showMainMedia('img', '{{ $product->image_url }}')">
                </div>
                <!-- Miniaturas de imagens extra (exemplo) -->
                @for($i = 1; $i <= 4; $i++)
                    <div class="product-thumb-col">
                    <img src="https://via.placeholder.com/150x150?text={{ $product->name }}+{{ $i }}" class="product-thumb-img" alt="{{ $product->name }} {{ $i }}" onclick="showMainMedia('img', 'https://via.placeholder.com/600x600?text={{ $product->name }}+{{ $i }}')">
            </div>
            @endfor
            <!-- Miniatura do vídeo (se existir) -->
            @if(!empty($product->video_url))
            <div class="product-thumb-col">
                <div class="product-thumb-video" onclick="showMainMedia('video')">
                    <i class="fas fa-play-circle"></i>
                    <span>Vídeo</span>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- Coluna direita: informações do produto -->
<div class="product-main-col-right">
    <!-- Título do produto -->
    <h1 class="product-title-main">{{ $product->name }}</h1>
    <!-- Avaliação e stock -->
    <div class="product-rating-stock-row">
        <div class="product-rating">
            <span>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </span>
            <span class="product-rating-count">({{ $product->reviews_count }} avaliações)</span>
        </div>
        <div>
            <span class="product-stock-badge">
                <i class="fas fa-check-circle"></i> Em estoque
            </span>
        </div>
    </div>
    <!-- Preço e desconto -->
    @if($product->discount > 0)
    <div class="product-discount-row">
        <span class="product-old-price">{{ number_format($product->price, 2, ',', '.') }} €</span>
        <span class="product-discount-badge">-{{ $product->discount }}%</span>
    </div>
    @endif
    <div class="product-price-main"> {{ number_format($product->discounted_price, 2, ',', '.') }} €</div>
    <!-- Descrição curta -->
    <div class="product-short-desc">
        <p>{{ $product->short_description }}</p>
    </div>
    <!-- Metadados: marca e categoria -->
    <div class="product-meta-row">
        <div class="product-meta">
            <strong>Marca:</strong>
            <span>{{ $product->brand->name }}</span>
        </div>
        <div class="product-meta">
            <strong>Categoria:</strong>
            <!-- Link para catálogo filtrado pela categoria -->
            <a href="{{ route('catalog.index', ['category' => $product->category->slug]) }}" class="categoria-link">
                {{ $product->category->name }}
            </a>
        </div>
    </div>
    <!-- Benefícios do produto -->
    <div class="product-benefits-row">
        <div class="product-benefit"><i class="fas fa-truck"></i> Frete grátis para todo o país</div>
        <div class="product-benefit"><i class="fas fa-shield-alt"></i> Garantia de 12 meses</div>
        <div class="product-benefit"><i class="fas fa-credit-card"></i> Parcele em até 12x sem juros</div>
    </div>
    <!-- Linha de compra: quantidade, adicionar ao carrinho, favorito -->
    <div class="product-buy-row">
        <!-- Botões de quantidade -->
        <div class="product-qty-group">
            <button class="product-qty-btn" type="button" id="decrement">-</button>
            <input type="text" class="product-qty-input" value="1" id="quantity">
            <button class="product-qty-btn" type="button" id="increment">+</button>
        </div>
        <!-- Formulário para adicionar ao carrinho -->
        <form action="{{ route('cart.add') }}" method="POST" style="display:inline;">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="quantity" value="1">
            <button type="submit" class="product-cart-btn">
                <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
            </button>
        </form>
        <!-- Botão de favorito -->
        <button class="product-fav-btn">
            <i class="far fa-heart"></i>
        </button>
    </div>
    <!-- Alerta de informação de entrega -->
    <div class="product-info-alert">
        <i class="fas fa-info-circle"></i> Entrega em 3-5 dias úteis para a maioria das regiões.
    </div>
</div>
</div>
@endsection

<!-- Scripts JS para galeria e quantidade -->
<script>
    // Troca entre imagem principal e vídeo
    function showMainMedia(type, src = null) {
        const img = document.getElementById('mainProductImage');
        const video = document.getElementById('mainProductVideo');
        if (type === 'img') {
            img.style.display = '';
            img.src = src;
            if (video) video.style.display = 'none';
        } else if (type === 'video') {
            if (video) {
                img.style.display = 'none';
                video.style.display = '';
            }
        }
    }
    // Botão de incrementar quantidade
    document.getElementById('increment').addEventListener('click', function() {
        const quantityInput = document.getElementById('quantity');
        quantityInput.value = parseInt(quantityInput.value) + 1;
    });
    // Botão de decrementar quantidade
    document.getElementById('decrement').addEventListener('click', function() {
        const quantityInput = document.getElementById('quantity');
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    });
</script>