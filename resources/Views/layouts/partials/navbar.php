<nav class="navbar fixed top-0 left-0 w-full z-20 bg-transparent text-white py-3 transition-colors duration-300" aria-label="Main navigation">
    <div class="container mx-auto px-4 md:px-8 lg:px-16 xl:px-52 flex justify-between items-center">
        <a href="<?= base_url('/') ?>" class="block text-lg font-bold relative" data-type="logo" aria-label="Inicio">
            <?php
            renderImage(
                'logo_cnsv', 
                'Logo del ' . config('property_title'), 
                config('description'),
                'w-24 text-center'
            );
            ?>
        </a>
        <div class="block md:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none" aria-expanded="false" aria-controls="mobile-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <span class="sr-only">Abrir menú</span>
            </button>
        </div>
        <ul class="hidden md:flex-grow md:flex md:justify-center space-x-6" role="menubar">
            <li role="menuitem"><a href="<?= base_url('/') ?>" data-type="item" class="relative">Inicio</a></li>
            <li role="menuitem"><a href="<?= base_url('/about') ?>" data-type="item" class="relative">¿Quiénes somos?</a></li>
            <li role="menuitem"><a href="<?= base_url('/visit') ?>" data-type="item" class="relative">Visítanos</a></li>
            <li role="menuitem"><a href="<?= base_url('/donation') ?>" data-type="item" class="relative">Donaciones</a></li>
        </ul>
        <div class="hidden md:block"><?php PrimaryButton('Admisión', 'admission');?></div>
    </div>
    <div id="mobile-menu" class="hidden h-full bg-black transition-transform transform -translate-y-full duration-300" role="menu" aria-hidden="true">
        <ul class="flex flex-col space-y-6 p-4 text-white">
            <li role="menuitem"><a href="<?= base_url('/') ?>" class="block relative">Inicio</a></li>
            <li role="menuitem"><a href="<?= base_url('/about') ?>" class="block relative">¿Quiénes somos?</a></li>
            <li role="menuitem"><a href="<?= base_url('/visit') ?>" class="block relative">Visítanos</a></li>
            <li role="menuitem"><a href="<?= base_url('/donation') ?>" class="block relative">Donaciones</a></li>
            <li><?php PrimaryButton('Admisión', 'admission');?></li>
        </ul>
    </div>
</nav>
