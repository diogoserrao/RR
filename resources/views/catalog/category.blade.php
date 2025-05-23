@extends('layouts.app')

@section('title', 'Categoria - ElectroHome')

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('catalog/category.css') }}" rel="stylesheet">

</head>
@section('content')
<div style="margin-top: 30px;"></div>

<!-- ====== HEADER DA CATEGORIA ====== -->
<div class="category-header-row">
    <div class="category-header-col-left">
        <h1 class="category-title">Categoria: {{ $category->name }}</h1>
    </div>
    <div class="category-header-col-right">
        <!-- Breadcrumb de navegação -->
        <nav aria-label="breadcrumb">
            <ol class="category-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('catalog.index') }}">Catálogo</a></li>
                <li class="active">{{ $category->name }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- ====== /HEADER DA CATEGORIA ====== -->

<div class="category-content-row">
    <div class="category-products-col">

        <!-- ====== HEADER DOS PRODUTOS (info e ordenação) ====== -->
        <div class="category-products-header">
            <div>
                Mostrando <span class="category-bold">{{ $products->firstItem() ?? 0 }}-{{ $products->lastItem() ?? 0 }}</span> de <span class="category-bold">{{ $products->total() }}</span> produtos em {{ $category->name }}
            </div>
            <div class="category-sort-row">
                <label for="sortBy">Ordenar por:</label>
                <select class="category-sort-select" id="sortBy">
                    <option selected>Relevância</option>
                    <option>Menor Preço</option>
                    <option>Maior Preço</option>
                    <option>Mais Vendidos</option>
                    <option>Melhor Avaliados</option>
                </select>
            </div>
        </div>
        <!-- ====== /HEADER DOS PRODUTOS ====== -->

        <!-- ====== LISTA DE PRODUTOS DA CATEGORIA ====== -->
        <div class="category-products-row">
            @foreach($products as $product)
            <div class="category-product-col">
                <div class="category-product-card">
                    <div class="category-product-img-wrapper">
                        <img src="{{ $product->image_url }}" class="category-product-img" alt="{{ $product->name }}">
                        <div class="category-product-actions">
                            <button class="category-product-action-btn">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="category-product-action-btn">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        @if($product->discount > 0)
                        <div class="category-product-badge">
                            -{{ $product->discount }}%
                        </div>
                        @endif
                    </div>
                    <div class="category-product-card-body">
                        <span class="category-product-brand-badge">{{ $product->brand->name }}</span>
                        <h5 class="category-product-title">
                            <a href="{{ route('catalog.product', ['category' => $category->slug, 'id' => $product->id]) }}">{{ $product->name }}</a>
                        </h5>
                        <div class="category-product-rating-row">
                            <div class="category-product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="category-product-reviews">({{ $product->reviews_count }} avaliações)</span>
                        </div>
                        <div class="category-product-bottom-row">
                            <div>
                                @if($product->discount > 0)
                                <span class="category-product-old-price"> {{ number_format($product->price, 2, ',', '.') }} €</span>
                                @endif
                                <div class="category-product-price">{{ number_format($product->discounted_price, 2, ',', '.' )}} €</div>
                            </div>
                            <button class="category-product-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- ====== /LISTA DE PRODUTOS DA CATEGORIA ====== -->

        <!-- ====== PAGINAÇÃO ====== -->
        <nav aria-label="Page navigation">
            {{ $products->links() }}
        </nav>
        <!-- ====== /PAGINAÇÃO ====== -->

    </div>
</div>
@endsection