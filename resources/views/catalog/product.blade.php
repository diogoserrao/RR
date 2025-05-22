@extends('layouts.app')

@section('title', $product['name'] . ' - ElectroHome')

<head>
    <!-- Bootstrap e CSS do produto -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('catalog/product.css') }}" rel="stylesheet">
    <!-- Ícones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

@section('content')
<!-- Espaço para compensar o header fixo -->
<div class="header-spacer"></div>

<!-- Breadcrumb e botão voltar -->
<div class="product-breadcrumb-container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb-nav">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('catalog.index') }}">Catálogo</a></li>
            <li><a href="{{ route('catalog.category', $product->category->slug) }}">{{ $product->category->name }}</a></li>
            <li class="active">{{ $product->name }}</li>
        </ol>
    </nav>
    <a href="{{ route('catalog.index') }}" class="back-button">
        <i class="fas fa-arrow-left"></i> Voltar ao Catálogo
    </a>
</div>

<!-- Conteúdo principal do produto -->
<main class="product-container">
    <!-- Galeria de imagens -->
    <div class="product-gallery">
        <div class="main-image-container">
            <img src="{{ $product->image_url }}" class="main-image" alt="{{ $product->name }}" id="mainProductImage">
            <video id="mainProductVideo" class="main-video" controls style="display:none;">
                <source src="{{ $product->video_url ?? '' }}" type="video/mp4">
                Seu navegador não suporta vídeo.
            </video>
            <div class="badge-container">
                @if($product->discount > 0)
                <span class="discount-badge">-{{ $product->discount }}%</span>
                @endif
                <span class="stock-badge">Em estoque</span>
            </div>
        </div>

        <div class="thumbnail-container">
            <!-- Miniatura da imagem principal -->
            <div class="thumbnail-item">
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" onclick="showMainMedia('img', '{{ $product->image_url }}')">
            </div>
            <!-- Miniaturas de imagens extra -->
            @foreach($product->images as $img)
            <div class="thumbnail-item">
                <img src="{{ $img->image_url }}" alt="{{ $product->name }}" onclick="showMainMedia('img', '{{ $img->image_url }}')">
            </div>
            @endforeach
            <!-- Miniatura do vídeo (se existir) -->
            @if(!empty($product->video_url))
            <div class="thumbnail-item video-thumbnail" onclick="showMainMedia('video')">
                <i class="fas fa-play"></i>
            </div>
            @endif
        </div>
    </div>

    <!-- Informações do produto -->
    <div class="product-info">
        <!-- Cabeçalho -->
        <div class="product-header">
            <h1>{{ $product->name }}</h1>
            <div class="rating-container">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="review-count">({{ $product->reviews_count }} avaliações)</span>
            </div>
        </div>

        <!-- Preço -->
        <div class="price-container">
            @if($product->discount > 0)
            <span class="original-price">{{ number_format($product->price, 2, ',', '.') }} €</span>
            @endif
            <span class="current-price">{{ number_format($product->discounted_price, 2, ',', '.') }} €</span>
        </div>

        <!-- Descrição -->
        <div class="product-description">
            <p>{{ $product->short_description }}</p>
        </div>

        <!-- Metadados -->
        <div class="meta-container">
            <div class="meta-item">
                <span class="meta-label">Marca:</span>
                <span class="meta-value">{{ $product->brand->name }}</span>
            </div>
            <div class="meta-item">
                <span class="meta-label">Categoria:</span>
                <a href="{{ route('catalog.index', ['category' => $product->category->slug]) }}" class="meta-value link">
                    {{ $product->category->name }}
                </a>
            </div>
        </div>

        <!-- Benefícios -->
        <div class="benefits-container">
            <div class="benefit-item">
                <i class="fas fa-truck"></i>
                <span>Frete grátis para todo a Região</span>
            </div>
            <div class="benefit-item">
                <i class="fas fa-shield-alt"></i>
                <span>Garantia de 36 meses</span>
            </div>
            <div class="benefit-item">
                <i class="fas fa-credit-card"></i>
                <span>Parcele em até 6x sem juros</span>
            </div>
        </div>

        <!-- Ações -->
        <div class="actions-container">

            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="add-to-cart">
                    <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
                </button>
            </form>


        </div>

        <div class="delivery-info">
            <i class="fas fa-info-circle"></i> Entrega em 1-3 dias úteis para na região.
        </div>
    </div>
</main>

<!-- Seção de detalhes do produto (opcional) -->
<section class="product-details">
    <div class="details-container">
        <h2>Detalhes do Produto</h2>
        <div class="details-content">
            <!-- Conteúdo detalhado do produto -->
            <p>
                @if($product->spec_sheet_url)
                <a href="{{ $product->spec_sheet_url }}" target="_blank" class="spec-sheet-btn">
                    <i class="fas fa-file-pdf"></i> Ficha Técnica
                </a>
                @else
                <span class="spec-sheet-placeholder">
                    <i class="fas fa-file-pdf"></i> Ficha Técnica (em breve)
                </span>
                @endif
            </p>
            <p>{{ $product->description }}</p>

        </div>
    </div>
</section>

@endsection

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