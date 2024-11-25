<a
    href="{{ $uri }}"
    class="text-sm font-bold py-2.5 px-6 rounded-full border border-white text-white hover:bg-white hover:border-white hover:text-neutral-900 transition duration-300"
    aria-label="Acción del botón {{ $contenido }}"
    data-type="{{ $tipo }}"
>
    {{ $slot ?? $contenido }}
</a>


