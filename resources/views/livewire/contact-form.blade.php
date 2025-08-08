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

    @if (session()->has('success'))
        <div class="w-full mb-4 p-3 rounded-xl bg-green-100 text-green-800 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="w-full space-y-4 text-black font-light">
        @csrf

        <!-- Nombres -->
        <input type="text" wire:model.defer="nombre" name="nombre" placeholder="Nombres"
            class="w-full bg-white px-5 py-3 rounded-full focus:outline-none focus:ring-2 @error('nombre') border border-red-500 ring-red-300 @enderror"
            @error('nombre') aria-invalid="true" @enderror required>
        @error('nombre')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror

        <!-- Teléfono -->
        <input type="tel" wire:model.defer="telefono" name="telefono" id="telefono" data-phone
            placeholder="Número de teléfono" autocomplete="tel"
            class="w-full bg-white px-5 py-3 rounded-full focus:outline-none focus:ring-2 @error('telefono') border border-red-500 ring-red-300 @enderror"
            @error('telefono') aria-invalid="true" @enderror required>
        @error('telefono')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror

        <!-- Email -->
        <input type="email" wire:model.defer="email" name="email" placeholder="E-mail"
            class="w-full px-5 py-3 bg-white rounded-full focus:outline-none focus:ring-2 @error('email') border border-red-500 ring-red-300 @enderror"
            @error('email') aria-invalid="true" @enderror required>
        @error('email')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror

        <!-- Página Web -->
        <input type="text" wire:model.defer="web" name="web" placeholder="Página Web"
            class="w-full px-5 py-3 bg-white rounded-full focus:outline-none focus:ring-2 @error('web') border border-red-500 ring-red-300 @enderror"
            @error('web') aria-invalid="true" @enderror>
        @error('web')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror

        <!-- Mensaje -->
        <textarea wire:model.defer="mensaje" name="mensaje" placeholder="Mensaje" rows="4"
            class="w-full px-5 py-3 bg-white rounded-2xl focus:outline-none focus:ring-2 @error('mensaje') border border-red-500 ring-red-300 @enderror"
            @error('mensaje') aria-invalid="true" @enderror required></textarea>
        @error('mensaje')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror

        <!-- Check -->
        <div class="flex items-start gap-3 text-sm mt-4 text-white">
            <input type="checkbox" wire:model.defer="privacidad" id="privacidad" 
                class="mt-1 shrink-0 w-5 h-5 accent-white rounded focus:ring-2 focus:ring-orange-300 @error('privacidad') ring-red-300 @enderror"
                @error('privacidad') aria-invalid="true" @enderror required />
            <label for="privacidad" class="leading-5">
                He leído y acepto los
                <a href="#" class="underline hover:text-orange-300 transition-colors duration-200">términos y condiciones</a> y la
                <a href="#" class="underline hover:text-orange-300 transition-colors duration-200">política de privacidad</a>.
            </label>
        </div>
        @error('privacidad')
            <p class="text-red-200 text-sm mt-1">{{ $message }}</p>
        @enderror

        <!-- Botón -->
        <div class="text-center pt-4">
            <button type="submit" wire:loading.attr="disabled"
                class="bg-black w-full text-white font-semibold cursor-pointer py-2 px-6 rounded-full hover:bg-white hover:text-orange-500 hover:scale-105 transition-transform duration-300 ease-in-out disabled:opacity-60">
                <span wire:loading.remove>Enviar</span>
                <span wire:loading>Enviando...</span>
            </button>
        </div>
    </form>
</div>
