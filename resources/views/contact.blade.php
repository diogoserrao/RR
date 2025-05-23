@extends('layouts.app')

@section('title', 'Contato - ElectroHome')

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('contact.css') }}" rel="stylesheet">
</head>

@section('content')
<div class="contact-spacing"></div>
<div class="contact-header-row">
    <div class="contact-header-col">
        <h1 class="contact-title">Entre em Contacto</h1>
    </div>
    <div class="contact-header-col contact-header-col-right">
        <nav aria-label="breadcrumb">
             <ol class="breadcrumb justify-content-md-end">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sobre Nós</li>
            </ol>
        </nav>
    </div>
</div>

<div class="contact-main-row">
    <div class="contact-info-col">
        <div class="contact-card">
            <div class="contact-card-body">
                <h2 class="contact-section-title">Informações de Contacto</h2>
                <div class="contact-info-block">
                    <h5><i class="fas fa-map-marker-alt contact-icon"></i> Morada</h5>
                    <p>Rua Exemplo, 123 - Centro<br>Lisboa<br>Código Postal: 1000-000</p>
                </div>
                <div class="contact-info-block">
                    <h5><i class="fas fa-phone-alt contact-icon"></i> Telefone</h5>
                    <p>214 123 567<br>918 234 567 (WhatsApp)</p>
                </div>
                <div class="contact-info-block">
                    <h5><i class="fas fa-envelope contact-icon"></i> E-mail</h5>
                    <p>contacto@electrohome.com<br>suporte@electrohome.com</p>
                </div>
                <div class="contact-info-block">
                    <h5><i class="fas fa-clock contact-icon"></i> Horário de Funcionamento</h5>
                    <p>Segunda a Sexta: 9:00 - 18:00<br>Sábado: 9:00 - 13:00<br>Domingo: Encerrado</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form-col">
        <div class="contact-card">
            <div class="contact-card-body">
                <h2 class="contact-section-title">Envie-nos uma Mensagem</h2>
                <form id="contactForm">
                    <div class="contact-form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" required>
                    </div>
                    <div class="contact-form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" required>
                    </div>
                    <div class="contact-form-group">
                        <label for="phone">Telemóvel</label>
                        <input type="tel" id="phone">
                    </div>
                    <div class="contact-form-group">
                        <label for="subject">Assunto</label>
                        <select id="subject">
                            <option selected>Selecione um assunto</option>
                            <option>Dúvida sobre produto</option>
                            <option>Problema com encomenda</option>
                            <option>Reclamação</option>
                            <option>Sugestão</option>
                            <option>Outro</option>
                        </select>
                    </div>
                    <div class="contact-form-group">
                        <label for="message">Mensagem</label>
                        <textarea id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="contact-btn">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="contact-map-card">
    <div class="contact-card-body contact-map-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2360.854964801163!2d-17.029228471021156!3d32.67924150885687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc60593dddc4e4d1%3A0x6bc084bb29f45cda!2sRaimundo%20Ramos%20-%20Carpintaria%20e%20Eletrodom%C3%A9sticos!5e1!3m2!1spt-PT!2spt!4v1747990061309!5m2!1spt-PT!2spt" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<div class="contact-benefits-row">
    <div class="contact-benefit-col">
        <div class="contact-card">
            <div class="contact-card-body contact-benefit-body">
                <i class="fas fa-headset contact-benefit-icon"></i>
                <h4>Apoio ao Cliente 24/7</h4>
                <p>A nossa equipa de apoio está disponível para ajudar a qualquer momento.</p>
            </div>
        </div>
    </div>
    <div class="contact-benefit-col">
        <div class="contact-card">
            <div class="contact-card-body contact-benefit-body">
                <i class="fas fa-undo contact-benefit-icon"></i>
                <h4>Devolução Fácil</h4>
                <p>Processo de devolução simples para sua comodidade.</p>
            </div>
        </div>
    </div>
    <div class="contact-benefit-col">
        <div class="contact-card">
            <div class="contact-card-body contact-benefit-body">
                <i class="fas fa-shield-alt contact-benefit-icon"></i>
                <h4>Compra Segura</h4>
                <p>Os seus dados estão protegidos com a nossa tecnologia de encriptação.</p>
            </div>
        </div>
    </div>
</div>
@endsection