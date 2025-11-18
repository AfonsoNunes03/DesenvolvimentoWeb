document.addEventListener('DOMContentLoaded', function() {
    
    /* ==========================================
       1. Variáveis
       ========================================== */
    const header = document.getElementById('main-header');
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = mobileMenu.querySelectorAll('a');
    const mobileDropdownBtn = document.getElementById('mobile-dropdown-btn');
    const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
    const icon = mobileBtn.querySelector('i');

    /* ==========================================
       2. Menu Mobile
       ========================================== */
    if(mobileBtn){
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            if (mobileMenu.classList.contains('hidden')) {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            }
        });
    }

    /* ==========================================
       3. Dropdown Mobile
       ========================================== */
    if(mobileDropdownBtn) {
        mobileDropdownBtn.addEventListener('click', (e) => {
            e.preventDefault();
            mobileDropdownMenu.classList.toggle('hidden');
            const arrow = mobileDropdownBtn.querySelector('.fa-chevron-down');
            if(arrow) arrow.classList.toggle('rotate-180');
        });
    }

    /* ==========================================
       4. Fechar Menu ao Clicar
       ========================================== */
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if(link.id !== 'mobile-dropdown-btn') {
                mobileMenu.classList.add('hidden');
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }
        });
    });

    /* ==========================================
       5. Scroll Sticky (Sombra Apenas - Sem alterar tamanho)
       ========================================== */
    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            header.classList.add('shadow-md', 'border-gray-100');
            header.classList.remove('border-transparent');
        } else {
            header.classList.remove('shadow-md', 'border-gray-100');
            header.classList.add('border-transparent');
        }
    });

    /* ==========================================
       6. Link Ativo (Apenas Cor - Sem Negrito)
       ========================================== */
    // Seleciona os links do menu desktop dentro da div centralizada
    const navLinks = document.querySelectorAll('#main-header nav a'); 
    const sections = document.querySelectorAll('section');

    window.addEventListener('scroll', () => {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            // Ajuste fino do offset
            if (scrollY >= (sectionTop - 150)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            // Resetar para a cor base
            link.classList.remove('text-primary');
            link.classList.add('text-gray-800');
            
            // Se for o link da secção atual, mudar APENAS a cor
            if (link.getAttribute('href').includes(current) && current !== '') {
                link.classList.add('text-primary');
                link.classList.remove('text-gray-800');
            }
        });
    });
});