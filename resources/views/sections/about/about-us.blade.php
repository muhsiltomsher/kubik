<section id="about-us-year-sec" class="bg-black text-white border-b border-gray-800 overflow-hidden">
    <x-container>
        <div class="since-content grid md:grid-cols-2 gap-8 py-[100px]" data-fade="true">
            <div>
                <p class="uppercase text-sm text-primary tracking-widest mb-4 font-light">About Kubik Construction</p>
                <h3 class="text-3xl md:text-4xl font-sans font-light leading-snug mb-6 text-white">
                    Building spaces with precision, integrity, and craftsmanship that stands the test of time.
                </h3>
            </div>
            <div class="text-gray-300 space-y-6">
                <div class="grid sm:grid-cols-2 gap-6">
                    <ul class="list-disc list-inside space-y-1 font-light text-white">
                        <li>Residential Construction</li>
                        <li>Commercial Fit-outs</li>
                        <li>Turnkey Project Delivery</li>
                    </ul>
                    <div class="text-sm leading-relaxed text-white/80 font-light">
                        Kubik Construction is a South West London-based firm delivering premium construction and property solutions for homes and businesses. We provide full-service project management with a commitment to quality and efficiency.
                    </div>
                </div>
                <p class="text-sm leading-relaxed text-white/70 font-light">
                    Our experienced team works collaboratively with private clients, architects, and designers to deliver projects with exceptional detail and care. From bespoke renovations to large-scale developments, Kubik ensures every finish is flawless.
                </p>
                <a href="#services" class="inline-block mt-4 px-6 py-2 bg-primary text-black text-sm rounded-full hover:bg-primary/90 transition font-light">
                    Explore Our Services
                </a>
            </div>
        </div>
    </x-container>

    <div id="since-year1" class="relative flex justify-center items-center min-h-screen overflow-hidden">
        <div class="since-image-container absolute inset-0 z-0 overflow-hidden">
            <img
                src="{{ asset('images/bg-cta-2.jpg') }}"
                alt="Background"
                class="since-width-image1 h-full object-cover will-change-transform"
                style="width: 0%;" />
        </div>

        <div class="absolute inset-0 bg-black bg-opacity-20 z-10"></div>

        <h2 id="since-heading1" class="relative z-20 text-[60px] sm:text-[100px] md:text-[120px] font-light leading-none tracking-tight text-primary text-center">
            SINCE 2005
        </h2>
    </div>
</section>
