<nav class="navbar font-semibold fixed top-0 left-1/2 transform -translate-x-1/2 w-full z-40 bg-transparent text-neutral-400 transition-all duration-300" aria-label="Main navigation">
    <div class="container mx-auto px-6 md:px-8 lg:px-16 xl:px-52">
        <header class="contenido rounded-full bg-transparent flex justify-between items-center px-8 py-4">
            <a href="{{ route('home') }}" class="block text-lg font-bold relative" aria-label="Inicio">
                <picture>
                    <source srcset="{{ asset('images/logo_cnsv.avif') }}" type="image/avif">
                    <img src="{{ asset('images/logo_cnsv.png') }}" alt="{{ 'Logo de' . $name }}" width="96" height="96" class="w-12 h-auto" loading="lazy">
                </picture>
            </a>

            <nav aria-label="Menú principal">
                <ul id="menu-toggle" class="hidden md:flex-grow md:flex md:justify-center space-x-6" role="menubar">
                    <li role="menuitem"><a href="{{ route('home') }}" data-type="item" class="hover:text-white relative">Inicio</a></li>
                    <li role="menuitem"><a href="{{ route('about') }}" data-type="item" class="hover:text-white relative">¿Quiénes somos?</a></li>
                    <li role="menuitem"><a href="{{ route('visit') }}" data-type="item" class="hover:text-white relative">Visítanos</a></li>
                    <li role="menuitem"><a href="{{ route('donation') }}" data-type="item" class="hover:text-white relative">Donaciones</a></li>
                </ul>
            </nav>

            <x-primary-button uri="{{ route('admission') }}" contenido="Ir a la vista Admisión" tipo="button-link">
                Admisión
            </x-primary-button>
        </header>
    </div>
</nav>
