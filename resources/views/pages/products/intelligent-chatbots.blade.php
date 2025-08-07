@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <!-- Header Section -->
    <section class="relative pt-60 pb-30 mb-0">
        <!-- Background Image -->
        <img src="{{ asset('assets/img/products/tiibot/fondo_h.png') }}" alt="Hero Background"
            class="absolute inset-0 w-full h-full object-cover z-0">

        <!-- Overlay -->
        <div class="relative z-10 max-w-[90%] mx-auto px-4 flex flex-col lg:flex-row items-center justify-between pt-10">

            <!-- Left Content -->
            <div class="w-full lg:w-2/3 text-center lg:text-left">
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Conversaciones automatizadas
                </h1>
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                    enfocadas en resultados
                </h1>
                <p
                    class="text-base sm:text-lg md:text-xl text-white mb-8 max-w-2xl mx-auto lg:mx-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                    IA conversacional entrenada para entender, responder, calificar y convertir en tiempo real 24/7,
                    mientras tu te enfocas en crecer con tu negocio
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
                class="text-4xl md:text-5xl lg:text-5xl font-extrabold text-orange-500 leading-tight mb-6 hover:scale-105 transition-transform duration-300 ease-in-out">
                Automatiza cada conversación y conviertela en una oportunidad
            </h2>

            <!-- Descripción -->
            <p
                class="text-2xl md:text-xl text-white font-light max-w-4xl mb-10 leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                Imagina un asistente que nunca se desconecta, responde al instante, califica leads y guía a tus
                clientes en tiempo real. Con nuestros chatbots inteligentes, las conversaciones dejan de ser solo
                atención: se convierten en ventas, eficiencia y crecimiento.
            </p>

            <h3
                class="text-4xl md:text-5xl lg:text-3xl font-extrabold text-white leading-tight mb-6 hover:scale-105 transition-transform duration-300 ease-in-out"">
                Descubre cómo la inteligencia conversacional puede transformar tu negocio</h3>
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
    <!-- End Video -->


    <!-- Start block4 -->
    <section class="w-full bg-[#efeded] py-10 px-6 shadow-xl">
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

    <!-- Voz natural y fluida -->
    <section class="w-full bg-[#efeded] text-black pt-0 px-4 sm:px-6">
        <div
            class="max-w-7xl lg:max-w-9/10 mx-auto flex flex-col lg:flex-row items-center justify-between gap-10 lg:gap-20 py-12">

            <!-- Texto -->
            <div class="w-full lg:w-1/2 max-w-2xl">
                <h2 class="text-xl sm:text-3xl lg:text-5xl font-extrabold mb-4 sm:mb-6 text-center lg:text-left">
                    Voz natural y fluida
                </h2>

                <p
                    class="text-base sm:text-xl lg:text-2xl mb-6 sm:mb-8 font-normal leading-relaxed text-center lg:text-left">
                    Nuestros agentes utilizan tecnología de síntesis de voz de última generación, logrando entonaciones,
                    pausas y modulación propias del lenguaje humano.
                </p>

                <!-- Lista -->
                <ul class="space-y-6 text-base sm:text-lg lg:text-xl">
                    <li class="flex items-start gap-4">
                        <span class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px"
                                fill="#000">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p class="text-base sm:text-lg lg:text-2xl font-normal">
                            La experiencia auditiva es tan cercana y realista que tus clientes no notarán la diferencia
                        </p>
                    </li>

                    <li class="flex items-start gap-4">
                        <span class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px"
                                fill="#000">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p class="text-base sm:text-lg lg:text-2xl font-normal">
                            Una voz que transmite confianza, empatía y profesionalismo desde el primer segundo
                        </p>
                    </li>
                </ul>
            </div>

            <!-- Imágenes -->
            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row justify-center items-center gap-6 sm:gap-8">
                <!-- Grabación -->
                <img src="{{ asset('assets/img/products/tiicall/grabacion.png') }}" alt="Grabación"
                    class="w-[200px] sm:w-[260px] lg:w-[320px] object-contain drop-shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out" />

                <!-- Personaje -->
                <img src="{{ asset('assets/img/products/tiicall/Pose_3_amotii.png') }}" alt="Personaje"
                    class="w-[220px] sm:w-[320px] lg:w-[450px] object-contain drop-shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out" />
            </div>
        </div>
    </section>

    <!-- Análisis de sentimientos en tiempo real -->
    <section class="w-full bg-[#efeded] text-black">
        <div class="max-w-7xl lg:max-w-9/10 mx-auto flex flex-col lg:flex-row items-center gap-10 px-4 py-12">

            <!-- Imagen -->
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('assets/img/products/tiicall/img1.png') }}" alt="Análisis de sentimientos"
                    class="rounded-[30px] object-cover w-full max-w-md sm:max-w-lg lg:max-w-xl h-auto drop-shadow-md mx-auto hover:scale-105 transition-transform duration-300 ease-in-out" />
            </div>

            <!-- Texto -->
            <div class="w-full lg:w-1/2 sm:max-w-xl mt-10 lg:mt-0 px-2">
                <h2
                    class="text-xl sm:text-2xl lg:text-3xl font-extrabold mb-4 sm:mb-6 text-center lg:text-left hover:scale-105 transition-transform duration-300 ease-in-out">
                    Análisis de sentimientos en tiempo real
                </h2>

                <p
                    class="text-base sm:text-lg lg:text-2xl font-normal mb-6 sm:mb-8 leading-relaxed text-center lg:text-left hover:scale-105 transition-transform duration-300 ease-in-out">
                    Identifica emociones y niveles de urgencia en la conversación, ajustando el tono, el ritmo y las
                    respuestas automáticamente.
                </p>

                <!-- Lista -->
                <ul class="space-y-6 text-sm sm:text-base lg:text-lg">
                    <li class="flex items-start gap-4">
                        <span class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px"
                                fill="#000">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p
                            class="text-base sm:text-lg lg:text-2xl font-normal hover:scale-105 transition-transform duration-300 ease-in-out">
                            Si detecta frustración, prioriza la derivación a un humano; si percibe interés, acelera el
                            cierre.
                        </p>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px"
                                fill="#000">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p
                            class="text-base sm:text-lg lg:text-2xl font-normal hover:scale-105 transition-transform duration-300 ease-in-out">
                            Esta inteligencia emocional permite mejorar la experiencia del cliente.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Asistente de ventas 24/7 -->
    <section class="w-full bg-[#efeded] text-black pb-20 px-6">
        <div
            class=" max-w-7xl lg:max-w-9/10 mx-auto flex flex-col-reverse lg:flex-row items-center justify-between gap-12">

            <!-- Texto -->
            <div class="w-full lg:w-1/2 max-w-2xl">
                <h2 class="text-xl sm:text-3xl lg:text-3xl font-extrabold mb-4 sm:mb-6 text-center lg:text-left">
                    Entrenamiento personalizado por industria y negocio
                </h2>

                <p
                    class="text-base sm:text-xl lg:text-2xl mb-6 sm:mb-8 font-normal leading-relaxed text-center lg:text-left">
                    Cada agente es entrenado con el contexto, los procesos y el
                    lenguaje específico de tu empresa
                </p>

                <!-- Lista -->
                <ul class="space-y-6 text-lg">
                    <li class="flex items-start gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                            fill="#000">
                            <path
                                d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                        </svg>
                        <p>
                            Desde tecnicismos hasta protocolos de atención, aprende cómo debe actuar según tu operación.
                        </p>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                            fill="#000">
                            <path
                                d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                        </svg>
                        <p>
                            Permite mantener conversaciones precisas, coherentes y alineadas con tus objetivos comerciales.
                        </p>
                    </li>
                </ul>
            </div>

            <!-- Imagen derecha -->
            <div class="w-full lg:w-1/2 relative flex justify-center items-center">
                <img src="{{ asset('assets/img/products/tiicall/img.png') }}" alt="Entrenamiento chatbot"
                    class="w-[800spx] max-w-full object-contain drop-shadow-xl z-10" />
            </div>

        </div>
    </section>

    <!-- Voz de tu empresa, más inteligente que nunca -->
    <section class="w-full bg-[#ff6600] text-white py-20 px-6">
        <div class="max-w-9/10 mx-auto text-center space-y-6">
            <!-- Título principal -->
            <h1
                class="text-4xl sm:text-4xl lg:text-5xl font-bold hover:scale-105 transition-transform duration-300 ease-in-out">
                La voz de tu empresa, más inteligente que nunca
            </h1>
            <!-- Subtítulo -->
            <p class="text-xl font-light hover:scale-105 transition-transform duration-300 ease-in-out">
                Tres razones para dar el salto con Amotii
            </p>

            <!-- Caja blanca con 3 columnas -->
            <div
                class="mt-10 bg-transparent border-2 border-white rounded-4xl p-6 sm:p-10 flex flex-col md:flex-row justify-between items-center gap-10 md:gap-0 min-h-[340px]">

                <!-- Item 1 -->
                <div class="flex flex-col items-center text-center w-full md:w-1/3 space-y-4 border-r-2 border-white">
                    <img src="{{ asset('assets/img/products/tiicall/bot-chat_18087021.svg') }}" style="filter: invert(1)"
                        alt="Eficiencia"
                        class="w-30 h-30 object-contain hover:scale-105 transition-transform duration-300 ease-in-out" />
                    <div class="hover:scale-105 transition-transform duration-300 ease-in-out mb-0">
                        <h1 class="lg:text-5xl  font-extrabold">+60%</h1>
                        <p class="text-3xl font-semibold leading-tight">
                            más eficiencia<br>por llamada
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col items-center text-center w-full md:w-1/3 space-y-4 border-r-2 border-white ">
                    <img src="{{ asset('assets/img/products/tiicall/icons/voice_15311467.png') }}" alt="Atención 24/7"
                        class="w-35 h-35 object-contain hover:scale-105 transition-transform duration-300 ease-in-out" />
                    <div class="hover:scale-105 transition-transform duration-300 ease-in-out mb-0">
                        <h1 class="lg:text-5xl  font-extrabold">Atención 24/7</h1>
                        <p class="text-3xl font-semibold leading-tight">
                            con cero fricción
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex flex-col items-center text-center w-full md:w-1/3 space-y-4">
                    <img src="{{ asset('assets/img/products/tiibot/Graph.png') }}" alt="Escalabilidad"
                        class="w-35 h-35 object-contain hover:scale-105 transition-transform duration-300 ease-in-out" />
                    <div class="hover:scale-105 transition-transform duration-300 ease-in-out">
                        <h1 class="lg:text-5xl  font-extrabold">Escalabilidad</h1>
                        <p class="text-3xl font-semibold leading-tight">
                            sin contratar más personal
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End block5 -->

    <!-- Section Contact -->
    @include('partials.contacts')


@endsection
