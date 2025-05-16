@extends('layouts.app')

@section('title', 'Carrinho de Compras - ElectroHome')

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('cart.css') }}" rel="stylesheet">

</head>

@section('content')
<div style="margin-top: 80px;"></div>

<!-- ====== HEADER DO CARRINHO ====== -->
<div class="cart-header">
    <div>
        <h1 class="cart-title">Carrinho de Compras</h1>
    </div>
    <nav class="cart-breadcrumb">
        <a href="{{ route('home') }}">Home</a> &gt; <span>Carrinho</span>
    </nav>
</div>
<!-- ====== /HEADER DO CARRINHO ====== -->

@if(count($cartItems) > 0)
<div class="cart-main">
    <!-- ====== LISTA DE PRODUTOS NO CARRINHO ====== -->
    <div class="cart-products">
        <div class="cart-card">
            <div class="cart-card-header">
                <h5>Seus Itens ({{ count($cartItems) }})</h5>
            </div>
            <div class="cart-card-body">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                        <tr>
                            <td>
                                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="cart-img">
                            </td>
                            <td>
                                <div class="cart-prod-name">{{ $item['name'] }}</div>
                                <div class="cart-prod-brand">{{ $item['brand'] }}</div>
                                <div class="cart-prod-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <=$item['rating'])
                                        <i class="fas fa-star"></i>
                                        @else
                                        <i class="far fa-star"></i>
                                        @endif
                                        @endfor
                                </div>
                            </td>
                            <td>
                                @if($item['original_price'] > $item['price'])
                                <span class="cart-old-price">{{ number_format($item['original_price'], 2, ',', '.') }} € </span>
                                @endif
                                <span class="cart-price"> {{ number_format($item['price'], 2, ',', '.') }} € </span>
                            </td>
                            <td>
                                <div class="cart-qty-group">
                                    <button type="button" class="cart-qty-btn" onclick="updateQuantity({{ json_encode($item['id']) }}, -1)">-</button>
                                    <input type="text" class="cart-qty-input" value="{{ $item['quantity'] }}" id="quantity-{{ $item['id'] }}">
                                    <button type="button" class="cart-qty-btn" onclick="updateQuantity({{ json_encode($item['id']) }}, 1)">+</button>
                                </div>
                            </td>
                            <td>
                                <span class="cart-total"> {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }} € </span>
                            </td>
                            <td>
                                <!-- Botão para remover item do carrinho -->
                                <form action="{{ route('cart.remove') }}" method="POST" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                    <button class="cart-remove-btn cart-btn cart-btn-small" type="submit" style=" border: 1px solid #dc3545;">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="cart-card-footer" style="padding-bottom:0;">
                <!-- Botão para continuar comprando -->
                <a href="{{ route('catalog.index') }}" class="cart-btn cart-btn-primary cart-btn-small" style="margin-bottom:16px;">
                    <i class="fas fa-arrow-left"></i> Continuar Comprando
                </a>
                <!-- Botão para limpar todo o carrinho -->
                <form action="{{ route('cart.clear') }}" method="POST" style="display:inline;">
                    @csrf
                    <button class="cart-btn cart-btn-danger cart-btn-small" type="submit">
                        <i class="fas fa-trash-alt"></i> Limpar Carrinho
                    </button>
                </form>
            </div>
        </div>

        <!-- ====== CUPOM DE DESCONTO ====== -->

        <!-- ====== /CUPOM DE DESCONTO ====== -->
    </div>

    <!-- ====== RESUMO DO PEDIDO ====== -->
    <div class="cart-summary">
        <div class="cart-card">
            <div class="cart-card-header">
                <h5>Resumo do Pedido</h5>
            </div>
            <div class="cart-card-body">
                <div class="cart-summary-row">
                    <span>Subtotal</span>
                    <span class="cart-summary-value"> {{ number_format($subtotal, 2, ',', '.') }} € </span>
                </div>
                <div class="cart-summary-row">
                    <span>Frete</span>
                    <span class="cart-summary-value" id="shippingCost">A calcular</span>
                </div>
                <div class="cart-summary-row">
                    <span>Desconto</span>
                    <span class="cart-summary-value cart-summary-discount" id="discountValue"> 0,00 € </span>
                </div>
                <hr>
                <div class="cart-summary-row cart-summary-total">
                    <span>Total</span>
                    <span class="cart-summary-value" id="totalValue"> {{ number_format($subtotal, 2, ',', '.') }} € </span>
                </div>

                <!-- ====== OPÇÕES DE FRETE ====== -->
                <div class="cart-shipping-options">
                    <h6>Opções de Entrega</h6>
                    <label class="cart-radio">
                        <input type="radio" name="shippingOption" id="shippingStandard" checked>
                        <span>Entrega Padrão</span>
                        <span class="cart-summary-value"> 15,00 € </span>
                        <small>Entrega em 5-7 dias úteis</small>
                    </label>
                    <label class="cart-radio">
                        <input type="radio" name="shippingOption" id="shippingExpress">
                        <span>Entrega Expressa</span>
                        <span class="cart-summary-value"> 30,00 € </span>
                        <small>Entrega em 2-3 dias úteis</small>
                    </label>
                    <label class="cart-radio">
                        <input type="radio" name="shippingOption" id="shippingFree">
                        <span>Retirada na Loja</span>
                        <span class="cart-summary-value">Grátis</span>
                        <small>Av. Paulista, 1000 - São Paulo</small>
                    </label>
                </div>
                <!-- ====== /OPÇÕES DE FRETE ====== -->

                <!-- Botão de Finalização -->
                <a href="{{ route('checkout') }}" class="cart-btn cart-btn-primary cart-btn-block">
                    <i class="fas fa-credit-card"></i> Finalizar Compra
                </a>

                <!-- Métodos de Pagamento -->
                <div class="cart-payment-methods">
                    <small>Métodos de pagamento aceitos</small>
                    <div class="cart-payment-icons">
                        <i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-amex"></i>
                        <i class="fab fa-cc-paypal"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== BLOCO DE SEGURANÇA ====== -->
        <div class="cart-card mt-4">
            <div class="cart-card-body cart-card-secure">
                <i class="fas fa-lock"></i>
                <div>
                    <h6>Compra 100% Segura</h6>
                    <small>Seus dados estão protegidos</small>
                </div>
                <img src="https://via.placeholder.com/150x50?text=SSL+Seguro" alt="Site Seguro" class="cart-secure-img">
            </div>
        </div>
        <!-- ====== /BLOCO DE SEGURANÇA ====== -->
    </div>
    <!-- ====== /RESUMO DO PEDIDO ====== -->
