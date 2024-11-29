<x-layouts.app title="Sobre Nosotros">
    <x-hero-section
        nombreImagen="about_hero"
        titulo="¿Quiénes somos?"
        contenido="Somos una Institución Educativa de Acción Conjunta de Educación Básica Regular entre la Iglesia Católica y el Estado Peruano, erigida como Colegio - Seminario Menor."
        textButton="Inicia ya!"
        uriButton="{{ route('admission') }}"
    />

    <x-content class="bg-white py-8">
        <header class="text-center py-8">
            <h2 class="text-3xl lg:text-5xl font-medium mb-6">Comprometidos con la Excelencia Educativa</h2>
            <p class="text-gray-600 lg:px-48">En el Colegio Seminario Menor - Nuestra Señora del Valle, nos dedicamos a proporcionar una educación de calidad que fomente el desarrollo integral de nuestros estudiantes, preparándolos para enfrentar los retos del futuro con confianza y habilidad.</p>
        </header>
        <main class="grid grid-cols-1 gap-2">
            <x-left-card titulo="Nuestra Misión" imagen="/hero/home_hero.webp">
                Buscamos brindar una formación académica, integral-humana de valores, espiritual, científica, tecnológica, socioemocional y deportiva, bajo la modalidad de residencia. Nos inspiramos en una visión cristiana, donde priorizamos la vocación sacerdotal en libertad personal. Además, formamos para una elección profesional que la sociedad actual requiere.
            </x-left-card>
            <x-right-card titulo="Nuestra Visión" imagen="/hero/home_hero.webp">
                Ser una institución educativa de excelencia académica y liderazgo, donde surjan sólidas vocaciones sacerdotales y futuros profesionales competentes, con madurez católica al servicio de la Iglesia, del país y del mundo globalizado; inducir a nuestros docentes a reflexionar sobre sus práctica pedagógicas; y lograr que los padres de familia se comprometan con la formación integral de sus hijos.
            </x-right-card>
        </main>
    </x-content>

    <x-content class="bg-black py-8 text-white">
        <header class="text-center justify-center py-8">
            <h2 class="font-medium text-3xl lg:text-5xl mb-4">Nuestra Historia</h2>
            <p class="lg:px-48">Descubre los momentos clave que han definido al colegio Seminario Menor Nuestra Señora del Valle a lo largo de los años.</p>
        </header>
        <div class="container mx-auto p-8">
            <x-timeline :hitos="$hitos" />
        </div>
    </x-content>


    <section id="acerca" class="h-screen bg-gray-400 flex items-center justify-center">
        <h2 class="text-4xl">Acerca de Nosotros</h2>
    </section>
    <section id="contacto" class="h-screen bg-gray-500 flex items-center justify-center">
        <h2 class="text-4xl">Contacto</h2>
    </section>
</x-layouts.app>

