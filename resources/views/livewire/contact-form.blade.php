<div class="w-full lg:w-1/3 bg-orange-500 rounded-[2rem] p-8 flex flex-col justify-center items-center shadow-xl">
    <style>
        /* Contenedor principal */
        .iti {
            width: 100%;
        }

        /* Input */
        .iti input {
            padding-left: 58px !important;
            border-radius: 9999px;
            height: auto;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            font-size: 1rem;
        }

        /* Dropdown */
        .iti__country-list {
            border-radius: 1rem;
            max-height: 250px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            overflow-y: auto;
            font-size: 1rem;
        }

        /* Cada opción */
        .iti__country {
            padding: 10px 16px;
            transition: background-color 0.2s ease-in-out;
        }

        .iti__country:hover {
            background-color: #f97316;
            color: white;
        }

        /* Icono desplegable */
        .iti__arrow {
            margin-left: 8px;
            border-top-color: #000;
        }
    </style>
    <form action="#" method="POST" class="w-full space-y-4 text-black font-light">
        @csrf
        <!-- Nombres -->
        <input type="text" name="nombre" placeholder="Nombres"
            class="w-full bg-white px-5 py-3 rounded-full focus:outline-none focus:ring-2 ring-orange-300" required>

        <!-- Teléfono con data-phone -->
        <input type="tel" name="telefono" id="telefono" data-phone placeholder="Número de teléfono"
            autocomplete="tel"
            class="w-full bg-white px-5 py-3 rounded-full focus:outline-none focus:ring-2 ring-orange-300" required>

        <!-- Email -->
        <input type="email" name="email" placeholder="E-mail"
            class="w-full px-5 py-3 bg-white rounded-full focus:outline-none focus:ring-2 ring-orange-300" required>

        <!-- Página Web -->
        <input type="text" name="web" placeholder="Página Web"
            class="w-full px-5 py-3 bg-white rounded-full focus:outline-none focus:ring-2 ring-orange-300">

        <!-- Check -->
        <div class="flex items-start gap-3 text-sm mt-4 text-white">
            <input type="checkbox" id="privacidad" required
                class="mt-1 shrink-0 w-5 h-5 accent-white rounded focus:ring-2 focus:ring-orange-300" />

            <label for="privacidad" class="leading-5">
                He leído y acepto los
                <a href="#" class="underline hover:text-orange-300 transition-colors duration-200">términos y
                    condiciones</a> y la
                <a href="#" class="underline hover:text-orange-300 transition-colors duration-200">política de
                    privacidad</a>.
            </label>
        </div>

        <!-- Botón -->
        <div class="text-center pt-4">
            <button type="submit"
                class="bg-black w-full text-white font-semibold cursor-pointer py-2 px-6 rounded-full hover:bg-white hover:text-orange-500  hover:scale-105 transition-transform duration-300 ease-in-out">
                Enviar
            </button>
        </div>
    </form>
</div>
