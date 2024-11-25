<nav class="block md:flex mobile font-semibold -translate-y-[20px] z-40 left-1/2 -translate-x-1/2 rounded-full fixed bottom-0 w-11/12 bg-white justify-around items-center shadow-lg">
    <div class="container py-4 px-6 mx-auto flex justify-between items-center">

        <a href="{{ route('home') }}" class="flex items-center space-x-2 py-3 px-4 rounded-full hover:bg-gray-100 transition-colors" data-type="item-mobile" aria-label="Inicio">
            <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor"  stroke-width="2.5">
                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/>
                    <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                </g>
            </svg>
            <span class="text-wine-500 text-sm hidden">Inicio</span>
        </a>

        <a href="{{ route('about') }}" class="flex items-center space-x-2 py-3 px-4 hover:bg-gray-100 rounded-full transition-colors" data-type="item-mobile" aria-label="Sobre-nosotros">
            <svg class="text-neutral-700" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 21.5C17.2467 21.5 21.5 17.2467 21.5 12C21.5 6.7533 17.2467 2.5 12 2.5C6.7533 2.5 2.5 6.7533 2.5 12C2.5 17.2467 6.7533 21.5 12 21.5Z" stroke="currentColor" stroke-width="2.5"/>
                <path d="M12.0053 17.2778V10.9445" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.9562 7.44263H11.9651" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <span class="text-wine-500 text-sm hidden">Nosotros</span>
        </a>

        <a href="{{ route('visit') }}>" class="flex items-center space-x-2 py-3 px-4 hover:bg-gray-100 rounded-full transition-colors" data-type="item-mobile" aria-label="Visitanos">
            <svg class="text-neutral-700" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.70588 12.7812L4.38986 11.8281C3.96633 11.7094 3.59118 11.4599 3.31809 11.1152C3.04498 10.7704 2.88793 10.3482 2.86939 9.90869C2.85086 9.46927 2.97179 9.03524 3.21489 8.66871C3.45797 8.30218 3.81078 8.02194 4.2228 7.86808L18.3334 2.87632C18.7064 2.74019 19.1106 2.71343 19.4982 2.79922C19.886 2.885 20.2411 3.07974 20.5219 3.36053C20.8026 3.64132 20.9975 3.99646 21.0833 4.38418C21.169 4.77189 21.1422 5.17604 21.0061 5.54908L16.0143 19.9348C15.857 20.3311 15.5819 20.6696 15.226 20.9047C14.8703 21.1397 14.4509 21.2601 14.0246 21.2493C13.5984 21.2386 13.1856 21.0974 12.8421 20.8448C12.4986 20.5922 12.2408 20.2402 12.1035 19.8365L11.1897 14.265C11.1025 13.9053 10.9179 13.5764 10.6561 13.3147C10.3945 13.053 10.0656 12.8684 9.70588 12.7812Z" stroke="currentColor" stroke-width="2.5" />
                <path d="M15.2774 8.80157L10.6983 13.3806" stroke="currentColor" stroke-width="2.5" />
            </svg>
            <span class="text-wine-500 text-sm hidden">Visítanos</span>
        </a>

        <a href="{{ route('donation') }}" class="flex items-center space-x-2 py-3 px-4 hover:bg-gray-100 rounded-full transition-colors" data-type="item-mobile" aria-label="Donacion">
            <svg class="text-neutral-700" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 7.2294C10.2671 3.30561 6.23596 2.95683 4.35874 4.66804C2.83049 6.04137 2.09645 9.33298 3.49233 12.363C5.89902 17.573 12 20.3087 12 20.3087C12 20.3087 18.101 17.573 20.5076 12.363C21.9036 9.33298 21.1695 6.04137 19.6413 4.66804C17.764 2.95683 13.7328 3.30561 12 7.2294Z" stroke="currentColor" stroke-width="2.5" />
            </svg>
            <span class="text-wine-500 text-sm hidden">Donación</span>
        </a>
    </div>
</nav>
