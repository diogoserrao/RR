// Função para inicializar componentes
document.addEventListener('DOMContentLoaded', function() {
     // Ativar tooltips e popovers (teu código existente)
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) { /* ... */ });

    // Navbar preta: esconder ao descer, mostrar ao subir
    let lastScrollTop = window.scrollY;
    const navbar = document.querySelector('.navbar.bg-dark');

    window.addEventListener('scroll', function() {
        if (!navbar) return;
        let st = window.scrollY;
        if (st > lastScrollTop && st > 100) {
            // Scroll para baixo: esconde
            navbar.style.transform = 'translateY(-100%)';
            navbar.style.transition = 'transform 0.3s';
        } else {
            // Scroll para cima: mostra
            navbar.style.transform = 'translateY(0)';
            navbar.style.transition = 'transform 0.3s';
        }
        lastScrollTop = st <= 0 ? 0 : st;
    });
    
    // Ativar popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
    
    // Validação do formulário de contato
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simular envio do formulário
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviando...';
            
            setTimeout(function() {
                submitBtn.innerHTML = '<i class="fas fa-check-circle me-2"></i> Mensagem Enviada';
                
                // Resetar formulário após 2 segundos
                setTimeout(function() {
                    contactForm.reset();
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                    
                    // Mostrar alerta de sucesso
                    const alertDiv = document.createElement('div');
                    alertDiv.className = 'alert alert-success mt-3';
                    alertDiv.innerHTML = '<i class="fas fa-check-circle me-2"></i> Sua mensagem foi enviada com sucesso! Entraremos em contato em breve.';
                    contactForm.parentNode.insertBefore(alertDiv, contactForm.nextSibling);
                    
                    // Remover alerta após 5 segundos
                    setTimeout(function() {
                        alertDiv.remove();
                    }, 5000);
                }, 2000);
            }, 1500);
        });
    }
    
    // Contador de quantidade de produtos
    const incrementBtn = document.getElementById('increment');
    const decrementBtn = document.getElementById('decrement');
    const quantityInput = document.getElementById('quantity');
    
    if (incrementBtn && decrementBtn && quantityInput) {
        incrementBtn.addEventListener('click', function() {
            quantityInput.value = parseInt(quantityInput.value) + 1;
        });
        
        decrementBtn.addEventListener('click', function() {
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        });
    }
    
    // Alternar entre abas de produto
    const productTabs = document.getElementById('productTabs');
    if (productTabs) {
        const tabButtons = productTabs.querySelectorAll('button[data-bs-toggle="tab"]');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                const target = this.getAttribute('data-bs-target');
                const tabContent = document.querySelector(target);
                
                // Aqui você poderia carregar conteúdo via AJAX se necessário
            });
        });
    }
});