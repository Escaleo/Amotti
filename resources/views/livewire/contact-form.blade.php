<div class="w-full lg:w-1/3 bg-orange-500 rounded-[2rem] p-8 flex flex-col justify-center items-center shadow-xl">
    <form action="#" method="POST" class="w-full space-y-4 text-black font-light">

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
