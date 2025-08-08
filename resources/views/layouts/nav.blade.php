<nav class="bg-transparent shadow-none absolute top-0 left-0 w-full z-50">
    <div class="w-full max-w-9/10 mx-auto pt-10 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-3xl font-bold text-primary flex items-center space-x-2">
            <img src="{{ asset('assets/img/index/logo_navbar.jpg') }}" alt="Logo" class=" h-10 w-auto">
        </a>

        <!-- Desktop nav -->
        <ul class="hidden md:flex space-x-6 text-2xl text-gray-200 items-center relative">
            <li x-data="{ open: false }" class="relative">
                <button type="button" @mouseenter="open = true" @focus="open = true" @click="open = !open"
                    class="flex items-center hover:text-primary cursor-pointer focus:outline-none">
                    <p>{{ __('Products') }}</p>
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
                    <a href="{{ route('tiicall.index') }}"
                        class="px-4 py-2 hover:text-orange-500 hover:scale-105 transition-colors duration-200"
                        @click="open = false">{{ __('Virtual voice agents') }}</a>
                    <a href="{{ route('tiibot.index') }}"
                        class="px-4 py-2 hover:text-orange-500 hover:scale-105 transition-colors duration-200"
                        @click="open = false">{{ __('Intelligent Chatbots') }}</a>
                </div>
            </li>
            <li>
                <a href="{{ route('partners.index') }}" 
                   class="{{ request()->routeIs('partners.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
                   <p>Partners</p>
                </a>
            </li>
            <li><a href="{{ route('plans.index') }}" class="{{ request()->routeIs('plans.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}"><p>{{__('Plans')}}</p></a></li>
            <li><a href="{{ route('referred.index') }}" class="{{ request()->routeIs('referred.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}"><p>Referidos</p></a></li>
            <li><a href="{{ route('contact.index') }}"class="{{ request()->routeIs('contact.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}"><p>{{__('Contact')}}</p></a></li>
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
                class="cursor-pointer flex justify-between items-center font-semibold hover:text-primary transition-colors duration-200 hover:text-orange-500">
                <span>{{ __('Products') }}</span>
                <svg class="ml-2 h-4 w-4 transition-transform duration-300 group-open:rotate-180" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </summary>
            <div class="ml-4 mt-2 space-y-1 animate-fade-in">
                <a href="#tiibot" class="block hover:text-orange-500 transition-colors duration-200">{{__('Virtual voice agents')}}</a>
                <a href="#tiicall" class="block hover:text-orange-500 transition-colors duration-200">{{__('Intelligent Chatbots')}}</a>
            </div>
        </details>
        <a href="#servicios" class="block hover:text-orange-500">{{ __('Services') }}</a>
        <a href="#integraciones" class="block hover:text-orange-500">Partners</a>
        <a href="{{ route('plans.index') }}" class="block hover:text-orange-500">{{ __('Plans') }}</a>
        <a href="{{ route('contact.index') }}" class="block hover:text-orange-500">{{ __('Contact') }}</a>
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
