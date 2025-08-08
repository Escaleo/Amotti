<section class="relative w-full py-18 text-white" style="z-index: 0;" x-data>
    <!-- Fondo -->
    <div class="absolute inset-0 w-full h-full z-0">
        <img src="{{ asset('assets/img/products/tiicall/fondo_form.jpg') }}" alt="fondo" class="w-full h-full ">
    </div>

    <!-- Contenido -->
    <div class="relative z-10 max-w-9/10 mx-auto flex flex-col lg:flex-row items-center justify-between gap-10">

        <!-- IZQUIERDA -->
        <div class="w-full lg:w-1/3 text-center lg:text-left">
            <h1
                class="text-5xl font-bold mb-4 leading-tight hover:scale-105 transition-transform duration-300 ease-in-out">
                Súmate y comienza a
                generar ingresos hoy
            </h1>
            <p
                class="text-2xl font-light max-w-md mx-auto lg:mx-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                Regístrate gratis en el Plan de Referidos de
                Amotii y gana comisiones por cada cliente
                que llegue gracias a tu recomendación
            </p>
        </div>

        <!-- FORMULARIO -->
        <div
            class="w-full lg:w-1/3 bg-orange-500 rounded-[2rem] p-8 flex flex-col justify-center items-center shadow-xl">
            <form action="#" method="POST" class="w-full space-y-4 text-black font-light">

                <!-- Nombres -->
                <input type="text" name="nombre" placeholder="Nombres"
                    class="w-full bg-white px-5 py-3 rounded-full focus:outline-none focus:ring-2 ring-orange-300">

                <!-- Teléfono -->
                <div class="flex flex-col space-y-2">
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

                    <input type="text" name="telefono_numero" placeholder="Número de teléfono"
                        class="w-full mt-2 bg-white px-5 py-3 rounded-full focus:outline-none focus:ring-2 ring-orange-300">
                </div>

                <!-- Email -->
                <input type="email" name="email" placeholder="E-mail"
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
