<nav class="bg-transparent shadow-none absolute top-0 left-0 w-full z-50">
    <div class="w-full max-w-9/10 mx-auto pt-10 flex justify-between items-center">

        <a href="/" class="flex items-center h-16">
            <img src="{{ asset('assets/img/index/logo-01.svg') }}" alt="Logo"
                class="h-10 sm:h-12 md:h-14 lg:h-16 w-auto object-contain" />
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
            <li><a href="{{ route('partners.index') }}"
                    class="{{ request()->routeIs('partners.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
                    <p>Partners</p>
                </a></li>
            <li><a href="{{ route('plans.index') }}"
                    class="{{ request()->routeIs('plans.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
                    <p>{{ __('Plans') }}</p>
                </a></li>
            <li><a href="{{ route('referred.index') }}"
                    class="{{ request()->routeIs('referred.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
                    <p>Referidos</p>
                </a></li>
            <li><a
                    href="{{ route('contact.index') }}"class="{{ request()->routeIs('contact.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
                    <p>{{ __('Contact') }}</p>
                </a></li>

            @if (request()->routeIs('home'))
                <li>
                    <a href="{{ route('register') }}"
                        class="bg-orange-500 text-white px-6 py-1.5 rounded-xl hover:bg-transparent hover:border-2 hover:border-orange-500 hover:text-orange-500 transition">
                        {{ __('Registrar') }}
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}"
                        class="bg-orange-500 text-white px-6 py-1.5 rounded-xl hover:bg-transparent hover:border-2 hover:border-orange-500 hover:text-orange-500 transition">
                        {{ __('Login') }}
                    </a>
                </li>

                <li>
                    <a href="{{ route('login') }}"
                        class="bg-orange-500 text-white px-6 py-1.5 rounded-xl hover:bg-transparent hover:border-2 hover:border-orange-500 hover:text-orange-500 transition">
                        {{ __('Registrar') }}
                    </a>
                </li>
            @endif
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
        <a href="{{ route('home') }}"
            class="{{ request()->routeIs('home') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
            <p>Home</p>
        </a>
        <details class="group mb-0">
            <summary
                class="cursor-pointer flex justify-between items-center font-normal hover:text-primary transition-colors duration-200 hover:text-orange-500">
                <p>{{ __('Products') }}</p>
                <svg class="ml-2 h-4 w-4 transition-transform duration-300 group-open:rotate-180" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </summary>
            <div class="ml-4 mt-2 space-y-1 animate-fade-in">
                <a href="{{ route('tiicall.index') }}"
                    class="{{ request()->routeIs('tiicall.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
                    <p>{{ __('Virtual voice agents') }}</p>
                </a>
                <a href="{{ route('tiibot.index') }}"
                    class="{{ request()->routeIs('tiibot.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
                    <p>{{ __('Intelligent Chatbots') }}</p>
                </a>
            </div>
        </details>
        <a href="{{ route('partners.index') }}"
            class="{{ request()->routeIs('partners.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
            <p>Partners</p>
        </a>
        <a href="{{ route('plans.index') }}"
            class="{{ request()->routeIs('plans.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
            <p>{{ __('Plans') }}</p>
        </a>
        <a href="{{ route('referred.index') }}"
            class="{{ request()->routeIs('referred.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
            <p>Referidos</p>
        </a>
        <a
            href="{{ route('contact.index') }}"class="{{ request()->routeIs('contact.index') ? 'text-orange-500 font-bold' : 'hover:text-orange-500' }}">
            <p>{{ __('Contact') }}</p>
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
