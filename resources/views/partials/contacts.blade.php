<section class="relative w-full py-18 text-white" style="z-index: 0;" x-data>
    <!-- Fondo -->
    <div class="absolute inset-0 w-full h-full z-0">
        <img src="{{ asset('assets/img/products/tiicall/fondo_form.webp') }}" alt="fondo" class="w-full h-full ">
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
        @include('livewire.contact-form')

        <!-- DERECHA (IMAGEN DE PERSONAJE) -->
        <div class="relative w-0 md:w-0 lg:w-1/3 flex justify-center items-center">
            <img src="{{ asset('assets/img/index/Pose_2_Amotii_v02.webp') }}" alt="Personaje"
                class="absolute w-[240px] lg:w-[500px] hover:scale-105 transition-transform duration-300 ease-in-out">
        </div>
    </div>
</section>
