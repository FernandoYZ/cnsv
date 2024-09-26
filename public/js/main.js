window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50 && window.innerWidth > 768) {
        navbar.classList.add('scrolled');
    } else if (window.innerWidth > 768) {
        navbar.classList.remove('scrolled');
    }
});

document.getElementById('menu-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const navbar = document.querySelector('.navbar');
    if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.remove('hidden');
        setTimeout(() => {
            mobileMenu.classList.remove('-translate-y-full');
            navbar.classList.add('bg-black');
        }, 10);
    } else {
        mobileMenu.classList.add('-translate-y-full');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
            navbar.classList.remove('bg-black');
        }, 300);
    }
});

document.querySelectorAll('.navbar a').forEach(link => {
    if (link.href === window.location.href) {
        link.classList.add('active');
    }
});
