export function observeHeroSections() {
    document.addEventListener('DOMContentLoaded', () => {
        const heroSections = document.querySelectorAll("section[aria-labelledby='hero-section-title']");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
            if (entry.isIntersecting) {
                const heroSection = entry.target;
                const title = heroSection.querySelector("h1");
                const content = heroSection.querySelector("p");
                const buttonWrapper = heroSection.querySelector("div.mt-6");

                // Activar animación para el título
                if (title) {
                title.classList.add('animate-fadeSlideInFromLeft');
                }

                // Activar animación para el contenido
                if (content) {
                content.classList.add('animate-fadeSlideInFromRight');
                }

                // Activar animación para el botón
                if (buttonWrapper) {
                buttonWrapper.classList.add('animate-fadeSlideInFromBottom');
                }

                // Deja de observar el heroSection una vez activadas las animaciones
                observer.unobserve(heroSection);
            }
            });
        }, {
            threshold: 0.5, // Se activa cuando el 50% del elemento es visible
        });

        heroSections.forEach(section => {
            observer.observe(section);
        });
    });
}

export function animateHeroTitle() {
    document.addEventListener('DOMContentLoaded', () => {
        const heroTitle = document.querySelector('#hero-section-home');

        if (heroTitle) {
            const heroButton = heroTitle.nextElementSibling;

            heroTitle.classList.add('animate-slideInFromRight');

            if (heroButton) {
                heroTitle.addEventListener('animationend', () => {
                    heroButton.classList.add('animate-slideInFromLeft');
                }, { once: true });
            }
        }
    });
}

export function animatedTimeline() {
    document.addEventListener('scroll', () => {
        const lineaBase = document.querySelector('.linea-base');
        const lineaProgreso = document.querySelector('.linea-progreso');
        const hitos = document.querySelectorAll('.hito');
        const viewportHeight = window.innerHeight;
        const baseHeight = lineaBase.offsetHeight;
        const scrollTop = window.scrollY;
        const baseTop = lineaBase.getBoundingClientRect().top + scrollTop;

        // Calcular la altura de la línea de progreso
        const progressTop = scrollTop - baseTop + viewportHeight / 2;
        const progressHeight = Math.max(0, Math.min(baseHeight, progressTop));
        lineaProgreso.style.height = `${progressHeight}px`;

        hitos.forEach((hito) => {
            const hitoTop = hito.getBoundingClientRect().top + scrollTop;
            const hitoHeight = hito.offsetHeight;

            // Obtener referencia de ícono y contenido
            const iconoHito = hito.querySelector('.icono-hito');
            const contenidoHito = hito.querySelector('.contenido-hito');

            // Determinar si la línea de progreso está sobre el hito
            const isActive = progressTop >= hitoTop - baseTop && progressTop <= hitoTop - baseTop + hitoHeight;

            if (isActive) {
                // Si la línea de progreso está pasando por el hito
                iconoHito.classList.remove('bg-gray-700', 'text-black');
                iconoHito.classList.add('bg-wine-700', 'text-white');
                contenidoHito.classList.remove('text-gray-700');
                contenidoHito.classList.add('text-white');
            } else {
                // Si la línea de progreso no ha pasado completamente
                const isBelow = progressTop >= hitoTop - baseTop + hitoHeight;
                const isAbove = progressTop < hitoTop - baseTop;

                if (isBelow) {
                    // Línea de progreso ha pasado el hito
                    iconoHito.classList.remove('bg-gray-800', 'text-black');
                    iconoHito.classList.add('bg-wine-700', 'text-white');
                    contenidoHito.classList.remove('text-gray-600');
                    contenidoHito.classList.add('text-white');
                } else if (isAbove) {
                    // Línea de progreso aún no alcanza el hito
                    iconoHito.classList.add('bg-gray-800', 'text-black');
                    iconoHito.classList.remove('bg-wine-700', 'text-white');
                    contenidoHito.classList.add('text-gray-600');
                    contenidoHito.classList.remove('text-white');
                }
            }
        });
    });
}
