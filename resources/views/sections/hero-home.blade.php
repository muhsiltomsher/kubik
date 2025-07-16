<section id="video-hero" class="relative h-screen w-full overflow-hidden">
    <!-- Video Background -->
    <video id="intro-video" autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0 scale-125 opacity-0">
        <source src="{{ asset('videos/intro.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlays -->
    <div class="absolute inset-0 bg-black/30 z-10 overlay-dark"></div>
    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-black to-transparent z-20 overlay-bottom"></div>
    <div class="absolute top-0 left-0 w-full h-1/4 bg-gradient-to-b from-black/50 to-transparent z-20 overlay-top"></div>

    <!-- Hero Content -->
    <div class="relative z-30 flex flex-col justify-center items-center h-full text-white text-center px-4">
        <h1 id="intro-title" class="font-silk-serif font-medium text-6xl sm:text-7xl md:text-8xl tracking-[.3em] opacity-0">
            KUBIK
        </h1>
        <p id="intro-subtitle" class="font-silk-serif font-medium text-2xl sm:text-3xl md:text-4xl mt-4 opacity-0">
            The Art of Building
        </p>
        <p id="intro-tagline" class="font-silk-serif font-medium text-base sm:text-lg md:text-xl uppercase tracking-wide mt-2 opacity-0">
            Excellence in London
        </p>
    </div>
</section>

