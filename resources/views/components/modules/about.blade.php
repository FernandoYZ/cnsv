<x-content class="bg-white lg:py-16 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        <!-- Lado izquierdo: Imagen -->
        <figure>
            <picture>
                <source srcset="{{ asset('images/donation.webp') }}" type="image/webp">
                <source srcset="{{ asset('images/donation.avif') }}" type="image/avif">
                <img
                    src="{{ asset('images/donation.jpg') }}"
                    alt="Estudiantes del Colegio Seminario Menor"
                    class="rounded-lg md:rounded-2xl h-36 lg:h-full w-full object-cover"
                >
            </picture>
            <figcaption class="sr-only">Estudiantes del Colegio Seminario Menor</figcaption>
        </figure>

        <!-- Lado derecho: Texto -->
        <section class="space-y-8">
            <h2 class="text-3xl lg:text-5xl font-medium mb-6 uppercase">Sobre Nosotros</h2>
            <p class="text-gray-600">
                En el Colegio Seminario Menor - Nuestra Señora del Valle, nos dedicamos a proporcionar una educación de calidad que fomente el desarrollo integral de nuestros estudiantes, preparándolos para enfrentar los retos del futuro con confianza y habilidad.
            </p>

            <!-- Sección sobre la historia -->
            <section class="flex flex-col lg:flex-row lg:space-x-4 space-y-4 lg:space-y-0">
                <!-- Contenido adicional sobre la historia -->
                <article class="bg-gray-200 px-8 py-4 rounded-2xl text-gray-700 flex-1">
                    <h4 class="font-semibold">Nuestra Historia</h4>
                    <p class="text-xs">Descubre los momentos clave que han definido a nuestro colegio a lo largo de los años.</p>
                </article>

                <!-- Botón -->
                <a href="{{ route('about') }}" class="bg-wine-700 border-2 border-wine-700 hover:bg-white text-white hover:text-wine-700 flex items-center justify-center lg:w-auto w-full transition-colors duration-200 lg:rounded-2xl rounded-full">
                    <span class="block text-center font-semibold py-4 px-6 w-full lg:w-auto">
                        Leer más
                    </span>
                </a>
            </section>
        </section>
    </div>
</x-content>
