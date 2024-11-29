<x-layouts.app title="Inicio">
    <x-hero-home
        imagen="home_hero"
        titulo="Proceso de admisión 2025"
        uriButton="{{ route('admission') }}"
        textButton="Inicia ya!"
    />
    <x-hero-section
        nombreImagen="about_hero"
        titulo="¿Quiénes somos?"
        contenido="Somos una Institución Educativa de Acción Conjunta de Educación Básica Regular entre la Iglesia Católica y el Estado Peruano, erigida como Colegio - Seminario Menor."
        textButton="Inicia ya!"
        uriButton="{{ route('admission') }}"
    />
    <x-hero-section
        nombreImagen="about_hero"
        titulo="¿Quiénes somos?"
        contenido="Somos una Institución Educativa de Acción Conjunta de Educación Básica Regular entre la Iglesia Católica y el Estado Peruano, erigida como Colegio - Seminario Menor."
        textButton="Inicia ya!"
        uriButton="{{ route('admission') }}"
    />
    <x-hero-section
        nombreImagen="about_hero"
        titulo="¿Quiénes somos?"
        contenido="Somos una Institución Educativa de Acción Conjunta de Educación Básica Regular entre la Iglesia Católica y el Estado Peruano, erigida como Colegio - Seminario Menor."
        textButton="Inicia ya!"
        uriButton="{{ route('admission') }}"
    />

    <section id="servicios" class="h-screen bg-gray-300 flex items-center justify-center">
        <h2 class="text-4xl">Nuestros Servicios</h2>
    </section>

    <section id="acerca" class="h-screen bg-gray-400 flex items-center justify-center">
        <h2 class="text-4xl">Acerca de Nosotros</h2>
    </section>
    <section id="contacto" class="h-screen bg-gray-500 flex items-center justify-center">
        <h2 class="text-4xl">Contacto</h2>
    </section>
</x-layouts.app>
