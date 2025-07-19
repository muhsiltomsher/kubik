<section id="our-values" class="bg-black text-white border-b border-gray-800 overflow-hidden py-24">
    <x-container>
        <div class="md:grid md:grid-cols-12 gap-12 items-start">
            {{-- Left Title --}}
            <div class="md:col-span-4 mb-10 md:mb-0 border-l-2 border-[#C5A26B] pl-6" data-animate="fade-up">
                <h2 class="text-3xl md:text-4xl font-sans font-light leading-snug text-white">
                    Our<br />Values
                </h2>
            </div>

            {{-- Right Content --}}
            <div class="md:col-span-8 space-y-8">
                <p class="text-sm text-white/80 leading-relaxed" data-animate="fade-up">
                    At Kubik, our values are the foundation of everything we build — not just the spaces, but the experience.
                </p>

                <div class="grid sm:grid-cols-2 gap-8">
                    @php
                        $values = [
                            ['title' => 'Uncompromising Craftsmanship', 'desc' => 'We hold every finish, joint, and line to the highest standard.'],
                            ['title' => 'Transparent Communication', 'desc' => 'We keep clients informed, involved, and confident throughout the process.'],
                            ['title' => 'On-Time, On-Budget Delivery', 'desc' => 'Managed with precision and accountability to meet scope.'],
                            ['title' => 'Client-First Approach', 'desc' => 'We adapt our methods around your needs to ensure excellence.'],
                        ];
                    @endphp

                    @foreach ($values as $index => $item)
                        <div class="group space-y-4 text-left cursor-pointer transition-all duration-300" data-animate="fade-up" >
                            {{-- SVG Icon --}}
                            <div class="w-20 h-20  transition-transform duration-300 group-hover:scale-105" data-icon>
<div class="w-20 h-20 " data-icon>
    <svg
        class="w-full h-full stroke-white fill-none"
        stroke-width="2"
        viewBox="0 0 512 512"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path d="M296.36 204.948v-61.84a8.06 8.06 0 0 0-8.06-8.07h-24.2v-121a8.06 8.06 0 0 0-16.12 0v120.97h-24.2a8.061 8.061 0 0 0-8.06 8.06v61.85c-71.157 18.692-118.942 88.612-112.908 163.991a8.067 8.067 0 0 0 8.068 8.069h73c11.136 85.407 133.161 85.255 144.24 0h73a8.07 8.07 0 0 0 8.07-8.07c6.071-75.368-41.679-145.272-112.83-163.96zM231.85 151.168h48.38v50.31a154.209 154.209 0 0 0-48.3 0zM256.04 425.358a56.53 56.53 0 0 1-55.88-48.35h111.76a56.53 56.53 0 0 1-55.88 48.35z" />
        <path d="M256.04 457.618a8.06 8.06 0 0 0-8.06 8.07v32.26a8.06 8.06 0 1 0 16.12 0v-32.26a8.06 8.06 0 0 0-8.06-8.07zM319.45 442.468c-6.522-8.425-19.052.656-13.05 9.48l19 26.09a8.06 8.06 0 1 0 13-9.49zM381.24 401.108l-30.67-10c-10.236-2.992-15.049 11.729-5 15.35l30.68 9.95a7.913 7.913 0 0 0 2.49.39c9.115-.071 11.127-12.86 2.48-15.73zM161.51 391.148l-30.67 10c-8.651 2.872-6.631 15.66 2.48 15.73a7.918 7.918 0 0 0 2.49-.39l30.68-9.95c10.034-3.61 5.254-18.342-5-15.35zM203.9 440.688a8.051 8.051 0 0 0-11.27 1.78l-19 26.08a8.06 8.06 0 1 0 13 9.49l19-26.09a8.06 8.06 0 0 0-1.73-11.26z" />
    </svg>
</div>


                            </div>

                            {{-- Title --}}
                            <div class="text-lg font-light text-white group-hover:text-primary transition-all duration-300 transform group-hover:-translate-y-1">
                                {{ $item['title'] }}
                            </div>

                            {{-- Description --}}
                            <p class="text-sm text-white/70 leading-relaxed transition-all duration-300 transform group-hover:-translate-y-1 group-hover:text-white">
                                {{ $item['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-container>
</section>
