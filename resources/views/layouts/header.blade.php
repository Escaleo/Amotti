<section class="relative  pb-30 mb-0 pt-30 lg:pt-60">
    <!-- Background Image -->
    <img src="{{ asset('assets/img/index/fondo_(header).webp') }}" alt="Hero Background"
        class="absolute inset-0 w-full h-full object-cover z-0">

    <!-- Overlay -->
    <div
        class="relative z-10 max-w-[90%] mx-auto px-4 flex flex-col lg:flex-row items-center justify-between gap-10 pt-10">

        <!-- Left Content -->
        <div class="w-full lg:w-2/3 text-center lg:text-left">
            <h1
                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                {{ __('Virtual agents that call,') }}
            </h1>
            <h1
                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-orange-500 mb-4 hover:scale-105 transition-transform duration-300 ease-in-out">
                {{ __('qualify and schedule for you') }}
            </h1>
            <p
                class="text-base sm:text-lg md:text-xl text-white mb-8 max-w-2xl mx-auto lg:mx-0 hover:scale-105 transition-transform duration-300 ease-in-out">
                {{ __('Integrate voice conversational AI to scale your sales, optimize your campaigns, and improve your investment performance from day one.') }}
            </p>
            <a href="{{ route('contact.index') }}"
                class="bg-orange-500 text-white text-lg lg:text-2xl px-6 py-3 mt-5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-orange-400 inline-block"
                style="will-change: transform;" onmouseover="this.style.transform='scale(1.12)'"
                onmouseout="this.style.transform='scale(1)'">
                {{ __('Request your free demo') }}
            </a>
        </div>

        <!-- Right Content -->
        <div
            class="relative lg:absolute lg:right-0 lg:top-1/2 lg:translate-y-[-50%] w-full lg:w-1/2 flex justify-center lg:justify-end mt-10 lg:mt-0 z-10">
            <img src="{{ asset('assets/img/index/Pose_3_amotii.webp') }}" alt="Hero Image"
                class="w-[300px] sm:w-[350px] md:w-[450px] lg:w-[550px] xl:w-[600px] max-w-full hover:scale-105 transition-transform duration-300 ease-in-out">
        </div>
    </div>
</section>
