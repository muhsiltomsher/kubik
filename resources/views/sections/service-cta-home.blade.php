<!-- Sections CTA Service (Home) with Enhanced GSAP Animations -->
<section id="service-cta-home" class="relative bg-black text-white overflow-hidden w-full">
    <div class="flex flex-col md:flex-row items-center py-20 gap-8 relative z-10">

        <!-- Left Text Box with background color and pattern -->
        <div class="relative md:basis-[50%] px-10 py-14 text-white overflow-hidden bg-[#9C6B35] animate-left-scroll">
            <div class="absolute inset-0 bg-[url('/images/pattern-grid.svg')] opacity-10 bg-repeat z-0"></div>
            <div class="relative z-10 pl-[10%]">
                <h3 class="text-2xl md:text-3xl font-semibold leading-snug uppercase mb-6 gsap-fade-in">
                    Your Vision Deserves More Than<br />
                    A Blueprint — It Deserves Kubik
                </h3>
                <p class="text-base md:text-lg leading-relaxed mb-8 gsap-fade-in">
                    Whether you’re restoring a treasured heritage home or crafting a new architectural statement,
                    our team is here to guide you — with discretion, distinction, and design integrity.
                </p>
                <a href="#" class="inline-flex items-center gap-2 text-sm uppercase tracking-wide group gsap-fade-in">
                    Read More
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6l6 6-6 6" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Right Image and Heading -->
        <div class="relative animate-right-scroll">
            <div class="relative w-[600px] h-auto group perspective">
                <img src="{{ asset('images/cta-room.png') }}" alt="Room Design"
                    class="w-full h-full object-cover transform-gpu transition-transform duration-500 ease-out motion-image shadow-xl rounded-lg" />
                <div class="absolute inset-0 flex flex-col justify-center pl-6 md:pl-[300px] z-10">
                    <h2 class="text-white font-silk-serif leading-tight tracking-tight gsap-heading">
                        <div class="text-4xl md:text-6xl gsap-line">Let’s Build</div>
                        <div class="text-4xl md:text-6xl pl-6 md:pl-10 gsap-line">Something</div>
                        <div class="text-4xl md:text-6xl pl-12 md:pl-20 gsap-line">Exceptional</div>
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>

