<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Woodcraft | Carpintaria Premium</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;400;600&display=swap">
    <style>
        :root {
            --primary: #8B5A2B;
            --primary-dark: #5D3A1B;
            --secondary: #E8D8C3;
            --light: #F9F5F0;
            --dark: #2A2118;
            --accent: #C4A57A;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Raleway', sans-serif;
            color: var(--dark);
            background-color: var(--light);
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        /* Header */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
            padding: 15px 0;
            transition: all 0.3s ease;
        }

        .header-scrolled {
            padding: 10px 0;
            background-color: rgba(255, 255, 255, 0.98);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo-icon {
            margin-right: 10px;
            font-size: 32px;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            font-size: 16px;
            transition: color 0.3s;
            position: relative;
        }

        nav ul li a:hover {
            color: var(--primary);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: -5px;
            left: 0;
            transition: width 0.3s;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .cta-button {
            background-color: var(--primary);
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid var(--primary);
        }

        .cta-button:hover {
            background-color: transparent;
            color: var(--primary);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(42, 33, 24, 0.6), rgba(42, 33, 24, 0.6)), url('https://images.unsplash.com/photo-1606744837616-56c9a5c6a6eb') center/cover no-repeat;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            padding-top: 80px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 64px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .secondary-button {
            background-color: transparent;
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid white;
        }

        .secondary-button:hover {
            background-color: white;
            color: var(--dark);
        }

        /* About Section */
        .section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 40px;
            color: var(--primary-dark);
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: var(--accent);
            bottom: -15px;
            left: 25%;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 50px;
            padding: 0 30px;
        }

        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        .about-content {
            flex: 1;
        }

        .about-content h3 {
            font-size: 32px;
            margin-bottom: 20px;
            color: var(--primary-dark);
        }

        .about-content p {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .signature {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            margin-top: 30px;
            color: var(--primary);
        }

        /* Services Section */
        .services {
            background-color: var(--secondary);
        }

        .services-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .service-image {
            height: 200px;
            overflow: hidden;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .service-card:hover .service-image img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
        }

        .service-content h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--primary-dark);
        }

        .service-content p {
            margin-bottom: 20px;
            font-size: 15px;
        }

        .learn-more {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }

        .learn-more i {
            margin-left: 5px;
            transition: transform 0.3s;
        }

        .learn-more:hover i {
            transform: translateX(5px);
        }

        /* Portfolio Section */
        .portfolio-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
        }

        .portfolio-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .filter-button {
            background: none;
            border: none;
            padding: 8px 20px;
            font-family: 'Raleway', sans-serif;
            font-weight: 600;
            color: var(--dark);
            cursor: pointer;
            transition: all 0.3s;
            border-radius: 30px;
        }

        .filter-button.active,
        .filter-button:hover {
            background-color: var(--primary);
            color: white;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .portfolio-item {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 350px;
        }

        .portfolio-image {
            width: 100%;
            height: 100%;
        }

        .portfolio-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(139, 90, 43, 0.9);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s;
            padding: 20px;
            text-align: center;
            color: white;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-item:hover .portfolio-image img {
            transform: scale(1.1);
        }

        .portfolio-overlay h3 {
            font-size: 24px;
            margin-bottom: 10px;
            transform: translateY(20px);
            transition: transform 0.3s;
        }

        .portfolio-overlay p {
            transform: translateY(20px);
            transition: transform 0.3s 0.1s;
            margin-bottom: 20px;
        }

        .portfolio-overlay a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 8px 20px;
            border: 1px solid white;
            border-radius: 30px;
            transform: translateY(20px);
            transition: all 0.3s 0.2s;
        }

        .portfolio-item:hover .portfolio-overlay h3,
        .portfolio-item:hover .portfolio-overlay p,
        .portfolio-item:hover .portfolio-overlay a {
            transform: translateY(0);
        }

        .portfolio-overlay a:hover {
            background-color: white;
            color: var(--primary);
        }

        /* Testimonials Section */
        .testimonials {
            background-color: var(--secondary);
        }

        .testimonials-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
        }

        .testimonial-slider {
            position: relative;
        }

        .testimonial-slide {
            background-color: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            margin: 0 15px;
        }

        .testimonial-quote {
            font-size: 22px;
            font-style: italic;
            color: var(--dark);
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .testimonial-author {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .author-image {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 15px;
            border: 3px solid var(--accent);
        }

        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-name {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 5px;
        }

        .author-position {
            color: var(--dark);
            font-size: 14px;
        }

        /* Contact Section */
        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
            padding: 0 30px;
        }

        .contact-info h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: var(--primary-dark);
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .contact-icon {
            font-size: 20px;
            color: var(--primary);
            margin-right: 15px;
            margin-top: 3px;
        }

        .contact-text h4 {
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--primary-dark);
        }

        .contact-text p,
        .contact-text a {
            color: var(--dark);
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-text a:hover {
            color: var(--primary);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-dark);
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-link:hover {
            background-color: var(--primary);
            color: white;
        }

        .contact-form .form-group {
            margin-bottom: 20px;
        }

        .contact-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--primary-dark);
        }

        .contact-form input,
        .contact-form textarea,
        .contact-form select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Raleway', sans-serif;
            transition: border-color 0.3s;
        }

        .contact-form input:focus,
        .contact-form textarea:focus,
        .contact-form select:focus {
            border-color: var(--primary);
            outline: none;
        }

        .contact-form textarea {
            min-height: 150px;
            resize: vertical;
        }

        .submit-button {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 16px;
        }

        .submit-button:hover {
            background-color: var(--primary-dark);
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 70px 0 30px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            padding: 0 30px;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            display: inline-block;
        }

        .footer-about p {
            margin-bottom: 20px;
            color: #ccc;
        }

        .footer-links h4,
        .footer-newsletter h4 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h4::after,
        .footer-newsletter h4::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 2px;
            background: var(--accent);
            bottom: 0;
            left: 0;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .newsletter-form {
            display: flex;
            margin-bottom: 20px;
        }

        .newsletter-form input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: 30px 0 0 30px;
            font-family: 'Raleway', sans-serif;
        }

        .newsletter-form button {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 0 30px 30px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .newsletter-form button:hover {
            background-color: var(--primary-dark);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #999;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 48px;
            }

            .about-container {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                padding: 15px;
            }

            .logo {
                margin-bottom: 15px;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 10px 0;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }

            .section-title h2 {
                font-size: 32px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="header-container">
            <a href="#" class="logo">
                <i class="fas fa-tree logo-icon"></i>
                Artisan Woodcraft
            </a>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#portfolio">Portfólio</a></li>
                    <li><a href="#contact">Contato</a></li>
                    <li><a href="#" class="cta-button">Orçamento</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Excelência em Carpintaria Artesanal</h1>
            <p>Criamos peças únicas e personalizadas que transformam espaços com elegância e qualidade incomparáveis.</p>
            <div class="hero-buttons">
                <a href="#portfolio" class="secondary-button">Ver Portfólio</a>
                <a href="#contact" class="cta-button">Solicitar Orçamento</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="section-title">
            <h2>Nossa História</h2>
        </div>
        <div class="about-container">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115" alt="Oficina de carpintaria">
            </div>
            <div class="about-content">
                <h3>Artesanato com Tradição</h3>
                <p>Fundada em 1995, a Artisan Woodcraft nasceu da paixão por transformar madeira em obras de arte funcionais. Com três gerações de conhecimento acumulado, combinamos técnicas tradicionais com design contemporâneo.</p>
                <p>Cada peça que criamos conta uma história - desde a seleção cuidadosa da madeira até os detalhes finais do acabamento. Nossos mestres carpinteiros dedicam horas de trabalho meticuloso para garantir perfeição em cada projeto.</p>
                <p>Nosso compromisso com a sustentabilidade nos leva a usar apenas madeiras de fontes responsáveis e técnicas de acabamento ecológicas, garantindo beleza que perdura sem comprometer o meio ambiente.</p>
                <p class="signature">— João Silva, Fundador</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services" id="services">
        <div class="section-title">
            <h2>Nossos Serviços</h2>
        </div>
        <div class="services-container">
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7" alt="Móveis sob medida">
                </div>
                <div class="service-content">
                    <h3>Móveis Sob Medida</h3>
                    <p>Criação de móveis exclusivos projetados para atender suas necessidades específicas e complementar perfeitamente seu espaço.</p>
                    <a href="#" class="learn-more">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91" alt="Reformas e Restaurações">
                </div>
                <div class="service-content">
                    <h3>Reformas e Restaurações</h3>
                    <p>Restauramos móveis antigos e peças arquitetônicas preservando seu charme original enquanto atualizamos sua funcionalidade.</p>
                    <a href="#" class="learn-more">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1606744837616-56c9a5c6a6eb" alt="Design de Interiores">
                </div>
                <div class="service-content">
                    <h3>Design de Interiores</h3>
                    <p>Serviço completo de design que integra nossas peças artesanais em projetos residenciais e comerciais harmoniosos.</p>
                    <a href="#" class="learn-more">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section" id="portfolio">
        <div class="section-title">
            <h2>Nossos Trabalhos</h2>
        </div>
        <div class="portfolio-container">
            <div class="portfolio-filter">
                <button class="filter-button active" data-filter="all">Todos</button>
                <button class="filter-button" data-filter="residencial">Residencial</button>
                <button class="filter-button" data-filter="comercial">Comercial</button>
                <button class="filter-button" data-filter="restauracao">Restauração</button>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item" data-category="residencial">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace" alt="Projeto Residencial">
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Cozinha Contemporânea</h3>
                        <p>Móveis em carvalho branco com detalhes em metal escovado</p>
                        <a href="#">Ver Detalhes</a>
                    </div>
                </div>
                <div class="portfolio-item" data-category="comercial">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692" alt="Projeto Comercial">
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Restaurante Gourmet</h3>
                        <p>Mesas e bancadas em madeira maciça com acabamento resistente</p>
                        <a href="#">Ver Detalhes</a>
                    </div>
                </div>
                <div class="portfolio-item" data-category="residencial">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1600210492493-0946911123ea" alt="Biblioteca Personalizada">
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Biblioteca Personalizada</h3>
                        <p>Estantes em nogueira com sistema de iluminação integrado</p>
                        <a href="#">Ver Detalhes</a>
                    </div>
                </div>
                <div class="portfolio-item" data-category="restauracao">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267" alt="Restauração de Móvel Antigo">
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Armário Francês</h3>
                        <p>Restauração completa de peça do século XIX</p>
                        <a href="#">Ver Detalhes</a>
                    </div>
                </div>
                <div class="portfolio-item" data-category="comercial">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2" alt="Recepção Corporativa">
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Recepção Corporativa</h3>
                        <p>Balcão em freijó com detalhes em aço inoxidável</p>
                        <a href="#">Ver Detalhes</a>
                    </div>
                </div>
                <div class="portfolio-item" data-category="residencial">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1583845112203-4541a9c5f500" alt="Quarto Infantil">
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Quarto Infantil</h3>
                        <p>Conjunto completo em pinho tratado com acabamento atóxico</p>
                        <a href="#">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials">
        <div class="section-title">
            <h2>Depoimentos</h2>
        </div>
        <div class="testimonials-container">
            <div class="testimonial-slider">
                <div class="testimonial-slide">
                    <p class="testimonial-quote">"A Artisan Woodcraft transformou completamente nossa sala de estar. A qualidade do trabalho é excepcional e a atenção aos detalhes impressionante. Cinco anos depois, nossos móveis ainda parecem novos."</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Ana Rodrigues">
                        </div>
                        <div>
                            <h4 class="author-name">Ana Rodrigues</h4>
                            <p class="author-position">Arquiteta de Interiores</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="section-title">
            <h2>Entre em Contato</h2>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Vamos Conversar</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Endereço</h4>
                            <p>Rua dos Artesãos, 123<br>Bairro das Oficinas<br>São Paulo/SP</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Telefone</h4>
                            <p><a href="tel:+5511999999999">(11) 99999-9999</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p><a href="mailto:contato@artisanwoodcraft.com">contato@artisanwoodcraft.com</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Horário</h4>
                            <p>Segunda a Sexta: 9h às 18h<br>Sábado: 10h às 14h</p>
                        </div>
                    </div>
                </div>
                <h3 style="margin-top: 40px;">Siga-nos</h3>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="contact-form">
                <form id="form-orcamento">
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="service">Serviço de Interesse</label>
                        <select id="service" name="service">
                            <option value="">Selecione um serviço</option>
                            <option value="moveis">Móveis Sob Medida</option>
                            <option value="reformas">Reformas e Restaurações</option>
                            <option value="design">Design de Interiores</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-button">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <a href="#" class="footer-logo">Artisan Woodcraft</a>
                <p>Especialistas em carpintaria premium, criando peças únicas que unem tradição e inovação desde 1995.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Links Rápidos</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Sobre Nós</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#portfolio">Portfólio</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Contato</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Rua dos Marceneiros, 123 - São Paulo/SP</li>
                    <li><i class="fas fa-phone"></i> (11) 9999-8888</li>
                    <li><i class="fas fa-envelope"></i> contato@artisanwoodcraft.com.br</li>
                    <li><i class="fas fa-clock"></i> Seg-Sex: 9h às 18h</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2023 Artisan Woodcraft. Todos os direitos reservados.</p>
            <div class="footer-legal">
                <a href="#">Política de Privacidade</a>
                <a href="#">Termos de Serviço</a>
            </div>
        </div>
    </footer>