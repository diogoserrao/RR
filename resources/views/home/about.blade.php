@extends('layouts.app')

@section('title', 'Sobre Nós - ElectroHome')

@section('content')
    <div class="row mb-5">
        <div class="col-md-6">
            <h1 class="display-4">Sobre a ElectroHome</h1>
            <p class="lead">Sua loja de eletrodomésticos de confiança desde 2008</p>
        </div>
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sobre Nós</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="https://via.placeholder.com/800x600?text=Loja+ElectroHome" alt="Nossa Loja" class="img-fluid rounded shadow">
        </div>
        <div class="col-lg-6">
            <h2 class="mb-4">Nossa História</h2>
            <p>A ElectroHome nasceu em 2008 com o objetivo de trazer os melhores eletrodomésticos para a região, com preços justos e atendimento de qualidade.</p>
            <p>Começamos como uma pequena loja de bairro e hoje somos referência no segmento, com 5 lojas físicas e um e-commerce que atende todo o país.</p>
            <p>Acreditamos que a tecnologia deve facilitar a vida das pessoas, e por isso selecionamos cuidadosamente cada produto que oferecemos em nossa loja.</p>
            
            <h3 class="mt-5 mb-3">Nossa Missão</h3>
            <p>Proporcionar conforto e praticidade para o seu lar, oferecendo produtos de qualidade que tornam seu dia a dia mais fácil e agradável.</p>
            
            <h3 class="mt-5 mb-3">Nossos Valores</h3>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Qualidade acima de tudo</li>
                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Atendimento personalizado</li>
                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Transparência nas relações</li>
                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Compromisso com o cliente</li>
                <li><i class="fas fa-check-circle text-primary me-2"></i> Inovação constante</li>
            </ul>
        </div>
    </div>

    <div class="bg-light p-5 rounded mb-5">
        <div class="row">
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <div class="display-4 text-primary mb-2">15+</div>
                <h4>Anos no mercado</h4>
            </div>
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <div class="display-4 text-primary mb-2">5000+</div>
                <h4>Clientes satisfeitos</h4>
            </div>
            <div class="col-md-4 text-center">
                <div class="display-4 text-primary mb-2">20+</div>
                <h4>Marcas parceiras</h4>
            </div>
        </div>
    </div>

    <h2 class="text-center mb-5">Nossa Equipe</h2>
    <div class="row">
        @foreach([
            ['name' => 'João Silva', 'role' => 'CEO e Fundador', 'photo' => 'https://via.placeholder.com/300x300?text=João+Silva'],
            ['name' => 'Maria Souza', 'role' => 'Gerente Comercial', 'photo' => 'https://via.placeholder.com/300x300?text=Maria+Souza'],
            ['name' => 'Carlos Oliveira', 'role' => 'Gerente de Vendas', 'photo' => 'https://via.placeholder.com/300x300?text=Carlos+Oliveira'],
            ['name' => 'Ana Pereira', 'role' => 'Atendimento ao Cliente', 'photo' => 'https://via.placeholder.com/300x300?text=Ana+Pereira']
        ] as $member)
        <div class="col-md-3 mb-4">
            <div class="card border-0 text-center">
                <img src="{{ $member['photo'] }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;" alt="{{ $member['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $member['name'] }}</h5>
                    <p class="card-text text-muted">{{ $member['role'] }}</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-primary mx-2"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-primary mx-2"><i class="fab fa-twitter fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection