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
    <!-- End block1 -->

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

    <!-- Start block2 -->
    <section class="w-full bg-[#efeded] py-10 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <!-- Título principal -->
            <h2
                class="text-3xl sm:text-4xl lg:text-5xl text-orange-500 font-extrabold leading-tight mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                Tu chatbot, con el conocimiento y la personalidad de tu negocio
            </h2>

            <!-- Subtítulo -->
            <p
                class="text-base text-black sm:text-lg lg:text-xl max-w-4xl mx-auto mb-12 font-normal hover:scale-105 transition-transform duration-300 ease-in-out">
                Más que respuestas automáticas: una experiencia conversacional a tu medida
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
    <section class="py-16 bg-[#efeded] text-black">
        <div class="max-w-7xl lg:max-w-9/10 mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-10">
                {{-- Texto a la izquierda --}}
                <div class="w-full md:w-1/2">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-orange-500 mb-4 tracking-wide hover:scale-105 transition-transform duration-300 ease-in-out">
                        Formado con el contexto de tu empresa
                    </h2>
                    <p class="text-black text-lg lg:max-w-lg lg:text-2xl leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                        Nuestro chatbot se entrena con la información clave de tu negocio: productos, procesos,
                        lenguaje, atención y casos frecuentes. Esto le permite responder de forma coherente,
                        profesional y contextualizada, como si fuera parte de tu equipo.
                    </p>
                </div>

                {{-- Imagen a la derecha --}}
                <div class="w-full md:w-1/2 flex justify-center">
                    <img src="{{ asset('assets/img/products/tiibot/img_1.png') }}" alt="Chatbot empresa"
                        class="w-full md:max-w-2xl lg:max-w-3xl rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out object-cover" />
                </div>
            </div>
        </div>
    </section>
    <!-- End block3 -->

    <!-- Start block4 -->
    <section class="w-full py-16 bg-[#efeded] mb-[-65px] lg:px-0 px-6">
        <div class="w-full mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between gap-y-10 md:gap-20">

                <!-- Imagen a la izquierda -->
                <div class="w-full md:w-1/2 flex justify-center md:justify-start">
                    <img src="{{ asset('assets/img/products/tiibot/img_2.png') }}" alt="Sugerencias IA"
                        class="w-full max-w-sm md:max-w-none object-contain hover:scale-105 transition-transform duration-300 ease-in-out"/>
                </div>

                <!-- Texto a la derecha -->
                <div class="w-full md:w-1/2 text-center md:text-left">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                        Sugerencias de productos basadas en IA
                    </h2>
                    <p class="text-black text-base sm:text-lg lg:text-2xl leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                        Con cada interacción, Amotii aprende del comportamiento del usuario y sugiere productos o servicios
                        con alto potencial de conversión. Así, cada conversación se vuelve una oportunidad real de venta.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- End block4 -->

    <!-- Start block4 -->
    <!-- Asistente de ventas 24/7 -->
    <section class="w-full bg-orange-500 text-white py-20 pb-0 px-6 lg:px-12">
        <div
            class="max-w-7xl lg:max-w-9/10 mx-auto flex flex-col lg:flex-row justify-between items-center gap-12 lg:gap-25">

            <!-- Texto -->
            <div class="w-full lg:w-2/3 max-w-4xl">
                <h2 class="text-xl sm:text-3xl lg:text-4xl font-normal tracking-wide mb-4 sm:mb-6 text-center lg:text-left hover:scale-105 transition-transform duration-300 ease-in-out">
                    Integración nativa con tu ecommerce y CMS
                </h2>

                <p
                    class="sm:text-xl lg:text-[22px] mb-6 sm:mb-8 font-normal leading-relaxed text-center lg:text-left lg:max-w-2xl hover:scale-105 transition-transform duration-300 ease-in-out">
                    Conecta tu chatbot con las plataformas que ya usas, como:
                    Shopify, WooCommerce, VTEX, Tiendanube, Magento y más,
                    para automatizar tareas que antes consumían tiempo y recursos
                </p>

                <!-- Lista -->
                <ul class="space-y-6 text-base sm:text-lg lg:text-xl lg:ml-10">
                    <li class="flex items-start gap-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                        <span class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                                fill="#fff">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                            Desde la gestión de pedidos y pagos, hasta la verificación de
                            disponibilidad o seguimiento de envíos, todo ocurre dentro del
                            mismo flujo conversacional
                        </p>
                    </li>

                    <li class="flex items-start gap-4">
                        <span class="shrink-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                                fill="#fff">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p class="text-base sm:text-lg lg:text-[22px] font-normal">
                            Mejora la experiencia del cliente, y optimiza tus operaciones
                            reduciendo la necesidad de intervención manual
                        </p>
                    </li>
                </ul>
            </div>

            <!-- Imagen -->
            <div class="w-full lg:w-1/2 flex justify-center items-center relative">
                <img src="{{ asset('assets/img/products/tiibot/img_3.png') }}" alt="Integración ecommerce"
                    class="w-full sm:max-w-md md:max-w-xl lg:max-w-2xl object-contain drop-shadow-xl hover:scale-105 transition-transform duration-300 ease-in-out" />
            </div>

        </div>
    </section>
    <!-- End block4 -->

    <!-- Personalización total -->
    <section class="w-full bg-[#ff6600] text-white px-4 sm:px-6 py-14 sm:py-16">
        <div
            class="max-w-7xl lg:max-w-9/10 mx-auto flex flex-col-reverse lg:flex-row items-center gap-10 sm:gap-14 lg:gap-25">

            <!-- Imagen izquierda -->
            <div class="w-full lg:w-3/7">
                <img src="{{ asset('assets/img/products/tiibot/img_4.png') }}" alt="Personalización chatbot"
                    class="rounded-xl w-full max-w-[680px] h-auto object-contain drop-shadow-lg mx-auto lg:mx-0 hover:scale-105 transition-transform duration-300 ease-in-out" />
            </div>

            <!-- Texto derecha -->
            <div class="w-full lg:w-4/7 max-w-3xl text-center sm:text-left">
                <h2 class="text-2xl sm:text-3xl md:text-4xl text-white font-semibold mb-4 sm:mb-6 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Personalización total, adaptada a tu estrategia
                </h2>
                <p class="text-base sm:text-lg md:text-xl font-light leading-relaxed mb-6 sm:mb-8 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Cada negocio tiene su estilo, su tono y su forma de conectar.<br />
                    Por eso, Amotii no es un chatbot genérico
                </p>

                <!-- Lista -->
                <ul class="space-y-5 sm:space-y-6 text-left text-base sm:text-lg lg:text-xl sm:pl-4 lg:ml-10">
                    <li class="flex items-start gap-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                        <span class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                                width="48px" fill="#fff">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p class="text-base sm:text-lg lg:text-[20px] font-light">
                            Personaliza su apariencia, botones, mensajes, flujos y widgets
                            para alinearlos con tu identidad visual y objetivos comerciales
                        </p>
                    </li>

                    <li class="flex items-start gap-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                        <span class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                                width="48px" fill="#fff">
                                <path
                                    d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                        </span>
                        <p class="text-base sm:text-lg lg:text-[20px] font-light">
                            Desde mensajes de bienvenida hasta respuestas específicas
                            por producto, todo se ajusta a lo que tú necesitas
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Análisis de sentimientos en tiempo real -->
    <section class="w-full bg-[#efeded] text-black py-16 px-6">
        <div class="max-w-7xl lg:max-w-9/10 mx-auto flex flex-col items-center text-center gap-12">

            <!-- Título -->
            <h2
                class="text-xl sm:text-3xl lg:text-5xl font-extrabold text-orange-500 mb-6 hover:scale-105 transition-transform duration-300 ease-in-out">
                Conversaciones que convierten,<br class="hidden sm:block" />
                flujos que escalan
            </h2>

            <!-- Tarjetas -->
            <div
                class="flex flex-col sm:flex-col md:flex-row w-full gap-12 md:gap-16 lg:gap-40 justify-evenly items-center">

                <!-- Tarjeta 1 -->
                <div
                    class="border-3 border-orange-500 rounded-4xl px-4 py-10 w-full max-w-sm text-center flex flex-col items-center shadow-sm hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img src="{{ asset('assets/img/products/tiibot/Graph.png') }}" style="filter:invert(1)"
                        alt="Conversión" class="w-20 h-20 sm:w-24 sm:h-24 md:w-25 md:h-25 mb-6 object-contain" />
                    <h3 class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-2">Más conversión</h3>
                    <p class="text-base sm:text-lg md:text-xl font-normal text-black">
                        Conversaciones efectivas que <br />
                        califican y convierten sin <br />
                        perder tiempo
                    </p>
                </div>

                <!-- Tarjeta 2 -->
                <div
                    class="border-3 border-orange-500 rounded-4xl px-4 py-10 w-full max-w-sm text-center flex flex-col items-center shadow-sm hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img src="{{ asset('assets/img/products/tiibot/icons/hourglass_10379730.svg') }}"
                        alt="Ahorro de tiempo" class="w-20 h-20 sm:w-24 sm:h-24 md:w-23 md:h-23 mb-6 object-contain" />
                    <h3 class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-2">Ahorra tiempo</h3>
                    <p class="text-base sm:text-lg md:text-xl font-normal text-black">
                        Automatiza lo repetitivo y <br />
                        libera a tu equipo para tareas <br />
                        de alto valor
                    </p>
                </div>

                <!-- Tarjeta 3 -->
                <div
                    class="border-3 border-orange-500 rounded-4xl px-4 py-10 w-full max-w-sm text-center flex flex-col items-center shadow-sm hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img src="{{ asset('assets/img/products/tiibot/icons/mobile_13630564.svg') }}"
                        alt="Experiencia personalizada"
                        class="w-20 h-20 sm:w-24 sm:h-24 md:w-23 md:h-23 mb-6 object-contain" />
                    <h3 class="text-2xl sm:text-3xl md:text-3xl font-extrabold mb-2">Experiencia a medida</h3>
                    <p class="text-base sm:text-lg md:text-xl font-normal text-black">
                        Cada interacción se adapta a <br />
                        tu marca, tus objetivos y <br />
                        tus usuarios
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Section Contact -->
    @include('partials.contacts')

@endsection
