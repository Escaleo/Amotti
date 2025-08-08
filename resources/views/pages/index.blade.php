@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    @include('layouts.header')

    <!-- block1 -->
    <section class="relative pt-20 pb-70 overflow-hidden">
        <!-- Imagen de fondo -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/index/fondo_(block1).png') }}" alt="Fondo Hero"
                class="w-full h-full object-cover" />
        </div>

        <!-- Capa oscura superpuesta -->
        <div class="absolute inset-0 bg-black opacity-30"></div>

        <!-- Contenido principal -->
        <div class="relative z-20 max-w-7xl mx-auto px-4 flex flex-col items-center text-center">
            <!-- Título -->
            <h2
                class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6 hover:scale-105 transition-transform duration-300 ease-in-out">
                La nueva era de las ventas comienza con una llamada
            </h2>

            <!-- Descripción -->
            <p
                class="text-lg md:text-xl text-white font-light max-w-4xl mb-10 leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                <strong>Amotii combina inteligencia artificial</strong>, voz humana y automatización para atraer,
                convertir y agendar en tiempo real. Mientras otros aún responden chats, tu negocio ya está cerrando
                ventas con <strong>llamadas inteligentes 24/7</strong>.
            </p>
    </section>

    <!-- Video -->
    @include('partials.media')
    <!-- Video End -->
    <!-- End block1 -->

    <!-- Start block2 -->
    <section class="pt-10 pb-20">

        <div class="max-w-6xl mx-auto px-4">
            <h1
                class="text-5xl text-orange-500 font-bold text-center mb-5 hover:scale-105 transition-transform duration-300 ease-in-out ">
                Agentes virtuales de voz que venden por ti</h1>
            <h3
                class="text-center text-2xl text-black font-semibold tracking-wide mb-12 hover:scale-105 transition-transform duration-300 ease-in-out">
                Escala tu fuerza comercial sin
                contratar más personal</h3>
            <p class="text-center text-black text-xl mb-12 hover:scale-105 transition-transform duration-300 ease-in-out">
                Nuestros agentes con inteligencia artificial conversacional
                realizan llamadas automáticas, responden como humanos, califican prospectos y agendan citas todo mientras tu
                equipo se enfoca en cerrar ventas. Atienden al instante, sin errores y sin pausas</p>
        </div>

        <!-- Features Start-->
        @php
            $cards = [
                [
                    'icon' => asset('assets/img/index/icons/expert_17115968.svg'),
                    'front' => "Llamadas automatizadas,\nnaturales y efectivas",
                    'back' =>
                        'Nuestros agentes suenan naturales, adaptan sus respuestas y guían conversaciones con fluidez. Cada llamada es precisa, personalizada y a escala',
                ],
                [
                    'icon' => 'assets/img/index/icons/recruitment_1428000 1.png',
                    'front' => 'Calificación inteligente de leads',
                    'back' =>
                        'Identifican el interés, perfil y urgencia del cliente con preguntas estratégicas. Segmentan en tiempo real y priorizan los prospectos listos para convertir.',
                ],
                [
                    'icon' => 'assets/img/index/icons/calendar_12507940 1.png',
                    'front' => 'Agendamiento sincronizado con tu calendario',
                    'back' =>
                        'Conectados a tu agenda, nuestros agentes reservan espacios disponibles en segundos. Sin errores, sin fricciones y con confirmaciones automáticas',
                ],
            ];
        @endphp

        <div class="flex flex-wrap justify-center gap-8 mt-10">
            @foreach ($cards as $card)
                <x-flip-card :icon="$card['icon']" :front="$card['front']" :back="$card['back']" />
            @endforeach
        </div>
        <!-- Features End -->

        <!-- Call to Action -->
        <div class="max-w-6xl mx-auto px-4 text-center mt-12 hover:scale-105 transition-transform duration-300 ease-in-out">
            <a href="{{ route('contact') }}"
                class="bg-orange-500 text-white text-lg lg:text-2xl px-6 py-3 mt-5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-orange-400 inline-block"
                style="will-change: transform;" onmouseover="this.style.transform='scale(1.12)'"
                onmouseout="this.style.transform='scale(1)'">
                {{ __('Request your free demo') }}
            </a>
        </div>
        <!-- Call to Action End -->
    </section>
    <!-- End block2 -->

    <!-- Srtart block3 -->
    <section class="bg-[#efeded] py-16 px-4 sm:items-center sm:justify-center" x-data="productSelector()">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row lg:items-start justify-between">
            <!-- Left Column -->
            <div class="flex-1 w-full max-w-xl mb-10 lg:mb-0">
                <h1 class="text-[40px] font-bold text-orange-500 mb-4 leading-tight">
                    Todo lo que necesitas para<br>vender más, en un solo lugar
                </h1>
                <p class="text-gray-800 text-lg mb-8">
                    Amotii combina herramientas inteligentes que automatizan, escalan y conectan cada parte de tu proceso
                    comercial
                </p>

                <!-- List -->
                <div class="space-y-3 max-w-md sm:justify-center sm:items-center">
                    <template x-for="(tool, index) in tools" :key="index">
                        <button @mouseenter="selected = index" @click="window.location = tool.route"
                            class="w-full flex items-center px-5 py-3 rounded-2xl shadow-lg font-semibold text-left hover:scale-105 transition-transform duration-300 ease-in-out cursor-pointer"
                            :class="selected === index ?
                                'bg-[#fabf96] text-black' :
                                'bg-orange-500 hover:bg-orange-600 text-white'">
                            <img :src="tool.icon" alt="" class="w-6 h-6 mr-3"
                                :style="selected === index ? 'filter: invert(1);' : (tool.isWhite ? 'yes' :
                                    'filter: invert(1);')">
                            <p class="ml-3 font-light tracking-wide" x-text="tool.name"></p>
                            <p class="ml-3 font-light tracking-wide" x-text="tool.type"></p>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Right Column (Detail Panel) -->
            <div
                class="w-full max-w-lg min-h-140 bg-gradient-to-b from-orange-500 to-[#fabf96] rounded-[2rem] p-20 text-white shadow-md flex flex-col justify-center hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="flex flex-col items-start justify-center font-extralight">
                    <img :src="tools[selected].icon" alt="" class="w-30 h-30 mb-4"
                        :style="tools[selected].isWhite ? 'filter: invert(0);' : 'filter: invert(1);'">
                    <h3 class="text-3xl font-bold" x-text="tools[selected].name"></h3>
                    <div class="space-y-2 font-extralight tracking-wide">
                        <h4 class="text-xl font-extralight" x-text="tools[selected].type"></h4>
                        <p class="text-base font-light leading-relaxed" x-text="tools[selected].description"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start block4 -->
    <section class="relative w-full bg-white">
        <!-- Imagen de fondo -->
        <div class="absolute inset-0 w-full h-full pointer-events-none select-none z-0 overflow-hidden">
            <img src="{{ asset('assets/img/index/fondo_(block4).png') }}" alt="Fondo Block 4"
                class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 w-full h-full pointer-events-none bg-black opacity-35 select-none z-0"></div>

        <!-- Contenido -->
        <div class="flex flex-col-reverse lg:flex-row w-full h-full gap-10 lg:gap-20 relative z-10">
            <!-- Imagen Izquierda -->
            <div class="w-full lg:w-1/2 h-64 sm:h-96 lg:h-full">
                <img src="{{ asset('assets/img/index/img.png') }}" alt="Desarrollo a Medida"
                    class="w-full h-full object-cover">
            </div>

            <!-- Contenido Derecho -->
            <div
                class="w-full lg:w-1/2 max-w-2xl mx-auto text-white px-4 sm:px-6 lg:px-8 py-12 flex flex-col justify-center items-start text-left lg:text-left">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">Desarrollo a Medida</h2>
                <h3 class="text-xl sm:text-2xl font-normal mb-6">Soluciones únicas para necesidades únicas</h3>

                <p class="text-base sm:text-lg font-light leading-relaxed mb-4">
                    En Amotii desarrollamos herramientas a medida que se ajustan perfectamente a tus flujos, equipos y
                    objetivos.
                </p>
                <p class="text-base sm:text-lg font-light leading-relaxed mb-8">
                    Creamos funcionalidades exclusivas, integraciones personalizadas y adaptaciones sobre nuestra plataforma
                    base, asegurando una experiencia completamente alineada con tu negocio.
                </p>
                <div
                    class="bg-transparent p-6 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                    <ul class="space-y-4 text-base sm:text-lg">
                        <li class="flex items-start gap-3">
                            <span class="text-white text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#e3e3e3">
                                    <path
                                        d="m175-41 82-346-270-234 355-30 138-327 138 327 355 30-270 234 82 346-305-184L175-41Z" />
                                </svg>
                            </span>
                            <p><strong>Automatización 100% personalizada</strong></p>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-white text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#e3e3e3">
                                    <path
                                        d="m175-41 82-346-270-234 355-30 138-327 138 327 355 30-270 234 82 346-305-184L175-41Z" />
                                </svg>
                            </span>
                            <p><strong>Integración con tus sistemas actuales</strong></p>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-white text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#e3e3e3">
                                    <path
                                        d="m175-41 82-346-270-234 355-30 138-327 138 327 355 30-270 234 82 346-305-184L175-41Z" />
                                </svg>
                            </span>
                            <p><strong>Soluciones escalables y seguras</strong></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End block4 -->

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
                    Amotii tu IA conversacional que atiende al instante, sin pausas y en todos tus canales. Automatiza tu
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

    <!-- Section contacts -->
    @include('partials.contacts')

@endsection
