<x-layouts.app title="Donaciones">
    <x-hero-section
        nombreImagen="donation"
        titulo="Sé parte del crecimiento de nuestra institución"
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
        <main class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Columna 1 --}}
            <div class="flex flex-col justify-between space-y-2 text-center md:text-left">
                <h2 class="font-bold text-5xl">Apoya al Colegio</h2>
                <span class="font-semibold text-xl text-wine-800">Tu contribución importa</span>
                <p class="text-sm">Contribuye a la educación de calidad de nuestros estudiantes. Tus donaciones nos ayudan a mejorar las instalaciones, ofrecer más becas y asegurar un entorno de aprendizaje óptimo para todos. Únete a nuestra causa y sé parte del cambio.</p>
            </div>
            {{-- Columna 2 --}}
            <picture>
                <source srcset="{{ asset('images/donation.webp') }}" type="image/webp">
                    <source srcset="{{ asset('images/donation.avif') }}" type="image/avif">
                        <img
                        src="{{ asset('images/donation.jpg') }}"
                        alt="Estudiantes del {{ $name }}"
                        class="rounded-lg md:rounded-2xl h-48 w-full object-cover"
                        >
                    </picture>

                </main>
            </x-content>

            <x-content class="bg-neutral-900 pb-8">
                <div class="w-[75%] mx-auto rounded-full bg-neutral-800 py-6 px-56 text-gray-500 flex justify-between mt-8 mb-6">
                    <svg class="transition-all duration-200 hover:text-wine-600" width="45" height="36" viewBox="0 0 45 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40.5 0.000488281H4.5C3.30653 0.000488281 2.16193 0.474594 1.31802 1.31851C0.474106 2.16242 0 3.30701 0 4.50049V31.5005C0 32.694 0.474106 33.8386 1.31802 34.6825C2.16193 35.5264 3.30653 36.0005 4.5 36.0005H40.5C41.6935 36.0005 42.8381 35.5264 43.682 34.6825C44.5259 33.8386 45 32.694 45 31.5005V4.50049C45 3.30701 44.5259 2.16242 43.682 1.31851C42.8381 0.474594 41.6935 0.000488281 40.5 0.000488281ZM40.5 4.50049V9.00049H4.5V4.50049H40.5ZM4.5 31.5005V18.0005H40.5V31.5005H4.5ZM9 22.5005H24.75V27.0005H9V22.5005ZM29.25 22.5005H36V27.0005H29.25V22.5005Z" fill="currentColor"/>
                    </svg>
                    <svg class="transition-all duration-200 hover:text-wine-600" width="45" height="35" viewBox="0 0 45 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5556 17.6718C14.5556 18.6252 13.7977 19.3508 12.8373 19.3508C12.1187 19.3508 11.5871 18.9444 11.5871 18.1794C11.5871 17.226 12.3296 16.461 13.283 16.461C14.01 16.461 14.5556 16.9068 14.5556 17.6718ZM6.28996 13.8835H5.92294C5.80622 13.8835 5.6881 13.9622 5.67264 14.0944L5.33655 16.1812L5.97778 16.1573C6.83697 16.1573 7.5007 16.0406 7.65679 15.0478C7.83679 14.0002 7.17306 13.8835 6.28996 13.8835ZM28.4771 13.8835H28.1255C27.9849 13.8835 27.8907 13.9622 27.8752 14.0944L27.5476 16.1812L28.1719 16.1573C29.1872 16.1573 29.8903 15.9225 29.8903 14.7511C29.8819 13.9228 29.1422 13.8835 28.4771 13.8835ZM45 3.75035V31.2501C44.9989 32.2444 44.6034 33.1977 43.9003 33.9008C43.1972 34.6039 42.244 34.9994 41.2497 35.0005H3.75035C2.75604 34.9994 1.80277 34.6039 1.09969 33.9008C0.3966 33.1977 0.00111658 32.2444 0 31.2501V3.75035C0.00111658 2.75604 0.3966 1.80277 1.09969 1.09969C1.80277 0.3966 2.75604 0.00111658 3.75035 0H41.2497C42.244 0.00111658 43.1972 0.3966 43.9003 1.09969C44.6034 1.80277 44.9989 2.75604 45 3.75035ZM10.0248 14.3278C10.0248 12.6868 8.75926 12.1398 7.31368 12.1398H4.18909C4.08815 12.1406 3.99101 12.1784 3.9161 12.246C3.84119 12.3137 3.79372 12.4065 3.78269 12.5068L2.50164 20.4828C2.47774 20.6389 2.59586 20.795 2.75195 20.795H4.2369C4.44783 20.795 4.64329 20.5686 4.6672 20.3492L5.01875 18.2708C5.0975 17.7084 6.0495 17.9038 6.42496 17.9038C8.65942 17.9038 10.0248 16.5778 10.0248 14.3278ZM16.6031 15.0155H15.1181C14.8214 15.0155 14.8059 15.4458 14.7905 15.6567C14.3377 14.993 13.681 14.8748 12.9385 14.8748C11.0247 14.8748 9.56361 16.5539 9.56361 18.4058C9.56361 19.9288 10.517 20.9215 12.0399 20.9215C12.743 20.9215 13.6177 20.539 14.1099 19.992C14.0648 20.1501 14.0384 20.3129 14.0311 20.4772C14.0311 20.6572 14.1099 20.7894 14.2814 20.7894H15.6258C15.8367 20.7894 16.0167 20.563 16.0561 20.3436L16.8534 15.3206C16.8773 15.1716 16.7592 15.0155 16.6031 15.0155ZM19.767 22.6638L24.7436 15.4289C24.783 15.3895 24.783 15.3501 24.783 15.2967C24.783 15.1645 24.6663 15.0239 24.5327 15.0239H23.0322C22.9625 15.027 22.8944 15.0462 22.8334 15.0802C22.7724 15.1141 22.7201 15.1618 22.6807 15.2194L20.6108 18.2666L19.7516 15.3375C19.7188 15.2487 19.6604 15.1717 19.5838 15.1161C19.5072 15.0605 19.4158 15.0289 19.3213 15.0253H17.8602C17.7266 15.0253 17.6099 15.1659 17.6099 15.2981C17.6099 15.3923 19.1328 19.7361 19.2664 20.1495C19.0555 20.4462 17.6648 22.384 17.6648 22.6188C17.6648 22.7594 17.7815 22.8691 17.9151 22.8691H19.4155C19.4856 22.8642 19.5537 22.8434 19.6146 22.8083C19.6755 22.7733 19.7276 22.722 19.767 22.6638ZM32.212 14.3278C32.212 12.6868 30.9464 12.1398 29.5008 12.1398H26.3987C26.2951 12.1398 26.1948 12.1768 26.116 12.244C26.0371 12.3113 25.9848 12.4045 25.9684 12.5068L24.7028 20.4758C24.6874 20.6319 24.8041 20.7879 24.9531 20.7879H26.5548C26.7109 20.7879 26.8276 20.6712 26.867 20.5376L27.2185 18.2722C27.2973 17.7098 28.2507 17.9052 28.6247 17.9052C30.8437 17.9052 32.212 16.5778 32.212 14.3278ZM38.7888 15.0155H37.3038C37.0071 15.0155 36.9917 15.4458 36.9678 15.6567C36.5375 14.993 35.8737 14.8748 35.1158 14.8748C33.2019 14.8748 31.7409 16.5539 31.7409 18.4058C31.7409 19.9288 32.6943 20.9215 34.2172 20.9215C34.9442 20.9215 35.8189 20.539 36.2871 19.992C36.2632 20.1087 36.2084 20.3591 36.2084 20.4772C36.2084 20.6572 36.2871 20.7894 36.4587 20.7894H37.8101C38.021 20.7894 38.201 20.563 38.2404 20.3436L39.0377 15.3206C39.0616 15.1716 38.9449 15.0155 38.7888 15.0155ZM42.4998 12.414C42.4998 12.2579 42.3831 12.1412 42.2495 12.1412H40.8039C40.6872 12.1412 40.569 12.2354 40.5536 12.3521L39.288 20.4772L39.2655 20.5165C39.2655 20.6572 39.3822 20.7894 39.5383 20.7894H40.8278C41.0233 20.7894 41.2187 20.563 41.2342 20.3436L42.4998 12.4379V12.414ZM35.4687 16.461C34.5153 16.461 33.7729 17.219 33.7729 18.1794C33.7729 18.9374 34.3199 19.3508 35.0384 19.3508C35.9764 19.3508 36.7343 18.6322 36.7343 17.6718C36.7428 16.9068 36.1957 16.461 35.4687 16.461Z" fill="currentColor"/>
                    </svg>
                    <svg class="transition-all duration-200 hover:text-wine-600" width="45" height="36" viewBox="0 0 45 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 36.0005C6.525 36.0005 4.40625 35.1192 2.64375 33.3567C0.88125 31.5942 0 29.4755 0 27.0005V9.00049C0 6.52549 0.88125 4.40674 2.64375 2.64424C4.40625 0.881739 6.525 0.000488281 9 0.000488281H36C38.475 0.000488281 40.5938 0.881739 42.3563 2.64424C44.1188 4.40674 45 6.52549 45 9.00049V27.0005C45 29.4755 44.1188 31.5942 42.3563 33.3567C40.5938 35.1192 38.475 36.0005 36 36.0005H9ZM9 9.00049H36C36.825 9.00049 37.6125 9.09424 38.3625 9.28174C39.1125 9.46924 39.825 9.76924 40.5 10.1817V9.00049C40.5 7.76299 40.0597 6.70399 39.1792 5.82349C38.2987 4.94299 37.239 4.50199 36 4.50049H9C7.7625 4.50049 6.7035 4.94149 5.823 5.82349C4.9425 6.70549 4.5015 7.76449 4.5 9.00049V10.1817C5.175 9.76924 5.8875 9.46924 6.6375 9.28174C7.3875 9.09424 8.175 9.00049 9 9.00049ZM4.8375 16.313L29.8687 22.388C30.2062 22.463 30.5438 22.463 30.8813 22.388C31.2188 22.313 31.5375 22.163 31.8375 21.938L39.6562 15.413C39.2437 14.8505 38.7187 14.3915 38.0812 14.036C37.4437 13.6805 36.75 13.502 36 13.5005H9C8.025 13.5005 7.17225 13.754 6.44175 14.261C5.71125 14.768 5.1765 15.452 4.8375 16.313Z" fill="currentColor"/>
                    </svg>


                </div>
                <main class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    @foreach ($bancos as $index => $banco)
                        <x-bank-card
                            :titulo="$banco['name']"
                            :cci="$banco['cci']"
                            :cuenta="$banco['account']"
                        />
                    @endforeach
                </main>
            </x-content>

            {{-- Sección de preguntas --}}
            <div class="bg-wine-700">
                <x-content>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Primera pregunta -->
                <article class="flex items-center">
                    <img src="{{ asset('images/svg/pregunta_donation.svg') }}" alt="Ícono de pregunta" class="w-12 h-12 mr-6">
                    <section class="text-white">
                        <h5 class="font-semibold text-lg">¿Cómo puedo donar?</h5>
                        <p class="text-xs">Puedes realizar tu donación de manera segura a través de nuestra plataforma en línea.</p>
                    </section>
                </article>

                <!-- Segunda pregunta -->
                <article class="flex items-center">
                    <img src="{{ asset('images/svg/pregunta_donation.svg') }}" alt="Ícono de pregunta" class="w-12 h-12 mr-6">
                    <section class="text-white">
                        <h5 class="font-semibold text-lg">¿Mi donación es deducible de impuestos?</h5>
                        <p class="text-xs">Sí, tu donación es deducible de impuestos. Emitimos recibos para que puedas hacer la deducción correspondiente.</p>
                    </section>
                </article>
            </div>
        </x-content>
    </div>

</x-layouts.app>

