<article class="transition transform ease-in-out duration-500 rounded-3xl flex flex-col h-full shadow-lg px-6 py-12 bg-white gap-5 hover:-translate-y-2 justify-center items-center">
    <header class="grid grid-cols-1 gap-4 justify-items-center">
        @if ($icono)
            <img src="{{ asset('images/svg/'.$icono) }}" alt="Ícono del card" class="w-auto h-auto">
        @endif
        @if ($titulo)
            <h4 class="font-semibold text-xl text-wine-700 text-center">{{ $titulo }}</h4>
        @endif
    </header>

    <main class="flex justify-center items-center">
        <p class="text-sm text-gray-800 text-center">
            {{ $slot }}
        </p>
    </main>
</article>
