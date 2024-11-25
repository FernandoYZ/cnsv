<section class="relative h-screen flex items-center justify-center" aria-labelledby="hero-section-home"
    style="background-image: url('{{ asset('images/hero/' . $imagen . '.webp') }}'); background-size: cover; background-position: center; width: 100%; height: 100vh;">
    <div class="sombra-superior"></div>
    <div class="relative z-10 text-center text-white container mx-auto px-4 md:px-8 lg:px-16 xl:px-52">
        <h1 id="hero-section-home" class="text-white text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-thin mb-6 text-center md:text-left lg:max-w-[70%] opacity-0 transform translate-x-6">{{ $titulo }}</h1>

        @if ($textButton && $uriButton)
            <div class="text-center md:text-left opacity-0 transform translate-x-6 mb-4">
                <x-hero-button url="{{ $uriButton }}" contenido="{{ $textButton }}" />
            </div>
        @endif
    </div>
</section>
