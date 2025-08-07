@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <!-- Header Section -->
    <section class="relative pt-20  mb-0">
        <!-- Background Image -->
        <img src="{{ asset('assets/img/plans/fondo_h.png') }}" alt="Hero Background"
            class="absolute inset-0 w-full h-full object-cover z-0 opacity-90">

        <!-- Overlay -->
        <div class="relative z-10 max-w-[90%] mx-auto flex flex-col lg:flex-row items-center justify-between pt-10">

            <!-- Left Content -->
            <div class="lg:flex-col w-full lg:w-1/3 text-center lg:text-left justify-end">
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Elige el plan que mejor
                </h1>
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                    impulsa tu crecimiento
                </h1>
                <p
                    class="text-base sm:text-lg md:text-xl text-white mb-8 max-w-2xl mx-auto lg:mx-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Desde emprendedores hasta grandes corporaciones, en Amotii
                    tenemos una solución escalable para cada etapa de tu negocio
                </p>
                <a href="{{ route('contact') }}"
                    class="bg-orange-500 text-white text-lg lg:text-2xl px-6 py-3 mt-5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-orange-400 inline-block"
                    style="will-change: transform;" onmouseover="this.style.transform='scale(1.12)'"
                    onmouseout="this.style.transform='scale(1)'">
                    {{ __('Request your free demo') }}
                </a>
            </div>

            <!-- Right Content -->
            <div class="relative w-full lg:w-2/3 flex justify-center lg:justify-end lg:items-center lg:mt-0">
                <img src="{{ asset('assets/img/plans/img_h.png') }}" alt="Hero Image"
                    class="w-[300px] sm:w-[350px] md:w-[450px] lg:w-[800px] xl:w-[800px] max-w-full self-end" />
            </div>
        </div>
    </section>

    <!-- block1 -->
    <section x-data="pricingPlans" class="bg-[#2f2f2f] text-white py-10 pb-5 px-6 lg:px-0">
        <div class="max-w-7xl lg:max-w-9/10 mx-auto text-center mb-16 lg:px-0">
            <!-- Título -->
            <div class="mb-8">
                <h2
                    class="text-4xl sm:text-4xl lg:text-5xl font-extrabold text-orange-500 hover:scale-105 transition-transform duration-300 ease-in-out">
                    Planes
                </h2>
            </div>

            <!-- Contenedor de tarjetas -->
            <div class="flex flex-col md:flex-col lg:flex-row gap-10 lg:gap-10 justify-center items-center lg:items-start">

                <template x-for="plan in plans" :key="plan.name">
                    <div
                        class="flex-1 flex flex-col bg-[#2f2f2f] border-2 border-orange-500 text-start rounded-3xl p-8 w-full max-w-md min-h-[800px] hover:scale-105 transition-transform duration-300 ease-in-out">

                        <!-- Nombre y precio -->
                        <h3 class="text-3xl font-normal mb-2" x-text="plan.name"></h3>
                        <p class="text-6xl font-extrabold mb-2" x-text="`$${plan.price}`"></p>

                        <!-- Descripción -->
                        <p class="bg-[#656565] text-lg p-1 text-center rounded-full mb-4 inline-block"
                            x-text="plan.description"></p>

                        <!-- Botón -->
                        <a href="#"
                            class="bg-orange-500 text-white py-2 px-5 rounded-md text-xl font-extralight tracking-wide hover:bg-orange-600 transition duration-300 mb-6 text-center">
                            <p>Empieza ahora</p>
                        </a>

                        <!-- Texto adicional -->
                        <p class="text-lg text-white mb-4" x-text="plan.extradata"></p>

                        <!-- Características -->
                        <ul class="text-sm space-y-3 text-white text-left">
                            <template x-for="feature in plan.features" :key="feature">
                                <li class="flex gap-2 items-start">
                                    <span class="text-orange-400 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" fill="#ff6900">
                                            <path
                                                d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                        </svg>
                                    </span>
                                    <p class="text-lg text-white" x-text="feature"></p>
                                </li>
                            </template>
                        </ul>
                    </div>
                </template>

            </div>
        </div>
    </section>
    <!-- End block1 -->

    <!-- block2 -->
    <section class="w-full py-16 bg-[#efeded] mb-[-65px] px-4 sm:px-6 md:px-10 lg:px-0">
        <div class="w-full mx-auto">
            <div class="flex flex-col md:flex-row items-center lg:ml-[-150px] md:gap-y-0 lg:gap-0">

                <!-- Imagen a la izquierda -->
                <div class="w-full md:w-1/2 flex justify-start md:justify-start">
                    <img src="{{ asset('assets/img/plans/img_1.png') }}" alt="Sugerencias IA"
                        class="lg:ml[-500px] w-[250px] sm:w-[300px] md:w-full max-w-sm md:max-w-none object-contain hover:scale-105 transition-transform duration-300 ease-in-out" />
                </div>

                <!-- Texto a la derecha -->
                <div class="max-w-4xl md:w-1/2 text-start md:text-left lg:text-left">
                    <h2
                        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                        Automatización y soluciones inteligentes diseñadas para tu negocio
                    </h2>

                    <p
                        class="text-black text-xl font-semibold sm:text-lg tracking-wide md:text-xl lg:text-xl lg:max-w-2xl mb-6 leading-relaxed hover:scale-105 transition-transform duration-300 ease-in-out">
                        Cada empresa tiene un ADN único. En Amotii diseñamos soluciones que se adaptan
                        a tus procesos. Nos integramos a tus procesos, tu equipo y tu forma de operar para crear un sistema
                        inteligente que evoluciona contigo y responde exactamente a lo que tu negocio
                        necesita para escalar con eficiencia
                    </p>

                    <a href="#"
                        class="bg-orange-500 text-white text-base sm:text-lg md:text-xl lg:text-2xl px-6 sm:px-8 py-3 rounded-2xl shadow-md hover:shadow-lg hover:bg-orange-600 transition-all duration-300 inline-block hover:scale-105 ease-in-out">
                        <p>Comienza hoy</p>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Section Contact -->
    @include('partials.contacts')

@endsection
