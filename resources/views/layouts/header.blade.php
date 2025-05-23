<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('layouts/header.css') }}" rel="stylesheet">
    
</head>

<body>
    <div class="header-container">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center header-row">
                    <!-- Hamburger + Logo -->
                    <div class="col-auto d-md-none">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>

                    <div class="col-md-3 col">
                        <div class="logo-container">
                            <i class="fas fa-tv logo-icon"></i>
                            <div class="logo-text">
                                <h1>ElectroHome</h1>
                                <p>Sua loja de eletrodomésticos de confiança</p>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Search -->
                    <div class="col-md-6 desktop-search">
                        <form method="GET" action="{{ route('catalog.index') }}" class="search-form">
                            <input type="text" name="q" class="form-control search-input" placeholder="Pesquisar produtos ou marcas..." value="{{ request('q') }}">
                            <button class="search-button" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Action Icons -->
                    <div class="col-md-3 col-auto">
                        <div class="action-icons">
                            <a href="/carrinho" class="action-icon position-relative ">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="cart-badge">{{ $cartCount }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Search -->
                <div class="row mobile-search">
                    <div class="col-12">
                        <form method="GET" action="{{ route('catalog.index') }}" class="search-form">
                            <input type="text" name="q" class="form-control search-input" placeholder="Pesquisar produtos..." value="{{ request('q') }}">
                            <button class="search-button" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark main-navbar">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('home')) active @endif" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('catalog.index') || Route::is('catalog.category') || Route::is('catalog.product')) active @endif" href="{{ route('catalog.index') }}">Catálogo</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('about')) active @endif" href="{{ route('about') }}">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('contact')) active @endif" href="{{ route('contact') }}">Contato</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-3">
                        <span class="navbar-contact">
                            <i class="fas fa-phone-alt"></i> (XX) XXXX-XXXX
                        </span>
                        <span class="navbar-contact">
                            <i class="fas fa-envelope"></i> contato@electrohome.com
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>


    <script>
        // Fechar o menu ao clicar em um item (mobile)
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                const navbarCollapse = document.getElementById('navbarNav');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                        toggle: false
                    });
                    bsCollapse.hide();
                }
            });
        });

        // Garantir que o header tenha pelo menos 104px de altura
        document.addEventListener('DOMContentLoaded', function() {
            const headerContainer = document.querySelector('.header-container');
            const headerHeight = headerContainer.offsetHeight;

            if (headerHeight < 104) {
                const remainingHeight = 104 - headerHeight;
                document.querySelector('.main-navbar').style.paddingTop = remainingHeight / 2 + 'px';
                document.querySelector('.main-navbar').style.paddingBottom = remainingHeight / 2 + 'px';
            }
        });
    </script>
</body>

</html>