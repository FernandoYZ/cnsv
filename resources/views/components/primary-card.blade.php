<article class="transition transform ease-in-out duration-500 rounded-3xl flex flex-col h-full shadow-xl px-6 py-12 bg-white gap-5 hover:-translate-y-2 justify-center items-center">
    <header class="grid grid-col-1">
        @if ($titulo)
            <h3 class="font-semibold text-3xl text-wine-700 text-center">{{ $titulo }}</h3>
        @endif
        @if ($icono)
            <img src="{{ asset('images/svg/'.$icono) }}" alt="Ícono del card" class="text-center">
        @endif
    </header>
    <main class="flex justify-center items-center">
        <p class="text-lg text-gray-800 text-center">
            {{ $slot }}
        </p>
    </main>
</article>
