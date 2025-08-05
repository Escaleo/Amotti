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

    <!-- Start block2 -->
    <section class="py-120">

        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-5xl text-orange-500 font-bold text-center mb-5">Agentes virtuales de voz que venden por ti</h1>
            <h3 class="text-center text-2xl text-black font-semibold tracking-wide mb-12">Escala tu fuerza comercial sin
                contratar más personal</h3>
            <p class="text-center text-black text-xl mb-12">Nuestros agentes con inteligencia artificial conversacional
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
                    'front' => "Agendamiento sincronizado con tu calendario",
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
        <div class="max-w-6xl mx-auto px-4 text-center mt-12">
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
    <section class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-12">Todo lo que necesitas para vender más, en un solo lugar</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-2">TiiBot</h3>
                    <p class="text-gray-600">Chatbot inteligente que responde en tiempo real, califica leads y da soporte
                        sin pausas.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-2">TiiCall</h3>
                    <p class="text-gray-600">Agente de voz conversacional automatizado para ventas.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-2">AmotiiTalk</h3>
                    <p class="text-gray-600">Live Chat centralizado para atención simultánea.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End block3 -->

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
