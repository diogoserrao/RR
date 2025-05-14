@extends('layouts.app')

@section('title', 'Categoria - ElectroHome')

@section('content')
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="display-6">Categoria: {{ ucfirst($category) }}</h1>
        </div>
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('catalog.index') }}">Catálogo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($category) }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-3">
            {{--<!-- Filtros (mesmo conteúdo do catalog/index.blade.php) -->
            <!-- @include('catalog.partials.filters')-->--}}
        </div>
        
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    Mostrando <span class="fw-bold">1-8</span> de <span class="fw-bold">32</span> produtos em {{ $category }}
                </div>
                <div class="d-flex align-items-center">
                    <label for="sortBy" class="me-2 mb-0">Ordenar por:</label>
                    <select class="form-select form-select-sm" style="width: auto;" id="sortBy">
                        <option selected>Relevância</option>
                        <option>Menor Preço</option>
                        <option>Maior Preço</option>
                        <option>Mais Vendidos</option>
                        <option>Melhor Avaliados</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                @for($i = 1; $i <= 8; $i++)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 product-card">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x300?text={{ ucfirst($category) }}+{{ $i }}" class="card-img-top" alt="{{ ucfirst($category) }} {{ $i }}">
                            <div class="product-actions position-absolute top-0 end-0 p-2">
                                <button class="btn btn-sm btn-light rounded-circle mb-2">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="btn btn-sm btn-light rounded-circle">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            @if($i % 3 == 0)
                            <div class="product-badge position-absolute top-0 start-0 bg-danger text-white p-2">
                                -{{ rand(10, 30) }}%
                            </div>
                            @endif
                        </div>
                        <div class="card-body">
                            @if($i % 4 == 0)
                            <div class="mb-2">
                                <span class="badge bg-secondary">Novo</span>
                            </div>
                            @endif
                            <h5 class="card-title">
                                <a href="{{ route('catalog.product', ['category' => $category, 'id' => $i]) }}" class="text-decoration-none">
                                    {{ ucfirst($category) }} Modelo {{ $i }}
                                </a>
                            </h5>
                            <div class="mb-2">
                                <div class="small text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="small text-muted">({{ rand(5, 50) }} avaliações)</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    @if($i % 3 == 0)
                                    <span class="text-decoration-line-through text-muted small">R$ {{ number_format(rand(2000, 3000), 2, ',', '.') }}</span>
                                    @endif
                                    <div class="fw-bold text-primary">R$ {{ number_format (rand(1000, 2999), 2, ',', '.') }}</div>
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
            
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Próximo</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .product-card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .product-actions button {
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .product-card:hover .product-actions button {
        opacity: 1;
    }
</style>
@endpush