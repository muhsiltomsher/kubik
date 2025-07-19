{{-- Projects Section --}}
<section id="projects-home" class="bg-black text-white pb-[50px]">
    <x-container>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            <!-- Left Column -->
            <div class="space-y-8">
                <!-- Section Heading -->
                <div class="pl-[10%]">
                    <div class="text-sm text-[#C5A26B] uppercase font-light tracking-widest">
                        Our Work Speaks of Legacy
                    </div>
                    <h2 class="text-3xl md:text-5xl font-sans font-light leading-tight mt-4">
                        Timeless Craftsmanship<br />Enduring Impact
                    </h2>
                </div>

                <!-- Project 01 -->
                <a href="{{ route('projects.show', ['slug' => 'mount-street']) }}"
                   class="project-block group block border border-primary/10 hover:border-primary/50 transition-all duration-500 p-2">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/projects/project-1.jpg') }}"
                             alt="Mount Street"
                             class="project-image w-full h-auto object-cover will-change-transform transition-transform duration-700 group-hover:scale-105" />
                    </div>

                    <div class="flex flex-col md:flex-row items-start gap-4 mt-5">
                        <div class="project-number-outline !font-sans text-2xl">01</div>
                        <div>
                            <div class="project-title text-lg md:text-2xl uppercase font-sans font-light !leading-6 text-white group-hover:text-[#C5A26B] transition-colors duration-300">
                                Mount Street
                            </div>
                            <p class="project-desc text-sm text-white/70 max-w-xl leading-4">
                                Sophisticated reconfiguration and bespoke interiors in one of Mayfair’s most prestigious postcodes.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Right Column -->
            <div class="space-y-10">
                @php
                    $projects = [
                        [
                            'slug' => 'ferncroft-avenue-house-i',
                            'image' => 'project-2.jpg',
                            'title' => 'Ferncroft Avenue – House I',
                            'desc' => 'A complete internal rebuild with subtle textures, natural light flow, and warm architectural detailing.',
                            'number' => '02'
                        ],
                        [
                            'slug' => 'eccleston-square',
                            'image' => 'project-3.jpg',
                            'title' => 'Eccleston Square',
                            'desc' => 'A full townhouse transformation featuring custom finishes, modern layout refinement, and preserved period character.',
                            'number' => '03'
                        ]
                    ];
                @endphp

                @foreach ($projects as $project)
                    <a href="{{ route('projects.show', ['slug' => $project['slug']]) }}"
                       class="project-block group block border border-primary/10 hover:border-primary/50 transition-all duration-500 p-2">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('images/projects/' . $project['image']) }}"
                                 alt="{{ $project['title'] }}"
                                 class="project-image w-full h-auto object-cover will-change-transform transition-transform duration-700 group-hover:scale-105" />
                        </div>

                        <div class="flex flex-col md:flex-row items-start gap-4 mt-5">
                            <div class="project-number-outline !font-sans text-2xl">{{ $project['number'] }}</div>
                            <div>
                                <div class="project-title text-lg md:text-2xl uppercase font-sans font-light !leading-6 text-white group-hover:text-[#C5A26B] transition-colors duration-300">
                                    {{ $project['title'] }}
                                </div>
                                <p class="project-desc text-sm text-white/70 max-w-xl leading-4 font-light">
                                    {{ $project['desc'] }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </x-container>
</section>
