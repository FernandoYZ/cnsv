<x-layouts.app title="Admisión">
    <section id="servicios" class="h-screen bg-gray-300 flex items-center justify-center">
        <h2 class="text-4xl">Nuestros Servicios</h2>
    </section>

    <x-content class="bg-gray-100 py-8 lg:py-24">
        <header class="text-center">
            <h2 class="text-3xl lg:text-4xl font-medium mb-8">Documentos a entregar</h2>
        </header>
        <main class="py-6 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-10">
            <x-primary-card titulo="" icono="documento-card.svg">
                Ficha de inscripción rellenada y firmada por el Párroco, sacerdote o religiosa
            </x-primary-card>
            <x-primary-card titulo="" icono="copia-card.svg">
                Fotocopia de libreta de calificaciones
            </x-primary-card>
            <x-primary-card titulo="" icono="camara-card.svg">
                Foto reciente de tamaño carnet del estudiante con fondo blanco
            </x-primary-card>
        </main>
    </x-content>

    <section id="acerca" class="h-screen bg-gray-400 flex items-center justify-center">
        <h2 class="text-4xl">Acerca de Nosotros</h2>
    </section>
    <section id="contacto" class="h-screen bg-gray-500 flex items-center justify-center">
        <h2 class="text-4xl">Contacto</h2>
    </section>
</x-layouts.app>

