{{-- About Us Section on Homepage --}}
<section id="about-home" class="relative bg-black text-white overflow-hidden">
    <x-container>
        <div class="flex flex-col md:flex-row items-start py-20 gap-5">
            <!-- Logo & About Text Block -->
            <div class="flex-shrink-0 w-full md:w-[10%]">
                <div class="about-home-logo w-24 md:w-32 p-3 flex flex-col items-end justify-end overflow-hidden bg-[#81562A]">
                    <img 
                        src="{{ asset('images/logo-black.svg') }}" 
                        alt="Kubik Logo" 
                        class="w-full h-full object-contain logo-image" 
                        loading="lazy"
                    />
                    <span class="mt-[70px] text-xs tracking-widest uppercase text-white/80 text-center md:text-left block font-sora logo-text">
                        About Us
                    </span>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-full md:w-[90%] flex items-start pt-[115px]">
                <div class="mx-auto md:mx-0 text-center md:text-left">
                    <h2 class="about-home-heading font-silk-serif font-medium text-3xl md:text-[50px] !leading-[55px] mb-6 space-y-4">
                        <div class="overflow-hidden">
                            <p class="about-home-line">
                                Since 2005, <span class="text-[#F8B26A]">Kubik</span> Construction has delivered timeless design and flawless execution.
                            </p>
                        </div>
                        <div class="overflow-hidden">
                            <p class="about-home-line">
                                We transform London’s most iconic properties into elegant contemporary homes while respecting their historic charm.
                            </p>
                        </div>
                    </h2>
                </div>
            </div>
        </div>
    </x-container>
</section>
