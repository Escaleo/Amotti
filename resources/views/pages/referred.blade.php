@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <!-- Header Section -->
    <section class="relative pt-40 pb-20 px-4 sm:px-6 bg-[#000000] text-white">
        <!-- Background Image -->
        <img src="{{ asset('assets/img/refered/fondo_h.png') }}" alt="Hero Background"
            class="absolute inset-0 w-full h-full object-cover z-0" />

        <!-- Overlay Content -->
        <div class="relative z-10 flex flex-col lg:flex-row items-center lg:justify-between gap-10">

            <!-- Texto -->
            <div class="w-full lg:w-2/3 text-center lg:text-left px-2 sm:px-4">
                <h1
                    class="text-2xl sm:text-3xl md:text-4xl font-bold text-orange-500 mb-2 sm:mb-3 leading-tight hover:scale-105 transition-transform duration-300 ease-in-out">
                    Recomienda Amotii, <br class="block sm:hidden" />
                    gana ingresos
                </h1>
                <h1
                    class="text-2xl sm:text-3xl md:text-4xl font-bold text-orange-500 mb-4 sm:mb-6 leading-tight hover:scale-105 transition-transform duration-300 ease-in-out">
                    e impulsa la <br class="block sm:hidden" />
                    innovación
                </h1>
                <p
                    class="text-sm sm:text-base md:text-lg text-white mb-6 sm:mb-8 leading-relaxed max-w-xl mx-auto lg:mx-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Conecta a quienes buscan vender más y atender mejor con Amotii, y recibe ingresos por cada cliente que
                    llegue gracias a tu recomendación
                </p>

                <a href="{{ route('contact.index') }}"
                    class="bg-orange-500 text-white text-sm sm:text-base md:text-lg px-6 py-3 rounded-full shadow-md hover:shadow-lg transition-all duration-300 ease-in-out inline-block">
                    Regístrate gratis
                </a>
            </div>

            <!-- Imagen -->
            <div class="w-full lg:w-2/3 flex justify-center items-center mt-10 lg:mt-0">
                <img src="{{ asset('assets/img/refered/img_h.png') }}" alt="Hero Image"
                    class="w-64 sm:w-80 md:w-[500px] lg:w-[800px] object-contain transition-transform duration-300 ease-in-out hover:scale-105" />
            </div>
        </div>
    </section>
    <!-- End Header Section -->

    <!-- block1 -->
    <section class="bg-[#efeded] relative pt-10 pb-70 overflow-hidden">
        <!-- Imagen de fondo -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/products/tiibot/fondo_b1.png') }}" alt="Fondo Hero"
                class="w-full h-full object-cover" />
        </div>

        <!-- Contenido principal -->
        <div class="relative z-20 max-w-7xl lg:max-w-9/10 mx-auto px-4 flex flex-col items-center text-center">
            <!-- Título -->
            <h2
                class="text-4xl md:text-5xl lg:text-5xl font-extrabold text-orange-500 leading-tight mb-6 hover:scale-105 transition-transform duration-300 ease-in-out">
                Tecnología conversacional que acelera resultados
            </h2>

            <!-- Descripción -->
            <p
                class="text-2xl md:text-xl text-white font-light max-w-3xl leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                Amotii es una plataforma inteligente que automatiza ventas y atención al cliente con
                tecnología conversacional de última generación.
            </p>

            <p
                class="text-2xl md:text-xl text-white font-light max-w-3xl leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                Integra agentes virtuales de voz con inteligencia artificial, chatbots multicanal y
                herramientas diseñadas para captar leads, cerrar ventas más rápido y brindar soporte
                inmediato, sin necesidad de ampliar tu equipo.</p>
        </div>

    </section>
    <!-- End block1 -->

    <!-- Video -->
    @include('partials.media')
    <!-- End Video -->

    <!-- Start block2 -->
    <section class="w-full bg-[#efeded] py-10 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <!-- Título principal -->
            <h2
                class="text-3xl sm:text-4xl lg:text-5xl text-orange-500 font-extrabold leading-tight mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                Empieza a generar ingresos con solo recomendar Amotii
            </h2>

            <!-- Subtítulo -->
            <p
                class="text-base text-black sm:text-lg lg:text-xl max-w-3xl mx-auto mb-12 font-normal hover:scale-105 transition-transform duration-300 ease-in-out">
                Comparte nuestra plataforma con empresas que necesitan vender más y
                atender mejor, y recibe una comisión por cada cliente que refieras
            </p>

            <!-- Call to Action -->
            <div
                class="max-w-6xl mx-auto px-4 text-center mt-12 hover:scale-105 transition-transform duration-300 ease-in-out">
                <a href="{{ route('contact.index') }}"
                    class="bg-orange-500 text-white text-lg lg:text-2xl px-6 py-3 mt-5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-orange-400 inline-block"
                    style="will-change: transform;" onmouseover="this.style.transform='scale(1.12)'"
                    onmouseout="this.style.transform='scale(1)'">
                    Registrate gratis
                </a>
            </div>
            <!-- Call to Action End -->
        </div>
    </section>
    <!-- End block2 -->

    <!--¿Por qué es tan fácil recomendar Amotii?-->
    <section class="w-full bg-[#efeded] px-6 sm:px-10 pb-0 py-16">
        <div class="max-w-7xl lg:max-w-9/10 mx-auto flex flex-col lg:flex-row items-center justify-between gap-10">

            <!-- Texto a la izquierda -->
            <div class="w-full lg:w-1/2">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-orange-500 mb-6">
                    ¿Por qué es tan fácil recomendar Amotii?
                </h2>
                <p class="text-base sm:text-lg md:text-xl text-black mb-6 leading-relaxed">
                    Porque combina innovación real con resultados tangibles.
                    <strong>Su tecnología de IA conversacional</strong> permite automatizar ventas y atención en múltiples
                    canales como WhatsApp, Instagram, Web o Messenger.
                </p>
                <p class="text-base sm:text-lg md:text-xl text-black mb-6 leading-relaxed">
                    <strong>Las empresas ahorran hasta un 70%</strong> del tiempo en soporte, mejoran la conversión de leads
                    y optimizan procesos sin necesidad de conocimientos técnicos.
                </p>
                <p class="text-2xl font-extrabold text-black">
                    Es fácil de implementar, fácil de usar y aún más fácil de recomendar
                </p>
            </div>

            <!-- Imagen a la derecha -->
            <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
                <img src="{{ asset('assets/img/refered/img_b2(1).png') }}" alt="Por qué recomendar Amotii"
                    class="w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-[750px] object-contain">
            </div>
        </div>
    </section>

    <!--¿Cómo funciona el Plan de Referidos de Amotii?-->
    <section x-data="referidos" class="bg-[#f4f4f4] w-full py-16 sm:px-10 px-6">
        <div class="max-w-7xl lg:max-w-10/10 mx-auto  text-center">
            <h2 class="lg:text-5xl text-2xl md:text-4xl font-extrabold text-orange-500 mb-20">
                ¿Cómo funciona el Plan de Referidos de Amotii?
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-15 mx-auto">
                <template x-for="step in pasos" :key="step.title">
                    <div
                        class="bg-white border-3 border-orange-400 rounded-4xl py-2 px-3 lg:min-h-[400px] flex flex-col items-center justify-center text-center hover:shadow-md transition-shadow duration-300">
                        <img :src="step.icon" alt="step.title" class="w-33 h-33 mb-4 object-contain">
                        <h2 class="text-3xl font-bold text-black mb-2" x-text="step.title"></h2>
                        <p class="text-2xl text-black leading-relaxed" x-text="step.description"></p>
                    </div>
                </template>
            </div>
        </div>
    </section>
    <!-- End block2 -->

    <!-- Monitorea, gestiona y gana con claridad -->
    <section class="w-full bg-[#efeded] text-white py-20 pb-20 px-6 sm:px-8 md:px-10 lg:px-12">
        <div class="max-w-7xl lg:max-w-10/10 mx-auto flex flex-col lg:flex-row lg:justify-between items-center gap-12">

            <!-- Texto -->
            <div class="w-full lg:w-2/3 max-w-4xl text-black">
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl text-orange-500 font-semibold tracking-wide mb-4 sm:mb-6 text-center lg:text-left hover:scale-105 transition-transform duration-300 ease-in-out">
                    Monitorea, gestiona y gana con claridad
                </h2>

                <p
                    class="text-base sm:text-lg md:text-xl lg:text-[22px] mb-6 sm:mb-8 leading-relaxed text-center lg:text-left lg:max-w-2xl hover:scale-105 transition-transform duration-300 ease-in-out">
                    Accede a un panel exclusivo donde puedes monitorear tus
                    resultados en tiempo real: visualiza el número de clics, registros
                    y referidos activos, consulta tus comisiones acumuladas,
                    descarga materiales promocionales y gestiona fácilmente tus
                    datos de pago desde un solo lugar
                </p>

                <!-- Lista -->
                <ul class="space-y-6 sm:space-y-8 text-base sm:text-lg md:text-xl lg:text-xl lg:ml-10">
                    <!-- Item 1 -->
                    <li class="flex items-start gap-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                        <span class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                                fill="#000">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                            <b>Agente de Agendamiento y Calificación</b><br />
                            Atiende leads, los califica y agenda citas listas para cerrar
                        </p>
                    </li>

                    <!-- Item 2 -->
                    <li class="flex items-start gap-4">
                        <span class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                                fill="#000">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                            <b>Agente de Recursos Humanos</b><br />
                            Automatiza selección, entrevistas y procesos de onboarding
                        </p>
                    </li>

                    <!-- Item 3 -->
                    <li class="flex items-start gap-4">
                        <span class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                                fill="#000">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                            <b>Agente de Propuestas Comerciales</b><br />
                            Recibe requerimientos y genera propuestas al instante
                        </p>
                    </li>
                </ul>
            </div>

            <!-- Imagen -->
            <div class="w-full lg:w-2/3 flex justify-center items-center relative">
                <img src="{{ asset('assets/img/refered/img_b2(2).png') }}" alt="Integración ecommerce"
                    class="w-full max-w-md sm:max-w-lg md:max-w-2xl lg:max-w-[1200px] object-contain drop-shadow-xl hover:scale-105 transition-transform duration-300 ease-in-out" />
            </div>
        </div>
    </section>

    <section class="w-full bg-orange-500 text-white py-16 px-4 sm:px-6 md:px-10">
        <div class="max-w-7xl lg:max-w-9/10 mx-auto text-center flex flex-col items-center justify-center gap-6">

            <!-- Título principal -->
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">
                Empieza a generar ingresos con solo recomendar
            </h2>

            <!-- Subtítulo -->
            <p class="lg:text-2xl max-w-3xl sm:text-lg md:text-xl text-white">
                Comparte Amotii con quienes buscan vender más, atender mejor y
                automatizar su negocio. No necesitas experiencia técnica: tú conectas,
                nosotros hacemos el resto
            </p>

            <p class="lg:text-2xl max-w-3xl sm:text-lg md:text-xl text-white"><b> ¡Cada recomendación puede convertirse en
                    una comisión para ti!</b></p>

            <!-- Botón CTA -->
            <a href="#"
                class="bg-white text-orange-500 font-semibold text-xl px-6 py-3 rounded-2xl shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300 ease-in-out">
                <p>Registrate gratis</p>
            </a>

        </div>
    </section>

    <!-- Section Contact -->
    @include('partials.contact-refered')

@endsection
