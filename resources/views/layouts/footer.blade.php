<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">ElectroHome</h5>
                <p>A ElectroHome é a sua loja de eletrodomésticos de confiança, oferecendo os melhores produtos com garantia e qualidade.</p>
                <div class="mt-4">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-whatsapp fa-lg"></i></a>
                </div>
            </div>
            <div class="col-md-2 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                    <li class="mb-2"><a href="{{ route('about') }}" class="text-white">Sobre Nós</a></li>
                    <li class="mb-2"><a href="{{ route('catalog.index') }}" class="text-white">Catálogo</a></li>
                    <li class="mb-2"><a href="{{ route('contact') }}" class="text-white">Contato</a></li>
                    <li><a href="#" class="text-white">Política de Privacidade</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Categorias</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('catalog.index') }}" class="text-white">Geladeiras</a></li>
                    <li class="mb-2"><a href="{{ route('catalog.index') }}" class="text-white">Fogões</a></li>
                    <li class="mb-2"><a href="{{ route('catalog.index') }}" class="text-white">Lavadoras</a></li>
                    <li class="mb-2"><a href="{{ route('catalog.index') }}" class="text-white">Microondas</a></li>
                    <li><a href="{{ route('catalog.index') }}" class="text-white">Ar Condicionado</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="text-uppercase mb-4">Contato</h5>
                <address>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Rua Exemplo, 123 - Centro</p>
                    <p><i class="fas fa-phone-alt me-2"></i> (XX) XXXX-XXXX</p>
                    <p><i class="fas fa-envelope me-2"></i> contato@electrohome.com</p>
                    <p><i class="fas fa-clock me-2"></i> Seg-Sex: 9:00 - 18:00</p>
                </address>
            </div>
        </div>
        <hr class="my-4 bg-light">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; {{ date('Y') }} ElectroHome. Todos os direitos reservados.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">Formas de pagamento: 
                    <i class="fab fa-cc-visa mx-1"></i>
                    <i class="fab fa-cc-mastercard mx-1"></i>
                    <i class="fab fa-cc-paypal mx-1"></i>
                </p>
            </div>
        </div>
    </div>
</footer>