<section id="testimonials" class="relative bg-black pb-[100px] text-white overflow-hidden fade-wrapper">
    <x-container>
        <div class="text-center relative z-10 fade-top">
            <p class="text-primary text-sm uppercase tracking-widest font-light mb-2">Testimonials</p>
            <h2 class="text-3xl md:text-5xl font-sans font-light leading-tight mb-10">
                What Our Clients Say
            </h2>
        </div>

        <div class="swiper testimonialSwiper max-w-3xl mx-auto relative z-10 fade-top">
            <div class="swiper-wrapper">
                @php
                    $testimonials = [
                        ['name' => 'Sarah T, Chelsea', 'text' => 'Kubik Construction transformed our Victorian house into a modern dream home on time and within budget. Couldn’t recommend them more!'],
                        ['name' => 'James W, Kensington', 'text' => 'Outstanding craftsmanship and clear communication throughout. Truly impressed with the professionalism.'],
                        ['name' => 'Elena R, Notting Hill', 'text' => 'The Kubik team handled our double basement extension flawlessly. Truly a high-end experience from start to finish.'],
                        ['name' => 'Mark L, Mayfair', 'text' => 'Reliable, efficient, and the finish quality was exceptional. We are so pleased with the final result.'],
                    ];
                @endphp

                @foreach ($testimonials as $t)
                    <div class="swiper-slide text-center px-6">
                        <p class="text-primary text-sm mb-4">{{ $t['name'] }}</p>
                        <p class="text-lg md:text-2xl font-sans font-light leading-relaxed text-white">
                            {{ $t['text'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Dots -->
            <div class="swiper-pagination mt-12 !relative flex justify-center"></div>
        </div>
    </x-container>
</section>
