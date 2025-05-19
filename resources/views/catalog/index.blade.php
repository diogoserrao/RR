@extends('layouts.app')

@section('title', 'Catálogo de Produtos - ElectroHome')

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('catalog/index.css') }}" rel="stylesheet">
</head>

@section('content')
<div style="margin-top: 80px;"></div>

<!-- ====== INÍCIO DA ESTRUTURA PRINCIPAL DO CATÁLOGO ====== -->
<div class="catalog-row">

    <div class="catalog-row">
        <div class="catalog-col-left">
            <div class="filter-card">
                <div class="filter-card-header">
                    <h5>Filtrar</h5>
                </div>
                <div class="filter-card-body">
                    <form method="GET" action="{{ route('catalog.index') }}">
                        <!-- Filtro por Categorias (Dropdown) -->
                        <h6 class="filter-title">Categorias</h6>
                        <select name="category" class="filter-dropdown" onchange="this.form.submit()">
                            <option value="" {{ request('category') ? '' : 'selected' }}>Todos</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>

                        <!-- Filtro por Subcategorias (Dropdown) -->
                        @if(isset($selectedCategory) && $subcategories->count())
                        <h6 class="filter-title">Tipologia</h6>
                        <select name="subcategory" class="filter-dropdown" onchange="this.form.submit()">
                            <option value="" {{ request('subcategory') ? '' : 'selected' }}>Todas</option>
                            @foreach($subcategories as $subcategory)
                            <option value="{{ $subcategory->slug }}" {{ request('subcategory') == $subcategory->slug ? 'selected' : '' }}>
                                {{ $subcategory->name }}
                            </option>
                            @endforeach
                        </select>
                        @endif

                        <!-- Filtro por Promoções (Dropdown) -->
                        <h6 class="filter-title">Promoções</h6>
                        <select name="promotions" class="filter-dropdown" onchange="this.form.submit()">
                            <option value="" {{ request('promotions') ? '' : 'selected' }}>Todas</option>
                            <option value="1" {{ request('promotions') == 1 ? 'selected' : '' }}>Promoções</option>
                        </select>

                        <!-- Filtro por Marcas (Dropdown) -->
                        <h6 class="filter-title">Marcas</h6>
                        <div class="brands-filter-container">
                            <ul class="filter-list">
                                @foreach($brands as $brand)
                                <li>
                                    <label class="checkbox-container">
                                        <input
                                            type="checkbox"
                                            name="brands[]"
                                            value="{{ $brand->id }}"
                                            class="filter-checkbox"
                                            {{ (is_array(request('brands')) && in_array($brand->id, request('brands'))) ? 'checked' : '' }}
                                            onchange="this.form.submit()">
                                        <span class="checkmark"></span>
                                        {{ $brand->name }}
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                        </div>


                        <hr class="filter-divider">

                        <!-- Filtro por Preço -->
                        <h6 class="filter-title">Preço</h6>
                        <div class="filter-price-range">
                            <input type="number" name="price_min" placeholder="Mín" min="0" value="{{ request('price_min') }}">
                            <span class="filter-price-sep">a</span>
                            <input type="number" name="price_max" placeholder="Máx" min="0" value="{{ request('price_max') }}">
                        </div>
                        <button class="filter-btn" type="submit">Aplicar Filtros</button>
                    </form>
                </div>
            </div>
            <!-- ====== /FILTROS ====== -->

            <!-- ====== PRODUTOS EM DESTAQUE ====== -->
            <div class="featured-products-card">
                <div class="featured-products-header">
                    <h5>Produtos em Destaque</h5>
                </div>
                <div class="featured-products-body">
                    @foreach($featuredProducts as $product)
                    <div class="featured-product-row">
                        <a href="{{ route('catalog.product', ['category' => $product->category->slug, 'id' => $product->id]) }}">
                            <img src="{{ $product->image_url }}" class="featured-product-img" alt="{{ $product->name }}">
                        </a>
                        <div>
                            <h6 class="featured-product-title">
                                <a href="{{ route('catalog.product', ['category' => $product->category->slug, 'id' => $product->id]) }}">
                                    {{ $product->name }}
                                </a>
                            </h6>
                            <p class="featured-product-price"> {{ number_format($product->discounted_price, 2, ',', '.') }} €</p>
                            <div class="featured-product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- ====== /PRODUTOS EM DESTAQUE ====== -->

        </div>
        <!-- ====== /COLUNA ESQUERDA ====== -->

        <!-- ====== COLUNA DIREITA: PRODUTOS ====== -->
        <div class="catalog-col-right">

            <!-- ====== HEADER DO CATÁLOGO (info e ordenação) ====== -->
            <div class="catalog-header">
                <div>
                    Mostrando <span class="catalog-bold">{{ $products->firstItem() ?? 0 }}-{{ $products->lastItem() ?? 0 }}</span> de <span class="catalog-bold">{{ $products->total() }}</span> produtos
                </div>
                <form method="GET" action="{{ route('catalog.index') }}" id="filterForm">
                    <div class="catalog-sort">
                        <label for="sortBy">Ordenar por:</label>
                        <select class="sort-select" id="sortBy" name="sort" onchange="document.getElementById('filterForm').submit()">
                            <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Relevância</option>
                            <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Menor Preço</option>
                            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Maior Preço</option>
                            <option value="best_sellers" {{ request('sort') == 'best_sellers' ? 'selected' : '' }}>Mais Vendidos</option>
                            <option value="top_rated" {{ request('sort') == 'top_rated' ? 'selected' : '' }}>Melhor Avaliados</option>
                        </select>
                    </div>
                </form>
            </div>
            <!-- ====== /HEADER DO CATÁLOGO ====== -->

            <!-- ====== LISTA DE PRODUTOS ====== -->
            <div class="catalog-products-row">
                @foreach($products as $product)
                <div class="catalog-product-col">
                    <a href="{{ route('catalog.product', ['category' => $product->category->slug, 'id' => $product->id]) }}" class="product-card-link">
                        <div class="product-card">


                            <div class="product-img-wrapper">
                                <img src="{{ $product->image_url }}" class="product-img" alt="{{ $product->name }}">
                                <div class="product-actions">
                                    <button class="product-action-btn" type="button">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="product-action-btn" type="button">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                @if($product->discount > 0)
                                <div class="product-badge">
                                    -{{ $product->discount }}%
                                </div>
                                @endif
                            </div>
                            <div class="product-card-body">
                                <span class="product-brand-badge">{{ $product->brand->name }}</span>
                                <h5 class="product-title">{{ $product->name }}</h5>
                                <div class="product-rating-row">
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="product-reviews">({{ $product->reviews_count }} avaliações)</span>
                                </div>
                                <div class="product-bottom-row">
                                    <div>
                                        @if($product->discount > 0)
                                        <span class="product-old-price">{{ number_format($product->price, 2, ',', '.') }} €</span>
                                        <div class="product-price"> {{ number_format($product->discounted_price, 2, ',', '.' )}} €</div>
                                        @else
                                        <div class="product-price"> {{ number_format($product->price, 2, ',', '.' )}} €</div>
                                        @endif
                                    </div>
                                    <form action="{{ route('cart.add') }}" method="POST" style="display:inline;" onclick="event.stopPropagation();">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="product-cart-btn">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <!-- ====== /LISTA DE PRODUTOS ====== -->

            <!-- ====== PAGINAÇÃO ====== -->
            <nav class="catalog-pagination" aria-label="Page navigation">
                {{ $products->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
            </nav>
            <!-- ====== /PAGINAÇÃO ====== -->

        </div>
        <!-- ====== /COLUNA DIREITA ====== -->

    </div>
    <!-- ====== /ESTRUTURA PRINCIPAL DO CATÁLOGO ====== -->
    @endsection