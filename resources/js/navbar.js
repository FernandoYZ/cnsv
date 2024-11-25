export function handleNavbarScroll() {
    window.addEventListener('scroll', function() {
        const contenido = document.querySelector('.contenido');
        const navbar = document.querySelector('.navbar');
        const scrollY = window.scrollY;

        if (scrollY > 50) {
            contenido.classList.add('bg-white','transform');
            navbar.classList.add('transform', 'translate-y-5');
            navbar.classList.remove('bg-transparent');
        } else {
            contenido.classList.remove('bg-white','transform');
            navbar.classList.remove('transform', 'translate-y-5');
            navbar.classList.add('bg-transparent');
        }
    });
  }

  export function handleMenuToggle() {
    document.getElementById('menu-toggle').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      const navbar = document.querySelector('.navbar');

      if (mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.remove('hidden', '-translate-y-full');
          navbar.classList.add('bg-black');
          setTimeout(() => mobileMenu.classList.remove('-translate-y-full'), 10);
      } else {
          mobileMenu.classList.add('-translate-y-full');
          navbar.classList.remove('bg-black');
          setTimeout(() => mobileMenu.classList.add('hidden'), 300);
      }
    });
  }

  export function highlightActiveLink() {
    document.querySelectorAll('.navbar a').forEach(link => {
      if (link.href === window.location.href) {
          link.classList.add('active');
      }
    });
  }

  export function chicharron() {
    document.addEventListener('DOMContentLoaded', function () {
      const mobileItems = document.querySelectorAll('a[data-type="item-mobile"]');
      const currentPath = window.location.pathname;

      // Revisar cada enlace y activar el correspondiente según la URL actual
      mobileItems.forEach(item => {
          // Remover la clase active de todos los enlaces por defecto
          item.classList.remove('active');
          const itemHref = new URL(item.href).pathname;

          // Comparar la URL actual con el href del enlace
          if (currentPath === itemHref) {
              item.classList.add('active');
              item.querySelector('svg').classList.remove('text-neutral-700');
              item.querySelector('svg').classList.add('text-wine-500');
          }
      });
    });
  }
