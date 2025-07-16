<section
    id="pageHero"
    class="relative bg-black text-white h-[90vh] flex items-center justify-center overflow-hidden"
>
    {{-- Background Image --}}
    <img
        src="{{ $image }}"
        alt="{{ $title }}"
        class="hero-bg absolute inset-0 w-full h-full object-cover z-0 opacity-60 will-change-transform"
    />

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black bg-opacity-20 z-0"></div>

    {{-- Content --}}
    <div class="relative z-10 text-center px-4">
        <h1 class="hero-title text-4xl md:text-6xl font-silk-serif font-medium leading-tight mb-4">
            {{ $title }}
        </h1>
        <p class="hero-subtitle text-lg md:text-xl text-white/80">
            {{ $subtitle }}
        </p>
    </div>
</section>
