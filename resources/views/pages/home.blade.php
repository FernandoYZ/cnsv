<x-layouts.app title="Inicio">
    <x-hero-home
        imagen="home_hero"
        titulo="Proceso de admisión 2025"
        uriButton="{{ route('admission') }}"
        textButton="Inicia ya!"
    />
    <x-modules.about />
    <x-modules.visit />
    <x-modules.admission />
    <x-modules.donation />
    <x-modules.contact />

</x-layouts.app>
