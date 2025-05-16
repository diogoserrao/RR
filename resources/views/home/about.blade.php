@extends('layouts.app')

@section('title', 'Sobre Nós - ElectroHome')

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('home/about.css') }}" rel="stylesheet">

</head>

@section('content')
<!-- ====== ESPAÇO PARA O HEADER FIXO ====== -->
<div style="margin-top: 80px;"></div>

<!-- ====== HEADER E BREADCRUMB ====== -->
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

<!-- ====== HISTÓRIA E VALORES ====== -->
<div class="row mb-5">
    <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="https://media.timeout.com/images/105396679/1536/1152/image.jpg" alt="Nossa Loja" class="about-img-loja">
    </div>
    <div class="col-lg-6">
        <h2 class="about-h2">Nossa História</h2>
        <p>A ElectroHome nasceu em 2008 com o objetivo de trazer os melhores eletrodomésticos para a região, com preços justos e atendimento de qualidade.</p>
        <p>Começamos como uma pequena loja de bairro e hoje somos referência no segmento, com 5 lojas físicas e um e-commerce que atende todo o país.</p>
        <p>Acreditamos que a tecnologia deve facilitar a vida das pessoas, e por isso selecionamos cuidadosamente cada produto que oferecemos em nossa loja.</p>
        
        <h3 class="about-h3">Nossa Missão</h3>
        <p>Proporcionar conforto e praticidade para o seu lar, oferecendo produtos de qualidade que tornam seu dia a dia mais fácil e agradável.</p>
        
        <h3 class="about-h3">Nossos Valores</h3>
        <ul class="about-valores-list">
            <li><i class="fas fa-check-circle about-icon"></i> Qualidade acima de tudo</li>
            <li><i class="fas fa-check-circle about-icon"></i> Atendimento personalizado</li>
            <li><i class="fas fa-check-circle about-icon"></i> Transparência nas relações</li>
            <li><i class="fas fa-check-circle about-icon"></i> Compromisso com o cliente</li>
            <li><i class="fas fa-check-circle about-icon"></i> Inovação constante</li>
        </ul>
    </div>
</div>

<!-- ====== NÚMEROS DA EMPRESA ====== -->
<div class="about-numeros mb-5">
    <div class="row">
        <div class="col-md-4 about-numero-item">
            <div class="about-numero">30+</div>
            <h4>Anos no mercado</h4>
        </div>
        <div class="col-md-4 about-numero-item">
            <div class="about-numero">5000+</div>
            <h4>Clientes satisfeitos</h4>
        </div>
        <div class="col-md-4 about-numero-item">
            <div class="about-numero">20+</div>
            <h4>Marcas parceiras</h4>
        </div>
    </div>
</div>

<!-- ====== EQUIPE ====== -->
<h2 class="about-equipe-title">Nossa Equipe</h2>
<div class="row">
    @foreach([
        ['name' => 'João Silva', 'role' => 'CEO e Fundador', 'photo' => 'https://via.placeholder.com/300x300?text=João+Silva'],
        ['name' => 'Maria Souza', 'role' => 'Gerente Comercial', 'photo' => 'https://via.placeholder.com/300x300?text=Maria+Souza'],
        ['name' => 'Carlos Oliveira', 'role' => 'Gerente de Vendas', 'photo' => 'https://via.placeholder.com/300x300?text=Carlos+Oliveira'],
        ['name' => 'Ana Pereira', 'role' => 'Atendimento ao Cliente', 'photo' => 'https://via.placeholder.com/300x300?text=Ana+Pereira']
    ] as $member)
    <div class="col-md-3 mb-4">
        <div class="about-card-equipe">
            <img src="{{ $member['photo'] }}" class="about-equipe-img" alt="{{ $member['name'] }}">
            <div class="about-card-body">
                <h5 class="about-card-title">{{ $member['name'] }}</h5>
                <p class="about-card-role">{{ $member['role'] }}</p>
                <div class="about-equipe-social">
                    <a href="#" class="about-social-link"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="about-social-link"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection