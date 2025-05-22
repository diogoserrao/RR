<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Estilos alinhados com o tema fornecido */
        .header-container {
            background: #2c3e50;
            /* Cor sólida sem transparência */
            color: white;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            min-height: 104px;
            /* Altura mínima garantida */
            display: flex;
            flex-direction: column;
        }

        .top-header {
            padding: 15px 0;
            background: #2c3e50;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            color: #adb5bd;
            font-size: 2rem;
        }

        .logo-text h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: white;
            margin: 0;
            line-height: 1.2;
        }

        .logo-text p {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 0.8rem;
            color: #adb5bd;
            margin: 0;
            display: none;
        }

        .search-form {
            position: relative;
            flex-grow: 1;
            max-width: 600px;
            margin: 0 auto;
        }

        .search-input {
            border-radius: 50px;
            padding: 8px 20px;
            border: 1px solid #495057;
            background-color: #343a40;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
        }

        .search-input::placeholder {
            color: #adb5bd;
        }

        .search-input:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            background-color: rgb(255, 255, 255);
            color: white;
        }

        .search-button {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background: #0d6efd;
            color: white;
            border: none;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .search-button:hover {
            background: #0b5ed7;
        }

        .action-icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .action-icon {
            color: white;
            font-size: 1.3rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .action-icon:hover {
            color: #adb5bd;
            transform: translateY(-2px);
        }

        .cart-badge {
            position: absolute;
            top: -5px;
            right: -8px;
            background: #dc3545;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
        }

        .mobile-search {
            margin-top: 15px;
            display: none;
            padding: 0 15px 15px;
        }

        .navbar-toggler {
            border: none;
            padding: 0;
            font-size: 1.5rem;
            color: white;
            background: transparent;
            transition: all 0.3s ease;
        }

        .navbar-toggler:hover {
            color: #adb5bd;
        }

        .main-navbar {
            background: #212529 !important;
            /* Cor sólida sem transparência */
            box-shadow: none;
            border-top: 1px solid #343a40;
        }

        .nav-link {
            color: white !important;
            padding: 0.5rem 1rem !important;
            border-radius: 0.25rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: all 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.1) !important;
        }

        .navbar-contact {
            color: #adb5bd;
            font-size: 0.9rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: all 0.3s ease;
        }

        .navbar-contact:hover {
            color: white;
        }

        .navbar-contact i {
            margin-right: 5px;
            color: #adb5bd;
        }

        @media (min-width: 768px) {
            .logo-text p {
                display: block;
            }

            .mobile-search {
                display: none !important;
            }

            .header-container {
                flex-direction: column;
            }
        }

        @media (max-width: 767px) {
            .desktop-search {
                display: none !important;
            }

            .mobile-search {
                display: block;
            }

            .action-icons {
                margin-left: auto;
            }

            .logo-container {
                gap: 5px;
            }

            .logo-icon {
                font-size: 1.5rem;
            }

            .logo-text h1 {
                font-size: 1.2rem;
            }

            .header-row {
                flex-wrap: nowrap;
            }

            .navbar-contact {
                display: none;
            }
        }
    </style>
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