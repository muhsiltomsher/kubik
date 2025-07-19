{{-- CTA Form Section --}}
<section id="ctaSection" class="relative overflow-hidden text-white py-[100px] px-6 md:px-12 lg:px-24">
    <!-- Parallax Background Layer -->
    <div id="ctaBg" class="absolute inset-0 bg-cover bg-center z-0 will-change-transform" style="background-image: url('{{ asset('images/bg-cta.jpg') }}');"></div>

    <x-container>
        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <!-- Left Text -->
            <div id="ctaText" class="scroll-fade">
                <h2 class="text-white text-4xl md:text-5xl font-sans font-light leading-tight mb-6">
                    Enquire with us <br />
                    design your dream <br />
                    home today
                </h2>

                <p class="text-primary text-base leading-relaxed mb-8 max-w-md pb-6 border-b border-primary">
                    SIMPLY FILL IN THIS FORM STATING YOUR REQUIREMENTS AND WE’LL BE IN CONTACT TO HELP YOU FIND YOUR NEXT HOME.
                </p>

                <a href="#" class="inline-block bg-secondary text-white font-extralight py-3 px-6 hover:bg-secondary/90 transition">
                    See Our Locations
                </a>
            </div>

            <!-- Right Form -->
            <form id="ctaForm" class="scroll-fade bg-black/50 backdrop-blur-sm p-8 space-y-6 ">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm mb-1">First name*</label>
                        <input type="text" id="first_name" name="first_name" required class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="First name">
                    </div>
                    <div class="md:col-span-1">
                        <label for="email" class="block text-sm mb-1">Email*</label>
                        <input type="email" id="email" name="email" required class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Email">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                    <div>
                        <label for="country_code" class="block text-sm mb-1">Phone number*</label>
                        <select id="country_code" name="country_code" required class="w-full bg-transparent border border-white/30 text-white py-3 px-4 appearance-none focus:outline-none focus:ring-2 focus:ring-primary">
                            <option class="text-black" value="uk" selected>United Kingdom (+44)</option>
                            <option class="text-black" value="ae">United Arab Emirates (+971)</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm invisible mb-1">Phone</label>
                        <input type="tel" name="phone" required class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="+44">
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm mb-1">Message*</label>
                    <textarea id="message" name="message" rows="4" required class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Tell us about your requirements..."></textarea>
                </div>

                <button type="submit" class="w-full bg-secondary text-white font-semibold py-3 px-6 hover:bg-secondary/90 transition">
                    Submit
                </button>
            </form>
        </div>
    </x-container>
</section>
