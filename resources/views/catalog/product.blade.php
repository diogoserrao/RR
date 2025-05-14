@extends('layouts.app')

@section('title', $product['name'] . ' - ElectroHome')

@section('content')
    <div class="row mb-4">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('catalog.index') }}">Catálogo</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('catalog.category', $product['category_slug']) }}">{{ $product['category'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product['name'] }}</li>
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
        
        <div class="col-md-6">
            <h1 class="mb-3">{{ $product['name'] }}</h1>
            
            <div class="d-flex align-items-center mb-3">
                <div class="me-3">
                    <span class="text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </span>
                    <span class="small text-muted ms-1">({{ $product['reviews'] }} avaliações)</span>
                </div>
                <div>
                    <span class="badge bg-success">
                        <i class="fas fa-check-circle me-1"></i> Em estoque
                    </span>
                </div>
            </div>
            
            @if($product['discount'] > 0)
            <div class="mb-2">
                <span class="text-decoration-line-through text-muted me-2">R$ {{ number_format($product['original_price'], 2, ',', '.') }}</span>
                <span class="badge bg-danger">-{{ $product['discount'] }}%</span>
            </div>
            @endif
            
            <h2 class="text-primary mb-4">R$ {{ number_format($product['price'], 2, ',', '.') }}</h2>
            
            <div class="mb-4">
                <p>{{ $product['short_description'] }}</p>
            </div>
            
            <div class="mb-4">
                <div class="d-flex align-items-center mb-2">
                    <strong class="me-2">Marca:</strong>
                    <span>{{ $product['brand'] }}</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <strong class="me-2">Categoria:</strong>
                    <a href="{{ route('catalog.category', $product['category_slug']) }}" class="text-decoration-none">{{ $product['category'] }}</a>
                </div>
                <div class="d-flex align-items-center">
                    <strong class="me-2">SKU:</strong>
                    <span>{{ $product['sku'] }}</span>
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
    
    <div class="row mb-5">
        <div class="col-12">
            <ul class="nav nav-tabs" id="productTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button">Descrição</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button">Especificações</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button">Avaliações ({{ $product['reviews'] }})</button>
                </li>
            </ul>
            <div class="tab-content p-3 border border-top-0 rounded-bottom" id="productTabsContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <h4 class="mb-3">Detalhes do Produto</h4>
                    <p>{{ $product['description'] }}</p>
                    <ul>
                        @foreach($product['features'] as $feature)
                        <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab-pane fade" id="specs" role="tabpanel">
                    <h4 class="mb-3">Especificações Técnicas</h4>
                    <table class="table">
                        <tbody>
                            @foreach($product['specifications'] as $key => $value)
                            <tr>
                                <th scope="row" style="width: 30%;">{{ $key }}</th>
                                <td>{{ $value }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <h4 class="mb-3">Avaliações dos Clientes</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center p-3 bg-light rounded mb-4">
                                <h2 class="display-4 text-primary mb-0">{{ $product['rating'] }}</h2>
                                <div class="text-warning mb-2">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= floor($product['rating']))
                                            <i class="fas fa-star"></i>
                                        @elseif($i - 0.5 <= $product['rating'])
                                            <i class="fas fa-star-half-alt"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                <p class="mb-0">Baseado em {{ $product['reviews'] }} avaliações</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            @foreach($product['reviews_list'] as $review)
                            <div class="mb-4 pb-3 border-bottom">
                                <div class="d-flex justify-content-between mb-2">
                                    <h5 class="mb-0">{{ $review['author'] }}</h5>
                                    <small class="text-muted">{{ $review['date'] }}</small>
                                </div>
                                <div class="text-warning mb-2">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $review['rating'])
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                <p class="mb-2">{{ $review['comment'] }}</p>
                                @if($review['response'])
                                <div class="bg-light p-3 rounded mt-2">
                                    <strong class="d-block mb-1">Resposta da loja:</strong>
                                    <p class="mb-0">{{ $review['response'] }}</p>
                                </div>
                                @endif
                            </div>
                            @endforeach
                            
                            <button class="btn btn-outline-primary">Escrever uma avaliação</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h3 class="mb-4">Produtos Relacionados</h3>
    <div class="row">
        @for($i = 1; $i <= 4; $i++)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="position-relative">
                    <img src="https://via.placeholder.com/300x300?text={{ $product['category'] }}+{{ $i }}" class="card-img-top" alt="{{ $product['category'] }} {{ $i }}">
                    <div class="product-badge position-absolute top-0 start-0 bg-danger text-white p-2">
                        -{{ rand(10, 30) }}%
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#" class="text-decoration-none">{{ $product['category'] }} Modelo {{ $i }}</a>
                    </h5>
                    <div class="mb-2">
                        <div class="small text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-decoration-line-through text-muted small">R$ {{ number_format(rand(2000, 3000), 2, ',', '.') }}</span>
                            <div class="fw-bold text-primary">R$ {{ number_format(rand(1000, 1999), 2, ',', '.' }}</div>
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