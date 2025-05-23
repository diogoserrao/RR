@extends('layouts.app')

@section('title', 'Sobre Nós - ElectroHome')

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('home/about.css') }}" rel="stylesheet">

</head>

@section('content')
<!-- ====== ESPAÇO PARA O HEADER FIXO ====== -->
<div style="margin-top: 30px;"></div>

<!-- ====== HEADER E BREADCRUMB ====== -->
<div class="row mb-5">
    <div class="col-md-6">
        <h1 class="display-4">Sobre a ElectroHome</h1>
        <p class="lead">A sua loja de eletrodomésticos de confiança desde 2008</p>
    </div>
    <div class="col-md-6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-md-end">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sobre Nós</li>
            </ol>
        </nav>
    </div>
</div>

<!-- ====== HISTÓRIA E VALORES ====== -->
<div class="row mb-5">
    <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="https://media.timeout.com/images/105396679/1536/1152/image.jpg" alt="A Nossa Loja" class="about-img-loja">
    </div>
    <div class="col-lg-6">
        <h2 class="about-h2">A Nossa História</h2>
        <p>A ElectroHome nasceu em 2008 com o objetivo de trazer os melhores eletrodomésticos para a região, com preços justos e atendimento de qualidade.</p>
        <p>Começámos como uma pequena loja de bairro e hoje somos uma referência no setor, com 5 lojas físicas e uma loja online que serve todo o país.</p>
        <p>Acreditamos que a tecnologia deve facilitar a vida das pessoas, e por isso selecionamos cuidadosamente cada produto que oferecemos na nossa loja.</p>
        
        <h3 class="about-h3">A Nossa Missão</h3>
        <p>Proporcionar conforto e praticidade ao seu lar, oferecendo produtos de qualidade que tornam o seu dia a dia mais fácil e agradável.</p>
        
        <h3 class="about-h3">Os Nossos Valores</h3>
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

@endsection