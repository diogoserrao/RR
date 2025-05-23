@extends('layouts.app')

@section('title', 'Catálogo de Produtos')

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('catalog/index.css') }}" rel="stylesheet">
</head>

@section('content')
<div style="margin-top: 30px;"></div>
<div class="catalog-container">

    <!-- Mobile Filters Button -->
    <div class="mobile-toolbar">
        <button class="mobile-filter-btn" onclick="toggleFilters()">
            <i class="fas fa-sliders-h"></i> Filtros
        </button>
        <a href="{{ route('home') }}" class="mobile-home-btn">
            <i class="fas fa-home"></i> Início
        </a>
    </div>

    <!-- Main Catalog Structure -->
    <div class="catalog-layout">
        <div id="filterOverlay" class="filter-overlay" onclick="closeFilters()"></div>
        <!-- Left Column - Filters (Mobile overlay) -->
        <aside class="catalog-sidebar" id="filterSidebar">
            <div class="sidebar-header">

                <button class="close-filters-btn" onclick="closeFilters()" type="button">
                    <i class="fas fa-times"></i> Fechar
                </button>
            </div>

            <!-- Filters Card -->
            <div class="filter-card">
                <h5>Filtrar Produtos</h5>
                <div class="filter-card-body">
                    <!-- INÍCIO DA ALTERAÇÃO: O FORMULÁRIO AGORA ABRANGE TAMBÉM O SORT -->
                    <form method="GET" action="{{ route('catalog.index') }}" id="catalog-filters-form">
                        <!-- Category Filter -->
                        <div class="filter-group">
                            <label class="filter-label">Categorias</label>
                            <div class="select-wrapper">
                                <select name="category" class="filter-select">
                                    <option value="" {{ request('category') ? '' : 'selected' }}>Todas Categorias</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>

                        <!-- Subcategory Filter -->
                        @if(isset($selectedCategory) && $subcategories->count())
                        <div class="filter-group">
                            <label class="filter-label">Tipologia</label>
                            <div class="select-wrapper">
                                <select name="subcategory" class="filter-select">
                                    <option value="" {{ request('subcategory') ? '' : 'selected' }}>Todas Tipologias</option>
                                    @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->slug }}" {{ request('subcategory') == $subcategory->slug ? 'selected' : '' }}>
                                        {{ $subcategory->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        @endif

                        <!-- Promotions Filter -->
                        <div class="filter-group">
                            <label class="filter-label">Promoções</label>
                            <label class="promo-checkbox-container">
                                <input
                                    type="checkbox"
                                    name="promotions"
                                    value="1"
                                    class="promo-checkbox"
                                    {{ request('promotions') == 1 ? 'checked' : '' }}
                                    onchange="document.getElementById('catalog-filters-form').submit();">
                                <span class="promo-checkmark"></span>
                                Apenas Promoções
                            </label>
                        </div>

                        <!-- Brands Filter -->
                        <div class="filter-group">
                            <label class="filter-label">Marcas</label>
                            <div class="brands-filter-container">
                                <div class="search-brands">
                                    <input type="text" placeholder="Pesquisar marcas..." class="brand-search-input">
                                </div>
                                <ul class="filter-list">
                                    @foreach($brands as $brand)
                                    <li>
                                        <label class="checkbox-container">
                                            <input
                                                type="checkbox"
                                                name="brands[]"
                                                value="{{ $brand->id }}"
                                                class="filter-checkbox"
                                                {{ (is_array(request('brands')) && in_array($brand->id, request('brands'))) ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                            {{ $brand->name }}
                                        </label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="filter-group">
                            <label class="filter-label">Preço</label>
                            <div class="price-range-slider">
                                <div id="priceSlider" class="slider"></div>
                                <div class="price-inputs">
                                    <input type="number" name="price_min" placeholder="Mín" min="0" value="{{ request('price_min') }}" class="price-input">
                                    <span class="price-range-separator">-</span>
                                    <input type="number" name="price_max" placeholder="Máx" min="0" value="{{ request('price_max') }}" class="price-input">
                                </div>
                            </div>
                        </div>


                        <div class="filter-buttons">
                            <button type="submit" class="filter-apply-btn">Aplicar Filtros</button>
                            <a href="{{ route('catalog.index') }}" class="filter-reset-btn" >Limpar Tudo</a>
                        </div>
                    </form>
                    <!-- FIM DA ALTERAÇÃO -->
                </div>
            </div>

            <!-- Featured Products (Desktop only) -->
            <div class="featured-products-card desktop-only">
                <div class="featured-products-header">
                    <h5>Produtos em Destaque</h5>
                </div>
                <div class="featured-products-list">
                    @foreach($featuredProducts as $product)
                    <a href="{{ route('catalog.product', ['category' => $product->category->slug, 'id' => $product->id]) }}" class="featured-product-item">
                        <div class="featured-product-image">
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" loading="lazy">
                        </div>
                        <div class="featured-product-info">
                            <h6>{{ Str::limit($product->name, 40) }}</h6>
                            <div class="featured-product-price">
                                @if($product->discount > 0)
                                <span class="original-price">{{ number_format($product->price, 2, ',', '.') }} €</span>
                                @endif
                                <span class="current-price">{{ number_format($product->discounted_price, 2, ',', '.') }} €</span>
                            </div>
                            <div class="featured-product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </aside>

        <!-- Right Column - Products -->
        <main class="catalog-main">
            <!-- Catalog Toolbar (Ordenação) - AGORA DENTRO DO MESMO FORM -->
            <div class="catalog-toolbar">
                <div class="results-count">
                    <span>{{ $products->total() }} produtos encontrados</span>
                </div>
                <form method="GET" action="{{ route('catalog.index') }}" class="sort-form" id="sort-form">
                    <!-- Mantém todos os filtros ativos como hidden -->
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    <input type="hidden" name="subcategory" value="{{ request('subcategory') }}">
                    <input type="hidden" name="promotions" value="{{ request('promotions') }}">
                    <input type="hidden" name="price_min" value="{{ request('price_min') }}">
                    <input type="hidden" name="price_max" value="{{ request('price_max') }}">
                    @if(is_array(request('brands')))
                    @foreach(request('brands') as $brand)
                    <input type="hidden" name="brands[]" value="{{ $brand }}">
                    @endforeach
                    @endif
                    <div class="select-wrapper">
                        <select name="sort" id="sortBy" class="sort-select" onchange="document.getElementById('sort-form').submit()">
                            <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Relevância</option>
                            <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Menor Preço</option>
                            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Maior Preço</option>
                            <option value="best_sellers" {{ request('sort') == 'best_sellers' ? 'selected' : '' }}>Mais Vendidos</option>
                            <option value="top_rated" {{ request('sort') == 'top_rated' ? 'selected' : '' }}>Melhor Avaliados</option>
                        </select>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </form>
            </div>

            <!-- Products Grid -->
            <div class="products-grid">
                @foreach($products as $product)
                <div class="product-card">
                    <!-- Product Badge -->
                    @if($product->discount > 0 && $product->discounted_price > 0 && $product->discounted_price < $product->price)
                        <div class="product-badge">-{{ $product->discount }}%</div>
                        @endif

                        <!-- Product Image -->
                        <div class="product-image-container">
                            <a href="{{ route('catalog.product', ['category' => $product->category->slug, 'id' => $product->id]) }}">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="product-image" loading="lazy">
                            </a>
                        </div>

                        <!-- Product Info -->
                        <div class="product-info">
                            <span class="product-brand">{{ $product->brand->name }}</span>
                            <h3 class="product-title">
                                <a href="{{ route('catalog.product', ['category' => $product->category->slug, 'id' => $product->id]) }}">
                                    {{ Str::limit($product->name, 50) }}
                                </a>
                            </h3>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="reviews-count">({{ $product->reviews_count }})</span>
                            </div>
                            <div class="product-price-container">
                                @if($product->discount > 0 && $product->discounted_price > 0 && $product->discounted_price < $product->price)
                                    <span class="original-price">{{ number_format($product->price, 2, ',', '.') }} €</span>
                                    <span class="current-price">{{ number_format($product->discounted_price, 2, ',', '.') }} €</span>
                                    @else
                                    <span class="current-price">{{ number_format($product->price, 2, ',', '.') }} €</span>
                                    @endif
                            </div>
                        </div>

                        <!-- Add to Cart -->
                        <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i> Adicionar
                            </button>
                        </form>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="catalog-pagination">
                {{ $products->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
            </div>
        </main>
    </div>
</div>

<script>
    function toggleFilters() {
        const sidebar = document.getElementById('filterSidebar');
        const overlay = document.getElementById('filterOverlay');
        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.classList.toggle('no-scroll');
    }

    function closeFilters() {
        document.getElementById('filterSidebar').classList.remove('active');
        document.getElementById('filterOverlay').classList.remove('active');
        document.body.classList.remove('no-scroll');
    }

    // Search brands functionality
    document.querySelector('.brand-search-input').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const brandItems = document.querySelectorAll('.filter-list li');

        brandItems.forEach(item => {
            const brandName = item.textContent.toLowerCase();
            if (brandName.includes(searchTerm)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });

    // Submete o formulário ao mudar qualquer filtro ou ordenação
    document.querySelectorAll('.filter-select').forEach(function(select) {
        select.addEventListener('change', function() {
            document.getElementById('catalog-filters-form').submit();
        });
    });
    document.querySelectorAll('.filter-checkbox').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            document.getElementById('catalog-filters-form').submit();
        });
    });
</script>
@endsection