<div class="w-100 h-72 perspective">
    <div class="relative w-full h-full duration-700 transform-style preserve-3d transition-transform hover:rotate-y-180">

        <!-- Front -->
        <div
            class="absolute w-full h-full bg-gradient-to-b from-orange-600 to-orange-300 text-white rounded-[2rem] flex flex-col items-center justify-center backface-hidden p-6">
            @if ($icon)
                <img src="{{ asset($icon) }}" alt="Icon" class="w-25 h-25 object-contain mb-4">
            @endif
            <h3 class="text-xl font-bold text-center leading-tight">
                {!! nl2br(e($front)) !!}
            </h3>
        </div>

        <!-- Back -->
        <div
            class="absolute w-full h-full bg-white text-gray-800 rounded-[2rem] flex flex-col items-center justify-center rotate-y-180 backface-hidden p-6 shadow-lg">
            <p class="text-sm text-center leading-relaxed">
                {{ $back }}
            </p>
        </div>

    </div>
</div>
