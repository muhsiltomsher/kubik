{{-- Our Expertise Section --}}
<section id="expertise" class="bg-black text-white pb-[100px]">
    <x-container>
        <div>
            <!-- Section Heading -->
            <div class="text-left pl-[5%] mb-7">
                <p class="text-sm text-primary uppercase tracking-widest font-light mb-2">Our Expertise</p>
                <h2 class="text-3xl md:text-5xl font-sans font-light leading-tight">
                    Where Craft Meets Concept,<br />
                    and Detail Defines Distinction
                </h2>
            </div>

            <div class="expertise-grid space-y-4">
                <!-- Row 1 -->
                <div class="flex flex-col md:flex-row gap-4 items-end">
                    <!-- Item 1 -->
                    <a href="#" class="group relative overflow-hidden h-[450px] flex-1 md:basis-[30%] border border-primary/10 hover:border-primary/50 transition-all duration-500 ease-in-out">
                        <img src="{{ asset('images/services/service-1.jpg') }}" alt="Construction Services"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-black/40 z-10"></div>
                        <div class="absolute bottom-6 left-6 z-20 space-y-1 text-left">
                            <h3 class="text-xl uppercase font-sans font-light group-hover:text-primary transition-colors duration-300">
                                Construction Services
                            </h3>
                            <p class="text-sm text-white/70 font-light">Precision Building, Timeless Results</p>
                        </div>
                        <div class="expertise-arrow absolute bottom-6 right-6 z-20 opacity-0 translate-y-3">
                            <span class="w-9 h-9 flex items-center justify-center rounded-full bg-primary text-black border border-[#F8B26A]/20 transition-all duration-300">
                                <i class="fi fi-ts-angle-small-right text-3xl leading-[50px] flex items-center"></i>
                            </span>
                        </div>
                    </a>

                    <!-- Item 2 -->
                    <a href="#" class="group relative overflow-hidden h-[320px] flex flex-col justify-end flex-1 md:basis-[70%] border border-primary/10 hover:border-primary/50 transition-all duration-500 ease-in-out">
                        <img src="{{ asset('images/services/service-2.jpg') }}" alt="Contractors & Trade Centres"
                             class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 z-0" />
                        <div class="absolute inset-0 bg-black/40 z-10"></div>
                        <div class="relative z-20 flex items-end justify-between px-6 pb-6 w-full">
                            <div class="space-y-1 text-left">
                                <h3 class="text-xl uppercase font-sans font-light group-hover:text-primary transition-colors duration-300">
                                    Contractors & Trade Centres
                                </h3>
                                <p class="text-sm text-white/70 font-light">Curated Quality, Competitive Advantage.</p>
                            </div>
                            <div class="expertise-arrow opacity-0 translate-y-3">
                                <span class="w-9 h-9 flex items-center justify-center rounded-full bg-primary text-black border border-[#F8B26A]/20 transition-all duration-300">
                                    <i class="fi fi-ts-angle-small-right text-3xl leading-[50px] flex items-center"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Row 2 -->
                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Item 3 -->
                    <a href="#" class="group relative overflow-hidden h-[300px] flex-1 md:basis-[60%] border border-primary/10 hover:border-primary/50 transition-all duration-500 ease-in-out">
                        <img src="{{ asset('images/services/service-3.jpg') }}" alt="Professional Services"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-black/40 z-10"></div>
                        <div class="absolute bottom-6 left-6 z-20 space-y-1 text-left">
                            <h3 class="text-xl uppercase font-sans font-light group-hover:text-primary transition-colors duration-300">
                                Professional Services
                            </h3>
                            <p class="text-sm text-white/70 font-light">From Concept to Completion</p>
                        </div>
                        <div class="expertise-arrow absolute bottom-6 right-6 z-20 opacity-0 translate-y-3">
                            <span class="w-9 h-9 flex items-center justify-center rounded-full bg-primary text-black border border-[#F8B26A]/20 transition-all duration-300">
                                <i class="fi fi-ts-angle-small-right text-3xl leading-[50px] flex items-center"></i>
                            </span>
                        </div>
                    </a>

                    <!-- Item 4: Video -->
                    <a href="#" class="group relative overflow-hidden h-[300px] flex-1 md:basis-[40%] border border-primary/10 hover:border-primary/50 transition-all duration-500 ease-in-out">
                        <video autoplay muted loop playsinline
                               class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 z-0">
                            <source src="{{ asset('videos/coming-soon.mp4') }}" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                        <div class="absolute inset-0 bg-black/60 z-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center z-20">
                            {{-- Optional Coming Soon Text --}}
                        </div>
                        <div class="expertise-arrow absolute bottom-6 right-6 z-20 opacity-0 translate-y-3">
                            <span class="w-9 h-9 flex items-center justify-center rounded-full bg-primary text-black border border-[#F8B26A]/20 transition-all duration-300">
                                <i class="fi fi-ts-angle-small-right text-3xl leading-[50px] flex items-center"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </x-container>
</section>
