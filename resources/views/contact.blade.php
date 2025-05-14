@extends('layouts.app')

@section('title', 'Contato - ElectroHome')

@section('content')
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="display-6">Entre em Contato</h1>
        </div>
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contato</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="mb-4">Informações de Contato</h2>
                    <div class="mb-4">
                        <h5 class="mb-3"><i class="fas fa-map-marker-alt text-primary me-2"></i> Endereço</h5>
                        <p>Rua Exemplo, 123 - Centro<br>São Paulo - SP<br>CEP: 01000-000</p>
                    </div>
                    <div class="mb-4">
                        <h5 class="mb-3"><i class="fas fa-phone-alt text-primary me-2"></i> Telefone</h5>
                        <p>(11) 1234-5678<br>(11) 98765-4321 (WhatsApp)</p>
                    </div>
                    <div class="mb-4">
                        <h5 class="mb-3"><i class="fas fa-envelope text-primary me-2"></i> E-mail</h5>
                        <p>contato@electrohome.com<br>suporte@electrohome.com</p>
                    </div>
                    <div>
                        <h5 class="mb-3"><i class="fas fa-clock text-primary me-2"></i> Horário de Funcionamento</h5>
                        <p>Segunda a Sexta: 9:00 - 18:00<br>Sábado: 9:00 - 13:00<br>Domingo: Fechado</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-4">Envie-nos uma Mensagem</h2>
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Assunto</label>
                            <select class="form-select" id="subject">
                                <option selected>Selecione um assunto</option>
                                <option>Dúvida sobre produto</option>
                                <option>Problema com pedido</option>
                                <option>Reclamação</option>
                                <option>Sugestão</option>
                                <option>Outro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card-body p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0754267452926!2d-46.65342658440771!3d-23.565734367638827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1623860416780!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-headset fa-3x text-primary mb-3"></i>
                    <h4>Suporte 24/7</h4>
                    <p class="mb-0">Nossa equipe de suporte está disponível para ajudar a qualquer momento.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-undo fa-3x text-primary mb-3"></i>
                    <h4>Devolução Fácil</h4>
                    <p class="mb-0">Processo de devolução simplificado para sua comodidade.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h4>Compra Segura</h4>
                    <p class="mb-0">Seus dados estão protegidos com nossa tecnologia de criptografia.</p>
                </div>
            </div>
        </div>
    </div>
@endsection