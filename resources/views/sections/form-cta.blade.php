{{-- CTA Form Section --}}
<section id="ctaSection" class="relative overflow-hidden bg-cover bg-center text-white py-[100px] px-6 md:px-12 lg:px-24" style="background-image: url('{{ asset('images/bg-cta.jpg') }}');">
    <x-container>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <!-- Left Text -->
            <div id="ctaText">
                <h2 class="text-white text-4xl md:text-5xl font-silk-serif font-medium leading-tight mb-6">
                    Make an enquiry <br />
                    find your new <br />
                    home today
                </h2>

                <p class="text-primary text-base leading-relaxed mb-8 max-w-md pb-6 border-b border-primary">
                    SIMPLY FILL IN THIS FORM STATING YOUR REQUIREMENTS AND WE’LL BE IN CONTACT TO HELP YOU FIND YOUR NEXT HOME.
                </p>

                <a href="#" class="inline-block bg-secondary text-white font-medium py-3 px-6 rounded hover:bg-secondary/90 transition">
                    See Our Locations
                </a>
            </div>

            <!-- Right Form -->
            <form id="ctaForm" class="bg-black/50 backdrop-blur-sm p-8 space-y-6 rounded">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm mb-1">First name*</label>
                        <input type="text" id="first_name" name="first_name" class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="First name">
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm mb-1">Last name</label>
                        <input type="text" id="last_name" name="last_name" class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Last name">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm mb-1">Email*</label>
                    <input type="email" id="email" name="email" class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Email">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                    <div class="col-span-1">
                        <label for="country_code" class="block text-sm mb-1">Phone number*</label>
                        <select id="country_code" name="country_code" class="w-full bg-transparent border border-white/30 text-white py-3 px-4 appearance-none focus:outline-none focus:ring-2 focus:ring-primary">
                            <option class="text-black" value="ae">United Arab Emirates</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label class="block text-sm invisible mb-1">Phone</label>
                        <input type="tel" name="phone" class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="+971">
                    </div>
                </div>

                <div>
                    <label for="building" class="block text-sm mb-1">Building*</label>
                    <input type="text" id="building" name="building" class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Building">
                </div>

         <button type="submit" class="w-full bg-secondary text-white font-semibold py-3 px-6">
                    Submit
                </button>
            </form>
        </div>
    </x-container>
</section>
