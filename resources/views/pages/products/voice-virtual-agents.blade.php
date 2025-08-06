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
    <section class="relative pt-20 pb-70 overflow-hidden">
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
    <div class="w-full flex justify-center z-20 mb-40" style="margin-top: -15rem;">
        <div class="relative w-full max-w-4xl aspect-video overflow-hidden shadow-2xl ">
            <iframe width="50%" height="50%"
                src="https://www.youtube.com/watch?v=kjYvR-qYaK0&list=PLcKa-34z76PvI5KvI5S2JGj0RcBVuz3jg&index=46"
                title="Hero video" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen class=" absolute w-full h-full mt-0">
            </iframe>
        </div>
    </div>

    <!-- End block1 -->

    <!-- Start block2 -->
    <section class=" pt-0 pb-30" x-data="tabSection()">

        <div class=" flex max-w-6xl mx-auto flex-col justify-center items-center px-4">
            <h1
                class="text-5xl text-orange-500 font-bold text-center mb-5 hover:scale-105 transition-transform duration-300 ease-in-out ">
                Inteligencia artificial que marca la diferencia e incrementa tus ventas</h1>

            <p
                class="text-center max-w-3xl text-xl text-black font-semibold tracking-wide mb-12 hover:scale-105 transition-transform duration-300 ease-in-out">
                Amotii es tu solución conversacional inteligente capaz de resolver múltiples necesidades operativas con
                fluidez, eficiencia y voz natural 24/7</p>
        </div>

        <!-- Tabs -->
        <div class="max-w-9/10 mx-auto items-center">
            <div class="flex justify-between border-b border-gray-200 mb-10 text-sm sm:text-base font-semibold">
                <template x-for="(tab, index) in tabs" :key="index">
                    <button @click="selected = index" class="flex-1 text-center py-3 transition duration-300 border-b-2"
                        :class="selected === index ?
                            'border-orange-500 text-black' :
                            'border-transparent text-gray-600 hover:text-orange-500 hover:border-orange-300'">
                        <span class="leading-tight block" x-html="tab.title"></span>
                    </button>
                </template>
            </div>

            <!-- Content -->
            <div class="flex flex-col lg:flex-row items-center py-20 justify-between">

                <!-- Left: Text -->
                <div class="lg:w-1/2 text-left space-y-4">
                    <h3 class="text-xl font-semibold text-black" x-text="tabs[selected].content.title"></h3>
                    <p class="text-gray-700 text-sm sm:text-base leading-relaxed" x-text="tabs[selected].content.text"></p>
                </div>

                <!-- Rigth: Player -->
                <div class="lg:w-1/2">
                    <div
                        class="bg-neutral-900 text-white rounded-2xl p-6 flex flex-col items-center justify-center text-center h-80 w-full max-w-xs mx-auto shadow-lg">
                        <p class="text-base font-semibold mb-6">Dale play</p>
                        <button
                            class="w-16 h-16 rounded-full bg-orange-600 shadow-md flex items-center justify-center hover:scale-105 transition transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6 4l10 6-10 6V4z" />
                            </svg>
                        </button>
                        <p class="mt-6 text-sm font-semibold">Y escucha a TiiCall<br>en este caso de uso</p>
                    </div>
                    <img :src="tabs[selected].content.image" alt="Phone" class="max-h-96 object-contain">
                </div>
            </div>
        </div>
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
