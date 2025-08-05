<div class="w-[25rem] md:w-[28rem] h-70 perspective ">
    <div class="relative w-full h-full duration-700 transform-style preserve-3d transition-transform hover:rotate-y-180 ">

        <!-- Front -->
        <div
            class="absolute w-full h-full bg-gradient-to-b from-orange-500 to-orange-300 text-white rounded-[2rem] flex flex-col items-center justify-center backface-hidden p-6">
            @if ($icon)
                <img src="{{ asset($icon) }}" alt="Icon" class="w-25 h-25 object-contain mb-4">
            @endif
            <h3 class="text-[30px] font-light text-center leading-tight">
                {!! nl2br(e($front)) !!}
            </h3>
        </div>

        <!-- Back -->
        <div
            class="absolute w-full h-full bg-white text-orange-500 rounded-[2rem] flex flex-col items-center justify-center rotate-y-180 backface-hidden p-6 shadow-lg">
            <p class="text-md text-center leading-relaxed">
                {{ $back }}
            </p>
        </div>
    </div>
</div>
