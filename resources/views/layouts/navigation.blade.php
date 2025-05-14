<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNavbar" style="position:fixed; top:104px; left:0; width:100%; z-index:1035;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('home')) active  @endif" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link @if(Route::is('catalog.index') || Route::is('catalog.category') || Route::is('catalog.product')) active @endif" href="{{ route('catalog.index') }}">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('about')) active  @endif" href="{{ route('about') }}">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('contact')) active  @endif" href="{{ route('contact') }}">Contato</a>
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