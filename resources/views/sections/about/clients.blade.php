<section id="who-we-work-with" class="bg-black text-white border-b border-secondary py-24 fade-wrapper">
    <x-container>
        {{-- Section Title --}}
        <div class="text-center mb-16 fade-top">
            <p class="text-xs uppercase tracking-widest text-primary mb-3 font-light">Who We Work With</p>
            <h2 class="text-3xl md:text-5xl font-sans font-light leading-tight text-white">
                Collaborating with visionaries to shape exceptional spaces.
            </h2>
        </div>

        {{-- Stats Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-20">
            @php
                $stats = [
                    ['label' => 'Years in operation', 'value' => '18+', 'desc' => 'Over 18 years of building exceptional environments across London and beyond.'],
                    ['label' => 'Projects completed', 'value' => '150+', 'desc' => 'From residential renovations to commercial fit-outs, our portfolio continues to grow.'],
                    ['label' => 'Architect partners', 'value' => '35+', 'desc' => 'Trusted by top architects for precision, execution, and collaboration.'],
                    ['label' => 'Client satisfaction', 'value' => '98%', 'desc' => 'Our repeat client rate reflects our commitment to quality and trust.'],
                ];
            @endphp

            @foreach ($stats as $stat)
                <div class="bg-[#151515] py-6 px-6 rounded-lg fade-top border border-white/5 hover:border-primary transition duration-300">
                    <p class="text-sm text-white/50 mb-1 font-light">{{ $stat['label'] }}</p>
                    <h3 class="text-2xl md:text-3xl text-primary mb-2 font-light">{{ $stat['value'] }}</h3>
                    <p class="text-xs text-white/70 leading-snug font-light">{{ $stat['desc'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Brand Logos --}}
        <div class="text-center mb-10 fade-top">
            <p class="text-sm text-white/60 font-light">
                We proudly collaborate with visionary clients, brands, and design partners.
            </p>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-6 fade-top">
            @for ($i = 1; $i <= 10; $i++)
                <div class="bg-[#151515] px-6 py-4 rounded-full flex items-center justify-center h-[60px] w-[120px] hover:border-primary border border-white/5 transition">
                    <img src="{{ asset('images/clients/' . $i . '.webp') }}"
                         alt="Client {{ $i }}"
                         class="h-6 object-contain grayscale hover:grayscale-0 transition duration-300 ease-in-out" />
                </div>
            @endfor
        </div>
    </x-container>
</section>
