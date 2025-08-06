@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    @include('layouts.header')

    <!-- block1 -->
    <section class="relative py-70 mt-0 overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 w-full h-full pointer-events-none select-none z-0">
            <img src="{{ asset('assets/img/index/fondo_(block1).png') }}" alt="Hero Background"
                class="w-full h-full object-cover">
        </div>

        <!-- Overlay Content -->
        <div
            class="absolute top-[3.75rem] lg:top-16 left-1/2 transform -translate-x-1/2 w-full max-w-6xl px-4 z-10 flex flex-col items-center">
            <h2
                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white text-center mb-6 max-w-5xl leading-tight hover:scale-105 transition-transform duration-300 ease-in-out">
                La nueva era de las ventas comienza con una llamada
            </h2>
            <p
                class="text-sm sm:text-base md:text-lg lg:text-xl text-white text-center max-w-4xl tracking-wide leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                <strong>Amotii combina inteligencia artificial</strong>, voz natural y automatización para
                atraer,<br> convertir y agendar en
                tiempo real.
                Mientras otros aún responden chats, tu negocio ya está cerrando ventas con <strong>llamadas inteligentes
                    24/7</strong>.
            </p>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <img src="{{ asset('assets/img/index/video.png') }}" alt="Hero Image"
                class="w-[300px] sm:w-[350px] md:w-[450px] lg:w-[550px] xl:w-[600px] max-w-full hover:scale-105 transition-transform duration-300 ease-in-out">
        </div>
    </section>
    <!-- End block1 -->

    <!-- Start block2 -->
    <section class="pt-80 pb-20">

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
    <section class="bg-[#efeded] py-16 px-4" x-data="productSelector()">
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
                <div class="space-y-3 max-w-md">
                    <template x-for="(tool, index) in tools" :key="index">
                        <button @click="selected = index"
                            class="w-full flex items-center px-5 py-3 rounded-2xl shadow-lg font-semibold text-left hover:scale-105 transition-transform duration-300 ease-in-out"
                            :class="selected === index ?
                                'bg-[#fabf96] text-black' :
                                'bg-orange-500 hover:bg-orange-600 text-white'">
                            <img :src="tool.icon" alt="" class="w-6 h-6 mr-3"
                                :style="selected === index ? 'filter: invert(1);' : (tool.isWhite ? 'yes' : 'filter: invert(1);')">
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
                        <p class="text-base leading-relaxed" x-text="tools[selected].description"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start block4 -->
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-2xl font-bold mb-4">Desarrollo a Medida</h2>
                <p class="text-gray-700 mb-2">Soluciones únicas para necesidades únicas. Creamos funcionalidades exclusivas
                    y adaptaciones sobre nuestra plataforma base.</p>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Automatización personalizada</li>
                    <li>Integración con tus sistemas</li>
                    <li>Escalabilidad y seguridad</li>
                </ul>
            </div>
            <div class="bg-gray-100 rounded-lg p-8 shadow">
                <h3 class="text-xl font-semibold mb-4">Formulario de contacto</h3>
                @livewire('contact-form')
            </div>
        </div>
    </section>
    <!-- End block4 -->

    <!-- Start block5 -->
    <section id="contacto" class="bg-blue-50 py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Déjanos tus datos</h2>
            <p class="text-gray-700 mb-6">y descubre cómo Amotii potencia tus ventas y atención a clientes</p>
            @livewire('contact-form')
        </div>
    </section>
    <!-- End block5 -->

@endsection
