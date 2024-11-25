<footer class="font-monserat bg-neutral-900 py-12 text-neutral-400 text-sm" role="contentinfo">
    <div class="container mx-auto px-4 md:px-8 lg:px-16 xl:px-52">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <section class="flex flex-col items-center md:items-start">
            <div class="mb-4">
                <a href="{{ route('home') }}" aria-label="Inicio">
                    <picture>
                        <source srcset="{{ asset('images/logo_cnsv_footer.avif') }} " type="image/avif">
                        <source srcset="{{ asset('images/logo_cnsv_footer.webp') }} " type="image/webp">
                        <img
                            src="{{ asset('images/logo_cnsv_footer.png') }}"
                            alt="{{ 'Logo de ' . $name }}"
                            width="96"
                            height="96"
                            loading="lazy"
                            class="w-28 h-auto"
                        />
                    </picture>
                </a>
            </div>
            <p class="text-sm text-center md:text-left lg:pr-16 pr-0">{{ $meta_description }}</p>
        </section>

        <nav class="flex justify-center" aria-label="Secciones">
          <div>
            <h2 class="font-bold mb-4 text-md md:text-md uppercase">Secciones</h2>
            <ul class="space-y-2">
              <li><a href="{{ route('home') }}" class="relative hover:text-white">Inicio</a></li>
              <li><a href="{{ route('about') }}" class="relative hover:text-white">¿Quiénes somos?</a></li>
              <li><a href="{{ route('visit') }}" class="relative hover:text-white">Visítanos</a></li>
              <li><a href="{{ route('donation') }}" class="relative hover:text-white">Donaciones</a></li>
            </ul>
            <div class="mt-6">
              <h2 class="font-bold mb-4 text-md uppercase">Matrículas</h2>
              <x-primary-button uri="{{ route('admission') }}" contenido="Ir a la vista Admisión" tipo="">
                ¡Inicia ya!
              </x-primary-button>
            </div>
          </div>
        </nav>

        <section class="flex flex-col items-center md:items-start text-center md:text-left" aria-labelledby="contact-heading">
          <h2 id="contact-heading" class="font-bold mb-4 text-md md:text-md uppercase">Contacto</h2>
          <div class="space-y-5">
            <div>
              <h3 class="font-semibold mb-2">Dirección</h3>
              <p class="font-normal">{{ $address }}</p>
            </div>
            <div>
              <h3 class="font-semibold mb-2">Teléfono</h3>
              <p class="font-normal">{{ $cell_phone }}</p>
            </div>
            <div>
              <h3 class="font-semibold mb-2">Correo electrónico</h3>
                <p class="font-normal">
                    <a href="mailto:{{ $email_primary }}" class="hover:text-white" rel="noopener noreferrer">{{ $email_primary }}</a>
                </p>
            </div>
          </div>
        </section>
      </div>
    </div>
  </footer>
@include('components.partials.copyright')
