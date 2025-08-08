@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <!-- Header Section -->
    <section class="relative pt-60 pb-30 mb-0">
        <!-- Background Image -->
        <img src="{{ asset('assets/img/contact/fondo.png') }}" alt="Hero Background"
            class="absolute inset-0 w-full h-full object-cover z-0">

        <!-- Overlay -->
        <div class="relative z-10 max-w-[90%] mx-auto px-4 flex flex-col lg:flex-row items-center justify-between pt-10">

            <!-- Left Content -->
            <div class="w-full lg:w-2/3 text-center lg:text-left">
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Impulsa tu negocio con una
                </h1>
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                    conexión que transforma
                </h1>
                <p
                    class="text-base sm:text-lg md:text-xl text-white mb-8 max-w-2xl mx-auto lg:mx-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Escala tus ventas, automatiza tu atención y crece sin límites
                </p>
                <a href="{{ route('contact.index') }}"
                    class="bg-orange-500 text-white text-lg lg:text-2xl px-6 py-3 mt-5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-orange-400 inline-block"
                    style="will-change: transform;" onmouseover="this.style.transform='scale(1.12)'"
                    onmouseout="this.style.transform='scale(1)'">
                    Registrate gratis
                </a>
            </div>

            <!-- Right Content -->
            <div
                class="relative lg:absolute lg:right-0 lg:top-1/2 lg:translate-y-[-50%] w-full lg:mr-[-110px] lg:w-1/2 flex justify-center lg:justify-end mt-12 z-10">
                <img src="{{ asset('assets/img/contact/Pose.png') }}" alt="Hero Image"
                    class="w-full h-auto object-contain rotate-y-180">
            </div>
        </div>
    </section>
    <!-- End Header Section -->
    <section class="bg-[#f2f0f0] w-full px-6 py-10 ">
        <div class="max-w-7xl lg:max-w-9/10 mx-auto flex flex-col lg:flex-row items-center justify-evenly gap-10">

            <!-- Texto a la izquierda -->
            <div class="w-full lg:w-1/3 text-center lg:text-left">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-orange-500 mb-4 leading-tight">
                    ¿Estás listo para <br class="hidden sm:block" />comenzar?
                </h2>
                <p class="text-xl text-black mb-8 max-w-md mx-auto lg:mx-0">
                    Escríbenos y descubre todo lo que Amotii puede hacer por ti
                </p>

                <!-- Info de contacto -->
                <div class="text-left space-y-6 text-black text-lg">
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                            fill="#000">
                            <path
                                d="M480.06-486.67q30.27 0 51.77-21.56 21.5-21.55 21.5-51.83 0-30.27-21.56-51.77-21.55-21.5-51.83-21.5-30.27 0-51.77 21.56-21.5 21.55-21.5 51.83 0 30.27 21.56 51.77 21.55 21.5 51.83 21.5ZM480-168q129.33-118 191.33-214.17 62-96.16 62-169.83 0-114.86-73.36-188.1-73.36-73.23-179.97-73.23T300.03-740.1q-73.36 73.24-73.36 188.1 0 73.67 63 169.83Q352.67-286 480-168Zm0 88Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                        </svg>
                        <p class="text-2xl"><b>Dirección:</b></p>
                    </div>
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                            fill="#000">
                            <path
                                d="M266.67-40q-27.5 0-47.09-19.58Q200-79.17 200-106.67v-746.66q0-27 19.83-46.84Q239.67-920 266.67-920H692q27.5 0 47.08 19.58 19.59 19.59 19.59 47.09V-712q18 4.33 29.66 18.64Q800-679.06 800-660.95v76.28q0 19-11.67 33.34-11.66 14.33-29.66 18.66v426q0 27.5-19.59 47.09Q719.5-40 692-40H266.67Zm0-66.67H692v-746.66H266.67v746.66Zm0 0v-746.66 746.66ZM479.33-720q13.67 0 23.5-9.83 9.84-9.84 9.84-23.5 0-13.67-9.84-23.5-9.83-9.84-23.5-9.84-13.66 0-23.5 9.84Q446-767 446-753.33q0 13.66 9.83 23.5 9.84 9.83 23.5 9.83Z" />
                        </svg>
                        <p class="text-2xl"><b>Teléfono:</b></p>
                    </div>
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="http://www.w3.org/2000/svg" width="40px"
                            fill="#000">
                            <path
                                d="M140-160q-24 0-42-18t-18-42v-520q0-24 18-42t42-18h680q24 0 42 18t18 42v520q0 24-18 42t-42 18H140Zm340-302L140-685v465h680v-465L480-462Zm0-60 336-218H145l335 218ZM140-685v-55 520-465Z" />
                        </svg>
                        <p class="text-2xl"><b>Correo:</b></p>
                    </div>
                </div>
            </div>

            <!-- Imagen personaje -->
            <div class="w-full lg:w-1/3 flex justify-center">
                <img src="{{ asset('assets/img/contact/pose1.png') }}" alt="Bot Amotii"
                    class="max-w-[280px] sm:max-w-[300px] lg:max-w-[500px]" />
            </div>

            <!-- Formulario -->
            @include('livewire.contact-form')
        </div>
    </section>
@endsection
