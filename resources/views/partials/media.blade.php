@php
    $videoUrl = $videoUrl ?? 'https://www.youtube.com/embed/_5RVFb_OuvE';
@endphp
<div class="bg-[#efeded] w-full flex justify-center z-20 mb-40" style="margin-top: -15rem;">
    <div class="relative w-full max-w-4xl aspect-video overflow-hidden rounded-xl shadow-4xl">
        <iframe class="absolute top-0 left-0 w-full h-full" src="{{ $videoUrl }}"
            title="Hero video" frameborder="0" loading="lazy"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
</div>
