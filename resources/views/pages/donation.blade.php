<x-layouts.app title="Donaciones">
    <x-hero-section
        nombreImagen="donation"
        titulo="Sé parte del crecimiento de nuestra institución"
        contenido=""
        textButton=""
        uriButton=""
    />

    <x-content class="bg-gray-100 py-8 lg:py-12">
        <header class="text-center">
            <h2 class="text-3xl lg:text-4xl font-medium mb-8">Contribuyendo al colegio</h2>
            <p class="text-gray-600 lg:px-48">Descubre cómo tus donaciones pueden marcar la diferencia en la vida de nuestros estudiantes</p>
        </header>
        <main class="py-6 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-10">
            <x-secundary-card titulo="Becas educativas" icono="beca-card.svg">
                Tus donaciones ayudan a proporcionar becas a estudiantes talentosos con recursos limitados.
            </x-secundary-card>
            <x-secundary-card titulo="Tecnología educativa" icono="computadora-card.svg">
                Con tu apoyo, podemos mejorar nuestras instalaciones tecnológicas para un aprendizaje más efectivo.
            </x-secundary-card>
            <x-secundary-card titulo="Programas de mentoría" icono="grupo-card.svg">
                Las donaciones financian programas de mentoría que conectan a estudiantes con profesionales experimentados.
            </x-secundary-card>
        </main>
    </x-content>

    <x-content class="bg-gray-100">
        <div>

        </div>
        <main class="grid grid-cols-2 gap-6">
            <div>
                <h2 class="font-semibold text-5xl">Apoya al colegio</h2>
                <span class="font-semibold text-lg">Tu contribución importa</span>
                <p class="text-sm">Contribuye a la educación de calidad de nuestros estudiantes. Tus donaciones nos ayudan a mejorar las instalaciones, ofrecer más becas y asegurar un entorno de aprendizaje óptimo para todos. Únete a nuestra causa y sé parte del cambio.</p>
            </div>
            <div>Pene 2</div>
        </main>
    </x-content>

    <section id="acerca" class="h-screen bg-gray-400 flex items-center justify-center">
        <h2 class="text-4xl">Acerca de Nosotros</h2>
    </section>
    <section id="contacto" class="h-screen bg-gray-500 flex items-center justify-center">
        <h2 class="text-4xl">Contacto</h2>
    </section>
</x-layouts.app>