</div>
@else
<!-- ====== CARRINHO VAZIO ====== -->
<div class="cart-empty">
    <i class="fas fa-shopping-cart"></i>
    <h3>Seu carrinho está vazio</h3>
    <p>Adicione produtos ao seu carrinho para continuar</p>
    <a href="{{ route('catalog.index') }}" class="cart-btn cart-btn-primary cart-btn-small">
        <i class="fas fa-arrow-left"></i> Voltar às Compras
    </a>
</div>
<!-- ====== /CARRINHO VAZIO ====== -->
@endif
@endsection

<script>
    // ====== Atualizar quantidade do item ======
    function updateQuantity(itemId, change) {
        const input = document.getElementById(`quantity-${itemId}`);
        let newQuantity = parseInt(input.value) + change;
        if (newQuantity < 1) newQuantity = 1;
        if (newQuantity > 99) newQuantity = 99;
        input.value = newQuantity;
        // Aqui você faria uma requisição AJAX para atualizar no servidor
        updateTotals();
    }

    // ====== Remover item do carrinho ======
    function removeItem(itemId) {
        if (confirm('Tem certeza que deseja remover este item do carrinho?')) {
            // Aqui você faria uma requisição AJAX para remover o item
            window.location.reload();
        }
    }

    // ====== Limpar carrinho ======
    function clearCart() {
        if (confirm('Tem certeza que deseja limpar todo o carrinho?')) {
            // Aqui você faria uma requisição AJAX para limpar o carrinho
            window.location.reload();
        }
    }

    // ====== Aplicar cupom de desconto ======
    document.getElementById('applyCoupon').addEventListener('click', function() {
        const couponCode = document.getElementById('couponCode').value;
        const couponMessage = document.getElementById('couponMessage');
        const subtotal = {
            {
                json_encode($subtotal)
            }
        };
        if (!couponCode) {
            couponMessage.innerHTML = '<span class="cart-msg-error">Por favor, insira um código de cupom</span>';
            return;
        }
        if (couponCode.toUpperCase() === 'ELECTRO10') {
            couponMessage.innerHTML = '<span class="cart-msg-success">Cupom aplicado! 10% de desconto</span>';
            const discount = subtotal * 0.1;
            document.getElementById('discountValue').textContent = ` ${discount.toFixed(2).replace('.', ',')} € `;
            const total = subtotal - discount;
            document.getElementById('totalValue').textContent = ` ${total.toFixed(2).replace('.', ',')} € `;
        } else {
            couponMessage.innerHTML = '<span class="cart-msg-error">Cupom inválido ou expirado</span>';
        }
    });

    // ====== Atualizar totais quando muda o frete ======
    document.querySelectorAll('input[name="shippingOption"]').forEach(radio => {
        radio.addEventListener('change', function() {
            updateTotals();
        });
    });

    // ====== Função para atualizar totais ======
    function updateTotals() {
        let shippingCost = 0;
        const selectedShipping = document.querySelector('input[name="shippingOption"]:checked');
        if (selectedShipping.id === 'shippingStandard') shippingCost = 15;
        else if (selectedShipping.id === 'shippingExpress') shippingCost = 30;
        document.getElementById('shippingCost').textContent = shippingCost > 0 ?
            `€ ${shippingCost.toFixed(2).replace('.', ',')}` :
            'Grátis';
        const discountText = document.getElementById('discountValue').textContent;
        const discount = discountText.includes('€') ?
            parseFloat(discountText.replace('€ ', '').replace(',', '.')) :
            0;
        const subtotal = {
            {
                json_encode($subtotal)
            }
        };
        const total = subtotal - discount + shippingCost;
        document.getElementById('totalValue').textContent = ` ${total.toFixed(2).replace('.', ',')} € `;
    }
</script>