<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('layouts/header.css') }}" rel="stylesheet">

</head>


<header class="electrohome-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="header-brand-container">
                    <i class="fas fa-tv header-brand-icon"></i>
                    <div class="header-brand-text">
                        <h1 class="mb-0">ElectroHome</h1>
                        <p class="mb-0">Sua loja de eletrodomésticos de confiança</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header-actions-container">
                    <div class="input-group header-search">
                        <input type="text" class="form-control header-search-input" placeholder="Pesquisar produtos...">
                        <button class="btn btn-light header-search-button" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <div class="header-action-icons">
                        <a href="#" class="header-action-icon">
                            <i class="fas fa-user"></i>
                        </a>
                        <a href="#" class="header-action-icon">
                            <i class="fas fa-heart"></i>
                        </a>
                        <a href="/carrinho" class="header-action-icon position-relative">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-badge">
                                {{ $cartCount }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>

</script>