<footer class="bg-orange-500 text-white py-12">
    <div class="max-w-9/10 mx-auto flex flex-col md:flex-row ">

        <!-- Izquierda: Logo + descripción + copyright -->
        <div class="flex flex-col justify-between md:w-1/4">
            <!-- Logo -->
            <img src="{{asset('assets/img/logo-footer-01.svg')}}" alt="Amotii Logo" class="w-[120px] mb-4" />

            <!-- Descripción -->
            <p class="text-2xl font-light mb-8">
                Quis ipsum suspendisse ultrices lorem gravida. Risus commodo viverra maecenas accumsan.
            </p>

            <!-- Copyright -->
            <p class="text-sm font-light">&copy; 2025 Amotii. Todos los derechos reservados</p>
        </div>

        <!-- Derecha: 3 columnas -->
        <div class="flex flex-col sm:flex-row gap-12 md:w-3/4 justify-evenly">

            <!-- Servicios -->
            <div>
                <h3 class="text-3xl font-semibold underline mb-2">Servicios</h3>
                <ul class="space-y-1 text-lg font-extralight tracking-wide">
                    <li><a href="#" class="hover:underline"><p>Restaurantes</p></a></li>
                    <li><a href="#" class="hover:underline"><p>E-Commerce</p></a></li>
                </ul>
            </div>

            <!-- Menú -->
            <div>
                <h3 class="text-3xl font-semibold underline mb-2">Menú</h3>
                <ul class="space-y-1 text-lg tracking-wide font-extralight">
                    <li><a href="{{route('tiicall.index')}}" class="hover:underline"><p>Productos</p></a></li>
                    <li><a href="{{route('plans.index')}}" class="hover:underline"><p>Planes</p></a></li>
                    <li><a href="{{route('referred.index')}}" class="hover:underline"><p>Referidos</p></a></li>
                    <li><a href="{{route('partners.index')}}" class="hover:underline"><p>Partners</p></a></li>
                    <li><a href="{{route('contact.index')}}" class="hover:underline"><p>Contáctanos</p></a></li>
                </ul>
            </div>

            <!-- Contáctanos -->
            <div>
                <h3 class="text-3xl font-semibold underline mb-2"><p>Contáctanos</p></h3>
                <ul class="space-y-1 text-lg font-extralight mb-4">
                    <li><span class="font-extraligth tracking-wide"><p>Dirección:</p></span></li>
                    <li><span class="font-extraligth tracking-wide"><p>E-mail:</p></span></li>
                    <li><span class="font-extraligth tracking-wide"><p>Teléfonos:</p></span></li>
                </ul>
                <!-- Redes sociales -->
                <div class="flex space-x-4 text-xl">
                    <a href="#" class="hover:text-gray-200 transition"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="hover:text-gray-200 transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-gray-200 transition"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
