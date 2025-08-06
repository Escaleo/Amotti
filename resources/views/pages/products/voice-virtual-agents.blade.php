@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <!-- Header Section -->
    <section class="relative pt-60 pb-30 mb-0">
        <!-- Background Image -->
        <img src="{{ asset('assets/img/products/tiicall/fondo_header.png') }}" alt="Hero Background"
            class="absolute inset-0 w-full h-full object-cover z-0">

        <!-- Overlay -->
        <div class="relative z-10 max-w-[90%] mx-auto px-4 flex flex-col lg:flex-row items-center justify-between pt-10">

            <!-- Left Content -->
            <div class="w-full lg:w-2/3 text-center lg:text-left">
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Agentes virtuales de voz que venden,
                </h1>
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                    agendan y conectan por ti
                </h1>
                <p
                    class="text-base sm:text-lg md:text-xl text-white mb-8 max-w-2xl mx-auto lg:mx-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Automatiza llamadas entrantes y salientes con inteligencia artificial conversacional, sin intervención
                    humana y en tiempo real
                </p>
                <a href="{{ route('contact') }}"
                    class="bg-orange-500 text-white text-lg lg:text-2xl px-6 py-3 mt-5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-orange-400 inline-block"
                    style="will-change: transform;" onmouseover="this.style.transform='scale(1.12)'"
                    onmouseout="this.style.transform='scale(1)'">
                    {{ __('Request your free demo') }}
                </a>
            </div>

            <!-- Right Content -->
            <div
                class="relative lg:absolute lg:right-0 lg:top-1/2 lg:translate-y-[-50%] w-full lg:w-1/2 flex justify-center lg:justify-end mt-10 lg:mt-0 z-10">
                <img src="{{ asset('assets/img/products/tiicall/Pose_1_Amotii_v02.png') }}" alt="Hero Image"
                    class="w-[300px] sm:w-[350px] md:w-[450px] lg:w-[550px] xl:w-[600px] max-w-full hover:scale-105 transition-transform duration-300 ease-in-out">
            </div>
        </div>
    </section>
    <!-- End Header Section -->

    <!-- block1 -->
    <section class="bg-[#efeded] relative pt-20 pb-70 overflow-hidden">
        <!-- Imagen de fondo -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/products/tiicall/fondo_b1.png') }}" alt="Fondo Hero"
                class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black opacity-30"></div>
        </div>

        <!-- Contenido principal -->
        <div class="relative z-20 max-w-7xl mx-auto px-4 flex flex-col items-center text-center">
            <!-- Título -->
            <h2
                class="text-4xl md:text-5xl lg:text-5xl font-extrabold text-orange-500 leading-tight mb-6 hover:scale-105 transition-transform duration-300 ease-in-out">
                Conversaciones inteligentes que aceleran tus ventas
            </h2>

            <!-- Descripción -->
            <p
                class="text-2xl md:text-xl text-white font-light max-w-4xl mb-10 leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                Con nuestros agentes virtuales de voz, cada llamada es atendida al instante, calificada con<br>
                precisión y agendada con tu equipo comercial.<br>
                La voz de tu empresa evoluciona con inteligencia artificial
            </p>

            <h3
                class="text-4xl md:text-5xl lg:text-3xl font-extrabold text-white leading-tight mb-6 hover:scale-105 transition-transform duration-300 ease-in-out"">
                Descubre cómo suena el futuro de la automatización</h3>
        </div>

    </section>

    <!-- Video -->
    <div class="bg-[#efeded] w-full flex justify-center z-20 mb-40" style="margin-top: -15rem;">
        <div class="relative w-full max-w-4xl aspect-video overflow-hidden shadow-4xl inset-3 ">
            <iframe width="50%" height="50%"
                src="https://www.youtube.com/embed/G8Rxbg9Ol_8?rel=0&showinfo=0&autoplay=0&mute=0" title="Hero video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen class=" absolute w-full h-full mt-0">
            </iframe>
        </div>
    </div>

    <!-- End block1 -->

    <!-- Start block2 -->
    <section class="pt-0 pb-30 bg-[#efeded]" x-data="tabSection()">
        <!-- Título y descripción -->
        <div class="flex max-w-6xl mx-auto flex-col justify-center items-center px-4">
            <h1
                class="text-5xl text-orange-500 font-bold text-center mb-5 hover:scale-105 transition-transform duration-300 ease-in-out">
                Inteligencia artificial que marca la diferencia e incrementa tus ventas
            </h1>
            <p
                class="text-center max-w-3xl text-xl text-black font-semibold tracking-wide mb-12 hover:scale-105 transition-transform duration-300 ease-in-out">
                Amotii es tu solución conversacional inteligente capaz de resolver múltiples necesidades operativas con
                fluidez, eficiencia y voz natural 24/7
            </p>
        </div>

        <!-- Tabs + Contenido -->
        <div class="max-w-7xl mx-auto px-4">
            <!-- Tabs -->
            <div class="flex flex-wrap justify-between border-b border-gray-200 mb-10 text-sm sm:text-base font-semibold">
                <template x-for="(tab, index) in tabs" :key="index">
                    <button @click="selected = index"
                        class="flex-1 text-center py-3 transition duration-300 border-b-2 min-w-[100px]"
                        :class="selected === index ?
                            'border-orange-500 text-black' :
                            'border-transparent text-gray-600 hover:text-orange-500 hover:border-orange-300'">
                        <span class="leading-tight block" x-html="tab.title"></span>
                    </button>
                </template>
            </div>

            <!-- Content -->
            <div class="flex flex-col lg:flex-row items-center justify-between gap-10 min-h-[500px]">

                <!-- Left Text -->
                <div class="w-full lg:w-1/2 flex justify-center items-center">
                    <div
                        class="max-w-md text-center lg:text-left flex flex-col gap-5 hover:scale-105 transition-transform duration-300 ease-in-out">
                        <h2 class="text-2xl font-semibold tracking-wide text-black" x-text="tabs[selected].content.title">
                        </h2>
                        <p class="text-black font-light tracking-wide text-2xl" x-text="tabs[selected].content.text"></p>
                    </div>
                </div>

                <!-- Right Side: Card + Phone -->
                <div class="w-full flex flex-col lg:flex-row justify-end items-center lg:items-stretch gap-6">

                    <!-- Card "Dale play" -->
                    <div
                        class="bg-[#2f2f2f] text-white rounded-4xl p-6 flex flex-col items-center justify-evenly text-center w-full aspect-[9/16] max-w-[320px] lg:max-w-[250px] min-w-[200px] shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                        <p class="text-base sm:text-lg lg:text-xl font-semibold tracking-wide mb-4">Dale play</p>
                        <button class="flex items-center justify-center hover:scale-105 transition transform duration-300">
                            <img src="{{ asset('assets/img/products/tiicall/icons/play.png') }}" alt="Play"
                                class="w-14 sm:w-16 lg:w-20">
                        </button>
                        <p class="mt-4 text-base sm:text-lg lg:text-xl font-semibold leading-snug">
                            Y escucha a TiiCall<br>en este caso de uso
                        </p>
                    </div>

                    <!-- Phone Image -->
                    <div
                        class="w-full aspect-[9/16] max-w-[320px] lg:max-w-[250px] min-w-[200px] flex justify-center items-center rounded-4xl overflow-hidden shadow-lg">
                        <img :src="tabs[selected].content.image" alt="Phone"
                            class="w-full h-full object-contain hover:scale-105 transition-transform duration-300 ease-in-out">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Srtart block3 -->
    <section class="w-full bg-[#ff6600] text-white py-20 px-6 shadow-xl">
        <div class="max-w-7xl mx-auto text-center">
            <!-- Título principal -->
            <h2
                class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                Automatiza, acelera y conquista desde la primera llamada
            </h2>

            <!-- Subtítulo -->
            <p
                class="text-base sm:text-lg lg:text-xl max-w-3xl mx-auto mb-12 font-light hover:scale-105 transition-transform duration-300 ease-in-out">
                Nuestros agentes virtuales de voz están diseñados para darte ventaja desde<br class="hidden sm:block" />
                el primer contacto, mira lo que puedes lograr
            </p>

            <!-- Estadísticas -->
            <div class="flex flex-col md:flex-row justify-evenly items-center gap-10 md:gap-6 max-w-5xl mx-auto">
                <!-- Item -->
                <div class="flex justify-center items-center hover:scale-105 transition-transform duration-300 ease-in-out">
                    <div
                        class="w-52 h-52 sm:w-56 sm:h-56 lg:w-60 lg:h-60 rounded-full p-[7px] bg-gradient-to-b from-neutral-900 to-neutral-500 shadow-inner flex items-center justify-center">
                        <div
                            class="w-full h-full rounded-full bg-[#fd8632] flex flex-col justify-center items-center text-center px-4 text-white font-bold">
                            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light">+300%</h1>
                            <p class="text-base sm:text-lg lg:text-2xl font-normal mt-2 leading-snug">Más contactos
                                calificados</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="flex justify-center items-center hover:scale-105 transition-transform duration-300 ease-in-out">
                    <div
                        class="w-52 h-52 sm:w-56 sm:h-56 lg:w-60 lg:h-60 rounded-full p-[7px] bg-gradient-to-b from-neutral-900 to-neutral-500 shadow-inner flex items-center justify-center">
                        <div
                            class="w-full h-full rounded-full bg-[#fd8632] flex flex-col justify-center items-center text-center px-4 text-white font-bold">
                            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light">-70%</h1>
                            <p class="text-base sm:text-lg lg:text-2xl font-normal mt-2 leading-snug">Menos tiempo en tareas
                                operativas</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="flex justify-center items-center hover:scale-105 transition-transform duration-300 ease-in-out">
                    <div
                        class="w-52 h-52 sm:w-56 sm:h-56 lg:w-60 lg:h-60 rounded-full p-[7px] bg-gradient-to-b from-neutral-900 to-neutral-500 shadow-inner flex items-center justify-center">
                        <div
                            class="w-full h-full rounded-full bg-[#fd8632] flex flex-col justify-center items-center text-center px-4 text-white font-bold">
                            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light">+4X</h1>
                            <p class="text-base sm:text-lg lg:text-2xl font-normal mt-2 leading-snug">Mayor velocidad de
                                respuesta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End block3 -->

    <!-- Start block4 -->
    <section class="w-full bg-[#efeded] py-20 px-6 shadow-xl">
        <div class="max-w-7xl mx-auto text-center">
            <!-- Título principal -->
            <h2
                class="text-3xl sm:text-4xl lg:text-5xl text-orange-500 font-extrabold leading-tight mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                Tecnología conversacional que se adapta a tu negocio
            </h2>

            <!-- Subtítulo -->
            <p
                class="text-base text-black sm:text-lg lg:text-xl max-w-4xl mx-auto mb-12 font-light hover:scale-105 transition-transform duration-300 ease-in-out">
                Los Agentes Virtuales de Voz de Amotii no solo responden: comprenden, interpretan y actúan con
                naturalidad. Gracias a su entrenamiento contextual, cada conversación refleja el tono, intención y
                objetivos de tu empresa
            </p>

            <!-- Call to Action -->
            <div
                class="max-w-6xl mx-auto px-4 text-center mt-12 hover:scale-105 transition-transform duration-300 ease-in-out">
                <a href="{{ route('contact') }}"
                    class="bg-orange-500 text-white text-lg lg:text-2xl px-6 py-3 mt-5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-orange-400 inline-block"
                    style="will-change: transform;" onmouseover="this.style.transform='scale(1.12)'"
                    onmouseout="this.style.transform='scale(1)'">
                    {{ __('Request your free demo') }}
                </a>
            </div>
            <!-- Call to Action End -->
        </div>
    </section>
    <!-- End block4 -->

    <!-- Start block5 -->
    <section class="w-full bg-[#efeded] text-black py-20 px-6">
        <div class=" max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-12">
            <!-- Texto -->
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Voz natural y fluida</h2>
                <p class="text-lg mb-8 font-light leading-relaxed">
                    Nuestros agentes utilizan tecnología de síntesis de voz de última generación, logrando entonaciones,
                    pausas y modulación propias del lenguaje humano.
                </p>

                <!-- Lista -->
                <ul class="space-y-6 text-lg">
                    <li class="flex items-start gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px"
                            fill="#000">
                            <path
                                d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                        </svg>
                        <p>
                            La experiencia auditiva es tan cercana y realista que tus clientes no notarán la diferencia
                        </p>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px"
                            fill="#000">
                            <path
                                d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                        </svg>
                        <p>
                            Una voz que transmite confianza, empatía y profesionalismo desde el primer segundo
                        </p>
                    </li>
                </ul>
            </div>

            <div class="relative w-full lg:w-1/2 flex flex-col sm:flex-row justify-center items-center gap-8">
                <!-- Imágenes -->
                <div class="absolute w-full flex flex-col sm:flex-row justify-center items-center gap-8">
                    <!-- Grabación -->
                    <img src="{{ asset('assets/img/products/tiicall/grabacion.png') }}" alt="Grabación"
                        class="w-[250px] sm:w-[300px] lg:w-[320px] object-contain drop-shadow-lg" />

                    <!-- Personaje -->
                    <img src="{{ asset('assets/img/products/tiicall/Pose_3_amotii.png') }}" alt="Personaje"
                        class="w-[300px] sm:w-[400px] lg:w-[500px] object-contain drop-shadow-lg" />
                </div>
            </div>
        </div>
    </section>
    <!-- End block5 -->

    <!-- Start block5 -->
    <section class="w-full bg-white pt-30 pb-20 px-4" x-data="carouselSection()">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-10">

            <!-- Left Section -->
            <div class="lg:w-1/2 text-left">
                <h2
                    class="text-4xl md:text-5xl font-bold text-orange-500 leading-tight mb-6 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Transforma tu atención con<br class="hidden sm:block"> IA conversacional
                </h2>
                <p
                    class="text-lg text-black font-light max-w-xl hover:scale-105 transition-transform duration-300 ease-in-out">
                    Amotii tu IA conversacional que atiende al instante, sin pausas y en todos tus canales. Automatiza
                    tu
                    flujo y acelera cada venta desde la primera llamada.
                </p>
            </div>

            <!-- Right Section -->
            <div class="lg:w-1/2 flex flex-col items-center hover:scale-105 transition-transform duration-300 ease-in-out">
                <!-- Card -->
                <div
                    class="relative bg-gradient-to-b from-orange-500 via-orange-300 to-orange-100 rounded-3xl p-10 text-white text-center max-w-sm h-[400px] flex flex-col justify-between">

                    <!-- Floating Icon -->
                    <div
                        class="absolute -top-10 left-1/2 -translate-x-1/2 bg-neutral-900 w-20 h-20 rounded-3xl flex items-center justify-center shadow-lg">
                        <img :src="slides[selected].icon" alt="icon" class="w-20 h-20">
                    </div>

                    <!-- Content -->
                    <div class="mt-10">
                        <h3 class="text-2xl font-bold" x-text="slides[selected].title"></h3>
                        <p class="text-base font-semibold mt-1 mb-4" x-text="slides[selected].subtitle"></p>
                        <p class="text-sm font-light leading-relaxed" x-text="slides[selected].description"></p>
                    </div>

                    <!-- Button -->
                    <div class="mt-6">
                        <a :href="slides[selected].link"
                            class="inline-block bg-orange-500 text-white font-bold px-6 py-2 rounded-xl shadow hover:bg-white hover:text-orange-500 transition">
                            Quiero saber más
                        </a>
                    </div>
                </div>

                <!-- Dots -->
                <div class="flex space-x-2 mt-6">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="selected = index"
                            :class="selected === index ? 'bg-orange-500 scale-110' : 'bg-orange-300'"
                            class="w-4 h-4 rounded-full transition-all duration-300">
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </section>
    <!-- End block5 -->

    <!-- Start block6 -->
    <section class="relative w-full py-18 text-white" style="z-index: 0;" x-data>
        <!-- Fondo -->
        <div class="absolute inset-0 w-full h-full z-0">
            <img src="{{ asset('assets/img/index/fondo_(block4).png') }}" alt="fondo" class="w-full h-full ">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Contenido -->
        <div class="relative z-10 max-w-9/10 mx-auto flex flex-col lg:flex-row items-center justify-between gap-10">

            <!-- IZQUIERDA -->
            <div class="w-full lg:w-1/3 text-center lg:text-left">
                <h1
                    class="text-5xl font-bold mb-4 leading-tight hover:scale-105 transition-transform duration-300 ease-in-out">
                    Déjanos tus datos
                </h1>
                <h3
                    class="text-xl font-light max-w-md mx-auto lg:mx-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                    y descubre cómo Amotii potencia tus ventas y la atención a tus clientes
                </h3>
            </div>

            <!-- FORMULARIO -->
            <div
                class="w-full lg:w-1/3 bg-orange-500 rounded-[2rem] p-8 flex flex-col justify-center items-center shadow-xl">
                <form action="#" method="POST" class="w-full space-y-4 text-black font-light">

                    <!-- Nombres -->
                    <input type="text" name="nombre" placeholder="Nombres"
                        class="w-full bg-white px-5 py-3 rounded-full focus:outline-none focus:ring-2 ring-orange-300">

                    <!-- Teléfono -->
                    <div class="w-full">
                        <label for="telefono_pais" class="block mb-2 text-sm font-medium text-gray-700">
                            Selecciona tu país
                        </label>
                        <div class="relative">
                            <select id="telefono_pais" name="telefono_pais"
                                class="w-full appearance-none px-5 py-3 pr-10 bg-white text-gray-800 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition duration-200">
                                <option value="+57">🇨🇴 +57 Colombia</option>
                                <option value="+52">🇲🇽 +52 México</option>
                                <option value="+54">🇦🇷 +54 Argentina</option>
                            </select>

                            <!-- Icono flecha personalizada -->
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <input type="email" name="email" placeholder="E-mail"
                        class="w-full px-5 py-3 bg-white rounded-full focus:outline-none focus:ring-2 ring-orange-300">

                    <!-- Web -->
                    <input type="text" name="web" placeholder="Página Web"
                        class="w-full px-5 py-3 bg-white rounded-full focus:outline-none focus:ring-2 ring-orange-300">

                    <!-- Check -->
                    <div class="flex items-start text-sm mt-2 text-white">
                        <input type="checkbox" id="privacidad" required class="mt-1 mr-2">
                        <label for="privacidad">
                            He leído y acepto los <a href="#" class="underline">términos y condiciones</a> de la
                            <a href="#" class="underline">política de privacidad</a>
                        </label>
                    </div>

                    <!-- Botón -->
                    <div class="text-center pt-4">
                        <button type="submit"
                            class="bg-black w-full text-white font-semibold cursor-pointer py-2 px-6 rounded-full hover:bg-gray-900  hover:scale-105 transition-transform duration-300 ease-in-out">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>

            <!-- DERECHA (IMAGEN DE PERSONAJE) -->
            <div class="relative w-full sm:w-0 md:w-0 lg:w-1/3 flex justify-center items-center">
                <img src="{{ asset('assets/img/index/Pose_2_Amotii_v02.png') }}" alt="Personaje"
                    class="absolute w-[240px] lg:w-[500px] hover:scale-105 transition-transform duration-300 ease-in-out">
            </div>
        </div>
    </section>

@endsection
