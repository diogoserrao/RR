<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Categorias
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('catalog.category', 'geladeiras') }}">Geladeiras</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalog.category', 'fogões') }}">Fogões</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalog.category', 'lavadoras') }}">Lavadoras</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalog.category', 'microondas') }}">Microondas</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalog.category', 'ar-condicionado') }}">Ar Condicionado</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contato</a>
                </li>
            </ul>
            <div class="d-flex">
                <span class="navbar-text text-white me-3">
                    <i class="fas fa-phone-alt me-2"></i> (XX) XXXX-XXXX
                </span>
                <span class="navbar-text text-white">
                    <i class="fas fa-envelope me-2"></i> contato@electrohome.com
                </span>
            </div>
        </div>
    </div>
</nav>