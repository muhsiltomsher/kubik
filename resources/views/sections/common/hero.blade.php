<section
    id="pageHero"
    class="relative bg-black text-white h-[50vh] flex items-center justify-center overflow-hidden border-b border-gray-800"
>
    {{-- Decorative Gradient Light --}}
    <div class="absolute -top-24 left-1/2 transform -translate-x-1/2 w-[400px] h-[400px] bg-gradient-to-br from-primary/10 to-transparent rounded-full blur-3xl z-0"></div>

    {{-- Content --}}
    <div class="relative z-10 text-center px-4 max-w-3xl">
        <h1 class="text-4xl md:text-6xl font-sans font-light leading-tight mb-6 animate-fade-in-up">
            {{ $title }}
        </h1>
        <p class="text-lg md:text-xl text-primary/80 font-light animate-fade-in-up delay-200">
            {{ $subtitle }}
        </p>
    </div>
</section>
