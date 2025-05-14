@extends('layouts.app')

@section('title', 'Sobre Nós - ElectroHome')

@section('content')
<div class="row mb-5">
    <div class="col-md-6">
        <h1 class="display-4">Sobre a ElectroHome</h1>
        <p class="lead">Sua loja de confiança para eletrodomésticos de qualidade</p>

        <div class="about-content mt-4">
            <p>Fundada em 2010, a ElectroHome surgiu com a missão de trazer os melhores eletrodomésticos para os lares brasileiros, combinando qualidade, preço justo e atendimento excepcional.</p>

            <p>Hoje, somos uma das principais redes de varejo especializada em eletrodomésticos no país, com mais de 50 lojas físicas e um e-commerce robusto que atende todo o território nacional.</p>

            <h3 class="mt-4">Nossa Missão</h3>
            <p>Facilitar o dia a dia das pessoas, oferecendo eletrodomésticos que combinem tecnologia, design e eficiência energética, proporcionando conforto e praticidade para os lares brasileiros.</p>

            <h3 class="mt-4">Nossos Valores</h3>
            <ul>
                <li>Qualidade acima de tudo</li>
                <li>Atendimento personalizado</li>
                <li>Preços justos e competitivos</li>
                <li>Inovação constante</li>
                <li>Sustentabilidade ambiental</li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <img src="https://images.unsplash.com/photo-1520880867055-1e30d1cb001c?auto=format&fit=crop&w=800&q=80" alt="Nossa Loja" class="img-fluid rounded">

        <div class="card mt-4">
            <div class="card-body">
                <h4>Nossos Números</h4>
                <div class="row text-center mt-3">
                    <div class="col-4">
                        <div class="display-6 text-primary">12+</div>
                        <p>Anos no mercado</p>
                    </div>
                    <div class="col-4">
                        <div class="display-6 text-primary">50+</div>
                        <p>Lojas físicas</p>
                    </div>
                    <div class="col-4">
                        <div class="display-6 text-primary">500K+</div>
                        <p>Clientes satisfeitos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="team-section bg-light py-5 mb-5 rounded">
    <div class="container">
        <h2 class="text-center mb-5">Conheça Nossa Equipe</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card team-card h-100">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top" alt="Diretor Comercial">
                    <div class="card-body text-center">
                        <h5 class="card-title">Carlos Silva</h5>
                        <p class="text-muted">Diretor Comercial</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card team-card h-100">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" class="card-img-top" alt="Gerente de Vendas">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ana Oliveira</h5>
                        <p class="text-muted">Gerente de Vendas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card team-card h-100">
                    <img src="https://randomuser.me/api/portraits/men/65.jpg" class="card-img-top" alt="Gerente de Marketing">
                    <div class="card-body text-center">
                        <h5 class="card-title">Marcos Santos</h5>
                        <p class="text-muted">Gerente de Marketing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card team-card h-100">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" class="card-img-top" alt="Gerente de Atendimento">
                    <div class="card-body text-center">
                        <h5 class="card-title">Juliana Costa</h5>
                        <p class="text-muted">Gerente de Atendimento</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section mb-5">
    <h2 class="text-center mb-5">O Que Nossos Clientes Dizem</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="mb-3 text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="card-text">"Comprei uma geladeira na ElectroHome e o atendimento foi excelente. O produto chegou antes do prazo e em perfeito estado."</p>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex align-items-center">
                        <img src="https://randomuser.me/api/portraits/men/12.jpg" alt="Cliente" class="rounded-circle me-3" width="50">
                        <div>
                            <h6 class="mb-0">Roberto Almeida</h6>
                            <small class="text-muted">São Paulo - SP</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="mb-3 text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="card-text">"Ótima experiência de compra. A lavadora que comprei tem ótimo desempenho e a equipe me ajudou a escolher o melhor modelo para minhas necessidades."</p>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex align-items-center">
                        <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="Cliente" class="rounded-circle me-3" width="50">
                        <div>
                            <h6 class="mb-0">Fernanda Lima</h6>
                            <small class="text-muted">Rio de Janeiro - RJ</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="mb-3 text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="card-text">"Sempre compro meus eletrodomésticos na ElectroHome. Preços competitivos e ótimo atendimento pós-venda."</p>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex align-items-center">
                        <img src="https://randomuser.me/api/portraits/men/34.jpg" alt="Cliente" class="rounded-circle me-3" width="50">
                        <div>
                            <h6 class="mb-0">Pedro Henrique</h6>
                            <small class="text-muted">Belo Horizonte - MG</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection