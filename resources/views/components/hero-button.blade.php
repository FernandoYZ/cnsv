<a
    href="{{ $url }}"
    class="group relative z-40 inline-flex items-center bg-transparent rounded-full border border-white text-white px-6 py-3 text-lg transition-all duration-300 ease-in-out hover:bg-white hover:text-black"
    aria-label="Acción del botón {{ $contenido }}"
>
    {{ $contenido }}
    <span class="ml-2 transition-transform duration-300 ease-in-out group-hover:translate-x-2" aria-hidden="true">
        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
          <path d="M13.71 24.71L12.3 23.3l7.29-7.3-7.3-7.29L13.71 7.3l8 8a1 1 0 0 1 0 1.41z" fill="currentColor"/>
        </svg>
    </span>
</a>
