<nav class="bg-transparent shadow-none absolute top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto py-6 px-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-3xl font-bold text-primary flex items-center space-x-2">
            <img src="{{ asset('img/index/icon') }}" alt="Logo" class="h-10 w-auto">
            <span>{{ config('app.name', 'Amotti') }}</span>
        </a>

        <!-- Desktop nav -->
        <ul class="hidden md:flex space-x-6 text-lg text-gray-200 items-center relative">
            <li x-data="{ open: false }" class="relative">
                <button type="button" @mouseenter="open = true" @focus="open = true" @click="open = !open"
                    class="flex items-center hover:text-primary cursor-pointer focus:outline-none">
                    <span>{{ __('Products') }}</span>
                    <svg class="ml-1 h-4 w-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <!-- Dropdown -->
                <div x-show="open" @mouseleave="open = false" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="flex flex-col absolute top-full left-0 bg-gray-200 text-gray-800 text-sm rounded-md shadow-lg mt-2 py-2 min-w-[200px] z-50"
                    style="display: none;">
                    <a href="#tiibot"
                        class="px-4 py-2 hover:text-orange-500 hover:scale-105 transition-colors duration-200"
                        @click="open = false">{{ __('Virtual voice agents') }}</a>
                    <a href="#tiibot"
                        class="px-4 py-2 hover:text-orange-500 hover:scale-105 transition-colors duration-200"
                        @click="open = false">{{ __('Intelligent Chatbots') }}</a>
                </div>
            </li>
            <li><a href="{{ route('partners')}}" class="hover:text-primary">Partners</a></li>
            <li><a href="{{ route('plans') }}" class="hover:text-primary">{{ __('Plans') }}</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-primary">{{ __('Contact') }}</a></li>
            <li>
                <a href="{{ route('login') }}"
                    class="bg-orange-500 text-white px-4 py-1.5 rounded-xl hover:bg-orange-600 transition">
                    {{ __('Try it Free') }}
                </a>
            </li>
        </ul>

        <!-- Mobile hamburger -->
        <button id="menuToggle" class="md:hidden text-white focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white text-gray-900 px-4 pt-4 pb-6 space-y-4 transition">
        <details class="group">
            <summary
                class="cursor-pointer flex justify-between items-center font-semibold hover:text-primary transition-colors duration-200">
                <span>{{ __('Products') }}</span>
                <svg class="ml-2 h-4 w-4 transition-transform duration-300 group-open:rotate-180" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </summary>
            <div class="ml-4 mt-2 space-y-1 animate-fade-in">
                <a href="#tiibot" class="block hover:text-primary transition-colors duration-200">TiiBot</a>
                <a href="#tiicall" class="block hover:text-primary transition-colors duration-200">TiiCall</a>
                <a href="#amotiiTalk" class="block hover:text-primary transition-colors duration-200">AmotiiTalk</a>
                <a href="#amotiiMail" class="block hover:text-primary transition-colors duration-200">AmotiiMail</a>
            </div>
        </details>
        <a href="#servicios" class="block hover:text-primary">{{ __('Services') }}</a>
        <a href="#integraciones" class="block hover:text-primary">Partners</a>
        <a href="{{ route('plans') }}" class="block hover:text-primary">{{ __('Plans') }}</a>
        <a href="{{ route('contact') }}" class="block hover:text-primary">{{ __('Contact') }}</a>
        <a href="{{ route('login') }}"
            class="block bg-orange-500 text-white px-4 py-2 rounded-xl hover:bg-orange-600 text-center">
            {{ __('Try it Free') }}
        </a>
    </div>
</nav>
<script>
    const toggleBtn = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
