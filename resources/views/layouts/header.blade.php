<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('layouts/header.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<header class="electrohome-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8 col-md-6">
                <div class="header-brand-container">
                    <i class="fas fa-tv header-brand-icon"></i>
                    <div class="header-brand-text">
                        <h1 class="mb-0">ElectroHome</h1>
                        <p class="mb-0 d-none d-md-block">Sua loja de eletrodomésticos de confiança</p>
                    </div>
                </div>
            </div>

            <div class="col-4 col-md-6">
                <div class="header-actions-container">
                    <div class="input-group header-search d-none d-md-flex">
                        <input type="text" class="form-control header-search-input" placeholder="Pesquisar produtos...">
                        <button class="btn btn-light header-search-button" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    
                        <div class="header-action-icons">
                            <a href="/carrinho" class="header-action-icon position-relative">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="cart-badge">{{ $cartCount }}</span>
                            </a>
                        </div>
                   
                </div>
            </div>

        </div>

         <div class="row d-md-none mt-2">
            <div class="col-12">
                <div class="input-group header-search">
                    <input type="text" class="form-control" placeholder="Pesquisar...">
                    <button class="btn btn-light" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>