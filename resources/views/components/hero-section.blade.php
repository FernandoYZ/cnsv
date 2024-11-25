<section class="relative h-screen flex items-center justify-center" aria-labelledby="hero-section-title"
    style="background-image: url('{{ asset('images/hero/' . $nombreImagen . '.webp') }}'); background-size: cover; background-position: center; width: 100%; height: 100vh;">
    <div class="sombra-superior"></div>
    <div class="absolute inset-0 z-0 bg-black opacity-60"></div>

    <div class="relative z-10 text-center text-white container mx-auto px-4 md:px-8 lg:px-16 xl:px-52">
        <h1 class="text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-thin mb-6 opacity-0 transform translate-x-6">{{ $titulo }}</h1>

        @if ($contenido)
            <p class="text-lg md:text-xl lg:text-2xl font-normal mb-8 opacity-0 transform translate-x-5">{{ $contenido }}</p>
        @endif

        <div class="mt-6 opacity-0 transform translate-y-5">
            @if ($textButton && $uriButton)
                <x-hero-button url="{{ $uriButton }}" contenido="{{ $textButton }}" />
            @endif
        </div>
    </div>
</section>
