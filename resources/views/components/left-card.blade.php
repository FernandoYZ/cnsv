<article class="flex flex-col lg:flex-row items-center gap-8 lg:gap-0 rounded-lg shadow-lg overflow-hidden bg-white mb-10">
    <figure class="w-full lg:w-1/2 h-64 lg:h-full relative overflow-hidden">
        <div
            class="w-full h-full bg-cover bg-center transition-transform duration-300 hover:scale-110"
            style="background-image: url('{{ asset('images' . $imagen) }}');"
            aria-label="Imagen de la {{ $titulo }} CNSV"
            aria-hidden="true"
        ></div>
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-1/2"></div>
        <div class="absolute bottom-0 left-0 right-0 p-6 text-white xs:text-center text-center lg:text-left xl:text-left">
            <h3 class="text-2xl font-bold tracking-tighter sm:text-3xl md:text-4xl">{{ $titulo }}</h3>
        </div>
        <figcaption class="sr-only">Imagen representativa de {{$titulo}}</figcaption>
    </figure>
    <div class="w-full lg:w-1/2 p-8 lg:p-12 space-y-4">
        <p class="text-gray-500 md:text-sm lg:text-sm xl:text-base">{{ $slot }}</p>
    </div>
</article>
