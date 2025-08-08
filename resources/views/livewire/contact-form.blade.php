<div>
    @extends('layouts.app')

    @section('title', 'Inicio')

    @section('content')

        <!-- Header Section -->
        <section class="relative bg-[#efeded] pt-60 pb-30 mb-0">
            <!-- Background Image -->
            <img src="{{ asset('assets/img/partners/fondo_h.png') }}" alt="Hero Background"
                class="absolute inset-0 w-full h-full object-cover z-0">

            <!-- Overlay -->
            <div class="relative z-10 max-w-[90%] mx-auto px-4 flex flex-col lg:flex-row items-center justify-between pt-10">

                <!-- Left Content -->
                <div class="w-full lg:w-2/3 text-center lg:text-left">
                    <h1
                        class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                        Conviértete en Partner de
                    </h1>
                    <h1
                        class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                        Amotii vende el futuro
                    </h1>
                    <p
                        class="text-base sm:text-lg md:text-xl text-white mb-8 max-w-2xl mx-auto lg:mx-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                        Crea tu empresa de automatización comercial con IA y genera ingresos recurrentes
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
                    class="relative lg:absolute lg:right-0 lg:top-1/2 lg:translate-y-[-50%] w-full lg:w-1/2 flex justify-center lg:justify-end mt-20 lg:mt-18 z-10">
                    <img src="{{ asset('assets/img/products/tiibot/Pose1.png') }}" alt="Hero Image"
                        class="w-[300px] sm:w-[350px] md:w-[450px] lg:w-[550px] xl:w-[800px] max-w-full hover:scale-105 transition-transform duration-300 ease-in-out">
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
                    class="text-4xl md:text-5xl lg:text-5xl font-extrabold text-orange-500 leading-tight mb-2 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Crea tu negocio vendiendo automatización con IA
                </h2>

                <!-- Descripción -->
                <h2
                    class="lg:text-3xl md:text-xl text-white font-light max-w-5xl mb-10 leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                    Únete como partner y ofrece tecnología lista para transformar empresas
                </h2>

                <p
                    class="text-3xl md:text-5xl lg:text-2xl max-w-5xl font-extralight leading-relaxed text-white mb-6 hover:scale-105 transition-transform duration-300 ease-in-out"">
                    Únete al programa de partners de Amotii: una oportunidad para emprendedores, consultores,
                    agencias y profesionales que buscan crecer vendiendo soluciones inteligentes basadas en IA.
                    Conviértete en distribuidor autorizado, crea tu propio negocio y genera ingresos recurrentes
                    impulsando el crecimiento de otros con tecnología de vanguardia</p>
            </div>

        </section>
        <!-- End block1 -->

        <!-- Video -->
        @include('partials.media')
        <!-- End Video -->

        <!-- Start block2 -->
        <section class="w-full bg-[#efeded] px-6">
            <div class="max-w-5xl mx-auto text-center">
                <!-- Título principal -->
                <h2
                    class="text-3xl sm:text-4xl lg:text-5xl text-orange-500 font-extrabold leading-tight mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Conviértete en Partner Amotii
                </h2>

                <!-- Subtítulo -->
                <p
                    class="text-base text-black sm:text-lg lg:text-2xl max-w-4xl mx-auto mb-12 font-normal hover:scale-105 transition-transform duration-300 ease-in-out">
                    Activa tu propio negocio de automatización comercial con soluciones de inteligencia artificial listas
                    para
                    vender y escalar
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
        <!-- End block2 -->

        <!-- Start block3 -->
        <section class="py-16 pb-0 bg-[#efeded] text-black">
            <div class="max-w-7xl lg:max-w-9/10 mx-auto px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center justify-between gap-10">
                    {{-- Texto a la izquierda --}}
                    <div class="w-full md:w-1/2">
                        <h2
                            class="text-2xl md:text-3xl lg:text-4xl font-bold text-orange-500 mb-4 tracking-wide hover:scale-105 transition-transform duration-300 ease-in-out">
                            ¿Quién puede ser partner Amotii?
                        </h2>
                        <p
                            class="text-black text-lg lg:max-w-2xl lg:text-2xl  hover:scale-105 transition-transform duration-300 ease-in-out">
                            Este programa está pensado para personas con visión emprendedora y
                            perfil comercial que quieren escalar su impacto en el mundo digital. Si
                            eres ejecutivo de ventas independiente, agencia de marketing, consultor
                            digital o especialista en automatización, este es tu momento. Únete
                            como partner y empieza a generar ingresos recurrentes ofreciendo
                            soluciones SaaS basadas en inteligencia artificial, sin necesidad de
                            desarrollarlas tú mismo.
                        </p>
                    </div>

                    {{-- Imagen a la derecha --}}
                    <div class="w-full md:w-1/2 flex justify-center">
                        <img src="{{ asset('assets/img/partners/img_1.png') }}" alt="Chatbot empresa"
                            class="w-full md:max-w-2xl lg:max-w-3xl rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out object-cover" />
                    </div>
                </div>
            </div>
        </section>
        <!-- End block3 -->

        <!-- Start block4 -->
        <section class="w-full py-16 bg-[#efeded] mb-[-65px] lg:px-0 px-6">
            <div class="w-full mx-auto">
                <div class="flex flex-col md:flex-row items-center gap-y-10 md:gap-20">

                    <!-- Imagen a la izquierda -->
                    <div class="w-full md:w-1/2 flex justify-center md:justify-start">
                        <img src="{{ asset('assets/img/partners/img_2.png') }}" alt="Sugerencias IA"
                            class="w-full max-w-sm md:max-w-none object-contain hover:scale-105 transition-transform duration-300 ease-in-out" />
                    </div>

                    <!-- Texto a la derecha -->
                    <div class="md:w-1/2 text-center md:text-left">
                        <h2
                            class="text-2xl md:text-3xl lg:text-4xl max-w-xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                            ¿Qué vas a vender como partner?
                        </h2>
                        <p
                            class="text-black text-base sm:text-lg lg:text-xl lg:max-w-xl leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                            Como partner oficial de Amotii comercializas una solución
                            poderosa y todo-en-uno de automatización conversacional
                            y marketing multicanal, con énfasis en nuestros agentes
                            virtuales de voz con IA y chatbots inteligentes
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <!-- End block4 -->

        <!-- Start block4 -->
        <!-- Asistente de ventas 24/7 -->
        <section class="w-full bg-[#d7d5d7] text-white py-20 pb-0 px-6 lg:px-12">
            <div
                class="max-w-7xl lg:max-w-9/10 mx-auto flex flex-col lg:flex-row justify-between items-center gap-12 lg:gap-25">

                <!-- Texto -->
                <div class="w-full lg:w-2/3 max-w-4xl text-black ">
                    <h2
                        class="text-xl text-orange-500 sm:text-3xl lg:text-4xl lg:max-w-2xl font-semibold tracking-wide mb-4 sm:mb-6 text-center lg:text-left hover:scale-105 transition-transform duration-300 ease-in-out">
                        Automatización conversacional que suena humana y trabaja 24/7
                    </h2>

                    <p
                        class="sm:text-xl lg:text-[22px] mb-6 sm:mb-8 font-normal leading-relaxed text-center lg:text-left lg:max-w-2xl hover:scale-105 transition-transform duration-300 ease-in-out">
                        Nuestros agentes virtuales con voz natural realizan tareas clave
                        sin interrupciones: califican leads, agendan reuniones, gestionan
                        cobros y mucho más. Son rápidos, empáticos y siempre
                        disponibles para tu negocio
                    </p>

                    <!-- Lista -->
                    <ul class="space-y-6 text-base sm:text-lg lg:text-xl lg:ml-10">
                        <li class="flex items-start gap-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                            <span class="shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                                    width="48px" fill="#fff">
                                    <path
                                        d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                                </svg>
                            </span>
                            <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                                <b>Agente de Agendamiento y Calificación</b><br />
                                Atiende leads, los califica y agenda citas listas para cerrar
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <span class="shrink-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                                    width="48px" fill="#fff">
                                    <path
                                        d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                                </svg>
                            </span>
                            <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                                <b> Agente de Recursos Humanos </b><br />
                                Automatiza selección, entrevistas y procesos de onboarding
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <span class="shrink-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                                    width="48px" fill="#fff">
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
                <div class="w-full lg:w-1/2 flex justify-center items-center relative">
                    <img src="{{ asset('assets/img/partners/img_3.png') }}" alt="Integración ecommerce"
                        class="w-full sm:max-w-md md:max-w-xl lg:max-w-2xl object-contain drop-shadow-xl hover:scale-105 transition-transform duration-300 ease-in-out" />
                </div>

            </div>
        </section>
        <!-- End block4 -->

        <section class="w-full bg-[#d7d5d7] text-white pt-20 pb-0 px-6 lg:px-12">
            <div
                class="max-w-7xl lg:max-w-9/10 mx-auto flex flex-col lg:flex-row justify-between items-end gap-20 lg:gap-50">

                <!-- Imagen -->
                <div class="w-full lg:w-1/3 flex justify-center items-center relative">
                    <img src="{{ asset('assets/img/partners/img_4.png') }}" alt="Integración ecommerce"
                        class="sm:max-w-md md:max-w-xl lg:max-w-3xl object-contain drop-shadow-xl" />
                </div>

                <!-- Texto -->
                <div class="w-full lg:w-2/3 max-w-5xl text-black justify-center items-center mb-10 lg:mb-10">
                    <h2
                        class="text-xl text-orange-500 sm:text-3xl lg:text-4xl lg:max-w-2xl font-semibold tracking-wide mb-4 sm:mb-6 text-center lg:text-left">
                        Agentes Especializados según tu operación
                    </h2>

                    <p
                        class="sm:text-xl lg:text-[22px] mb-6 sm:mb-8 font-normal leading-relaxed text-center lg:text-left lg:max-w-2xl ">
                        Desde ventas hasta soporte técnico, cada agente está
                        entrenado para cumplir un rol estratégico en tu operación.
                        Automatiza lo repetitivo y enfócate en crecer
                    </p>

                    <!-- Lista -->
                    <ul class="space-y-6 text-base sm:text-lg lg:text-xl lg:ml-10">
                        <li class="flex items-start gap-4">
                            <span class="shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                                    width="48px" fill="#fff">
                                    <path
                                        d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                                </svg>
                            </span>
                            <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                                <b>Agente de Ventas y Seguimiento</b><br />
                                Llama, da seguimiento y reactiva oportunidades automáticamente
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <span class="shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                                    width="48px" fill="#fff">
                                    <path
                                        d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                                </svg>
                            </span>
                            <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                                <b>Agente de Cobranza</b><br />
                                Realiza gestiones de pago con tono empático y seguimiento continuo
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <span class="shrink-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                                    width="48px" fill="#fff">
                                    <path
                                        d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                                </svg>
                            </span>
                            <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                                <b>Agente de Soporte Técnico</b><br />
                                Recibe incidencias, diagnostica y guía hacia la solución correcta
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <span class="shrink-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                                    width="48px" fill="#fff">
                                    <path
                                        d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                                </svg>
                            </span>
                            <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                                <b>Agente de Atención al Cliente</b><br />
                                Responde al instante con información personalizada, 24/7
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <span class="shrink-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                                    width="48px" fill="#fff">
                                    <path
                                        d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                                </svg>
                            </span>
                            <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                                <b>Agentes a la medida</b><br />
                                Diseñamos agentes de voz IA adaptados a la lógica de tu negocio
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- End block4 -->
        <!-- Start block5 -->
        <section class="w-full bg-orange-500 text-white py-16 px-4 sm:px-6 md:px-10">
            <div class="max-w-7xl lg:max-w-9/10 mx-auto text-center flex flex-col items-center justify-center gap-8">

                <!-- Título principal -->
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">
                    Empieza hoy a escalar tu negocio con inteligencia <br class="hidden sm:inline-block">
                    artificial hecha a tu medida
                </h2>

                <!-- Subtítulo -->
                <p class="text-base sm:text-lg md:text-xl text-white">
                    Haz parte del futuro. Conviértete en partner o potencia tu operación con <br
                        class="hidden md:inline-block">
                    agentes inteligentes
                </p>

                <!-- Botón CTA -->
                <a href="#"
                    class="bg-white text-orange-500 font-semibold text-xl px-6 py-3 rounded-2xl shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300 ease-in-out">
                    <p>Solicita tu demo gratis</p>
                </a>

            </div>
        </section>

        <!-- Section Contact -->
        @include('partials.contacts')

    @endsection
</div>
