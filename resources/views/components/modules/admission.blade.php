<x-content class="lg:py-8">
    <section>
        <h2 class="font-semibold text-xl lg:text-4xl text-black mb-4 text-center uppercase">Datos de Matrícula</h2>

        <!-- Matrícula Period -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-8">
            @foreach ($periodos as $periodo)
                <article class="rounded-3xl border-2 border-neutral-400 p-10 space-y-4">
                    <div class="flex flex-col lg:flex-row items-center lg:space-x-8">
                        <!-- Icono -->
                        <div class="rounded-full bg-wine-600 p-9 mb-6 lg:mb-0">
                            <img
                                src="{{ asset('/images/svg/' . $periodo['icono'] . '.svg') }}"
                                alt="{{ $periodo['label'] }} icono"
                                class="w-14 h-14"
                            >
                        </div>
                        <!-- Texto -->
                        <div class="flex-1 text-center lg:text-left">
                            <span class="px-4 py-2 bg-gray-300 text-gray-500 rounded-full font-semibold">
                                {{ $periodo['label'] }}
                            </span>
                            <h3 class="mt-4 text-2xl lg:text-3xl font-bold">{{ $periodo['subtitulo'] }}</h3>
                        </div>
                    </div>
                    <p class="text-lg text-center lg:text-left">{{ $periodo['descripcion'] }}</p>
                </article>
            @endforeach
        </section>

        <!-- CTA Section -->
        <section class="bg-wine-100 rounded-3xl px-8 py-10 text-center space-y-8">
            <h3 class="font-bold text-3xl">¡Asegura tu plaza hoy!</h3>
            <p>Inscripciones abiertas, plazas limitadas.</p>
            <button class="bg-wine-700 text-white rounded-full hover:bg-black transition-all duration-200">
                <a
                    href="{{ route('admission') }}"
                    class="block w-full py-4 px-8 text-center font-semibold"
                >Iniciar inscripción</a>
            </button>
        </section>
    </section>
</x-content>
