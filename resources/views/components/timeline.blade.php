<div class="flex flex-col items-center relative">
    <div class="linea-base"></div>
    <div class="linea-progreso"></div>

    @foreach ($hitos as $index => $hito)
        <div class="hito flex {{ $index % 2 === 0 ? 'flex-row-reverse' : 'flex-row' }} items-center w-full mb-8 relative">
            {{-- <div class="imagen-hito w-1/2 px-16 hidden md:block">
                <img src="{{ asset($hito['imagen']) }}" alt="Imagen del hito" class="w-full h-auto rounded-lg shadow-md">
            </div> --}}
            <div class="w-full md:w-1/2 px-4 md:px-12 flex flex-col items-center md:items-{{ $index % 2 === 0 ? 'end' : 'start' }}">
                <div class="icono-hito flex items-center lg:my-8 my-2 absolute left-1/2 md:left-1/2 transform md:-translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-gray-700 text-white justify-center rounded-full shadow-md">
                    <img src="{{ asset('images/svg/'.$hito['icono']) }}" alt="Ícono del hito">
                </div>
                <div class="contenido-hito lg:p-4 pl-16 lg:mb-0 sm:mb-4 mb-8 rounded-lg shadow-md text-gray-600">
                    <h3 class="text-lg font-bold">{{ $hito['titulo'] }}</h3>
                    <p class="text-sm mt-2">{{ $hito['descripcion'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

