<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="{{ asset('layouts/footer.css') }}" rel="stylesheet">

</head>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-row">
            <!-- ====== COLUNA: MARCA E REDES SOCIAIS ====== -->
            <div class="footer-col footer-col-brand">
                <h5 class="footer-title">ElectroHome</h5>
                <p class="footer-desc">A ElectroHome é a sua loja de eletrodomésticos <br>de confiança, oferecendo os melhores produtos <br>com garantia e qualidade.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <!-- ====== COLUNA: LINKS PRINCIPAIS ====== -->
            <div class="footer-col">
                <h5 class="footer-title">Links</h5>
                <ul class="footer-list">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('catalog.index') }}">Catálogo</a></li>
                    <li><a href="{{ route('contact') }}">Contato</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                </ul>
            </div>
            <!-- ====== COLUNA: CATEGORIAS ====== -->
            <div class="footer-col">
                <h5 class="footer-title">Categorias</h5>
                <ul class="footer-list">
                    <li><a href="{{ route('catalog.index') }}">Frigorificos</a></li>
                    <li><a href="{{ route('catalog.index') }}">Fogões</a></li>
                    <li><a href="{{ route('catalog.index') }}">Maquinas de lavar</a></li>
                    <li><a href="{{ route('catalog.index') }}">Microondas</a></li>
                    <li><a href="{{ route('catalog.index') }}">Ar Condicionado</a></li>
                </ul>
            </div>
            <!-- ====== COLUNA: CONTATO ====== -->
            <div class="footer-col">
                <h5 class="footer-title">Contato</h5>
                <address class="footer-address">
                    <p><i class="fas fa-map-marker-alt"></i> Rua Exemplo, 123 - Centro</p>
                    <p><i class="fas fa-phone-alt"></i> (XX) XXXX-XXXX</p>
                    <p><i class="fas fa-envelope"></i> contato@electrohome.com</p>
                    <p><i class="fas fa-clock"></i> Seg-Sex: 9:00 - 18:00</p>
                </address>
            </div>
        </div>
        <hr class="footer-divider">
        <!-- ====== RODAPÉ INFERIOR: DIREITOS E PAGAMENTO ====== -->
        <div class="footer-row footer-bottom">
            <div class="footer-bottom-left">
                <p>&copy; {{ date('Y') }} ElectroHome. Todos os direitos reservados.</p>
            </div>
            <div class="footer-bottom-right">
                <p>Formas de pagamento:
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-paypal"></i>
                </p>
            </div>
        </div>
    </div>
</footer>