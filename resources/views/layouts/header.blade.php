<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroHome - Eletrodomésticos Premium</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #34495e;
            --accent-color: #e74c3c;
            --text-color2: #ecf0f1;
            --light-gray: #bdc3c7;
            --dark-gray: #7f8c8d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }

        .header {
            background-color: var(--primary-color);
            color: #ecf0f1;

            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            color: #ecf0f1;
            flex-direction: column;
            max-width: 1400px;
            margin: 0 auto;
        }

        .top-bar {
            flex: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--text-color2);
            font-weight: 700;
            font-size: 1.5rem;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .search-bar {
            flex-grow: 1;
            margin: 0 1.5rem;
            position: relative;

        }

        .search-bar input {
            width: 100%;
            padding: 0.8rem 1rem;
            border: none;
            border-radius: 30px;
            background-color: var(--secondary-color);
            color: var(--text-color);
            font-size: 1rem;
            outline: none;
            padding-right: 3rem;
            transition: background-color 0.3s, color 0.3s;
        }

        .search-bar input::placeholder {
            color: var(--light-gray);
        }

        .search-bar button {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 3rem;
            background: none;
            border: none;
            color: var(--light-gray);
            cursor: pointer;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
        }

        .user-actions {
            display: flex;
            align-items: center;
        }

        .cart-icon,
        .mobile-menu-btn {
            position: relative;
            margin-left: 1.5rem;
            color: var(--text-color);
            font-size: 1.3rem;
            cursor: pointer;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--accent-color);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: bold;
        }

        .mobile-menu-btn {
            display: none;
        }

        .nav-menu {
            display: flex;
            justify-content: space-around;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1rem;
        }

        .nav-menu a {
            color: var(--text-color2);
            text-decoration: none;
            margin: 0 1.2rem;
            font-weight: 500;
            font-size: 1rem;
            transition: color 0.3s;
            position: relative;
        }

        .nav-menu a:hover {
            color: var(--accent-color);
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent-color);
            transition: width 0.3s;
        }

        .nav-menu a:hover::after {
            width: 100%;
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
            top: -11px;
            right: -9px;
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

        /* Responsividade */
        @media (max-width: 992px) {
            .search-bar {
                margin: 0 1rem;
            }

            .nav-menu a {
                margin: 0 0.8rem;
            }
        }

        @media (max-width: 500px) {
            .header {
                padding: 1rem;
            }

            .top-bar {
                flex-wrap: wrap;
            }

            .logo {
                order: 1;
                margin-bottom: 1rem;
            }

            .search-bar {
                order: 3;
                width: 100%;
                margin: 0.5rem 0;
            }

            .user-actions {
                order: 2;
                margin-left: auto;
            }

            .mobile-menu-btn {
                display: block;
            }

            .nav-menu {
                display: none;
                flex-direction: column;
                align-items: center;
                padding: 1rem 0;
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-menu a {
                margin: 0.5rem 0;
                padding: 0.5rem 0;
            }
        }

        @media (max-width: 480px) {
            .logo {
                font-size: 1.2rem;
            }

            .logo img {
                height: 30px;
            }

            .cart-icon,
            .mobile-menu-btn {
                font-size: 1.1rem;
                margin-left: 1rem;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header-container">
            <div class="top-bar">
                <a href="/" class="logo">
                    <i class="fas fa-tv logo-icon"></i>
                    ElectroHome
                </a>

                <div class="search-bar">
                    <form method="GET" action="{{ route('catalog.index') }}" class="search-form">
                        <input type="text" name="q" class="form-control search-input" placeholder="Pesquisar produtos ou marcas..." value="{{ request('q') }}">
                        <button class="search-button" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>

                <div class="user-actions">
                    <div class="action-icons">
                        <a href="/carrinho" class="action-icon position-relative ">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-badge">{{ $cartCount }}</span>
                        </a>
                    </div>
                    <div class="mobile-menu-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>

            </div>

            <nav class="nav-menu">
                <a class="nav-link @if(Route::is('home')) active @endif" href="{{ route('home') }}">Início</a>
                <a class="nav-link @if(Route::is('catalog.index') || Route::is('catalog.category') || Route::is('catalog.product')) active @endif" href="{{ route('catalog.index') }}">Catálogo</a>
                <!--<a href="/carpintaria" class="nav-link">Carpintaria</a>-->
                <a class="nav-link @if(Route::is('about')) active @endif" href="{{ route('about') }}">Sobre Nós</a>
                <a class="nav-link @if(Route::is('contact')) active @endif" href="{{ route('contact') }}">Contactos</a>
            </nav>
        </div>
    </header>

    <script>
        // Menu mobile toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
    </script>
</body>

</html>