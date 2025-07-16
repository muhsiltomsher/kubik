{{-- Projects Section --}}
<section id="projects-home" class="bg-black text-white pb-[50px]">
    <x-container>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            <!-- Left Side -->
            <div class="space-y-8">
                <!-- Section Heading -->
                <div class="pl-[10%]">
                    <div class="text-sm text-[#C5A26B] uppercase font-medium tracking-widest">
                        Our Work Speaks of Legacy
                    </div>
                    <h2 class="text-3xl md:text-5xl font-silk-serif font-medium leading-tight mt-4">
                        Timeless Craftsmanship<br />Enduring Impact.
                    </h2>
                </div>

                <!-- Project 01 -->
                <div class="project-block group relative">
                    <div class="relative overflow-hidden project-hover-zone">
                        <img src="{{ asset('images/projects/project-1.jpg') }}" alt="Mount Street"
                             class="project-image w-full h-auto object-cover transition-transform duration-700" />
                        <button
                            class="view-project-btn pointer-events-none absolute inset-0 flex items-center justify-center z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-black bg-white px-6 py-2 rounded-full text-sm font-semibold whitespace-nowrap">
                                View Project
                            </span>
                        </button>
                    </div>

                    <div class="flex flex-col md:flex-row items-start gap-4 mt-5">
                        <div class="project-number-outline !font-silk-serif text-2xl">01</div>
                        <div>
                            <a href="{{ route('projects.show', ['slug' => 'mount-street']) }}"
                               class="project-title text-lg md:text-2xl uppercase font-silk-serif font-semibold !leading-6 text-white hover:text-[#C5A26B] transition-colors duration-300 block">
                                Mount Street
                            </a>
                            <p class="project-desc text-sm text-white/70 max-w-xl leading-4">
                                Sophisticated reconfiguration and bespoke interiors in one of Mayfair’s most prestigious postcodes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side -->
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
                    <div class="project-block group relative">
                        <div class="relative overflow-hidden project-hover-zone">
                            <img src="{{ asset('images/projects/' . $project['image']) }}" alt="{{ $project['title'] }}"
                                 class="project-image will-change-transform w-full h-auto object-cover transition-transform duration-700"
 />
                            <button
                                class="view-project-btn pointer-events-none absolute inset-0 flex items-center justify-center z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span class="text-black bg-white px-6 py-2 rounded-full text-sm font-semibold whitespace-nowrap">
                                    View Project
                                </span>
                            </button>
                        </div>

                        <div class="flex flex-col md:flex-row items-start gap-4 mt-5">
                            <div class="project-number-outline !font-silk-serif text-2xl">{{ $project['number'] }}</div>
                            <div>
                                <a href="{{ route('projects.show', ['slug' => $project['slug']]) }}"
                                   class="project-title text-lg md:text-2xl uppercase font-silk-serif font-semibold !leading-6 text-white hover:text-[#C5A26B] transition-colors duration-300 block">
                                    {{ $project['title'] }}
                                </a>
                                <p class="project-desc text-sm text-white/70 max-w-xl leading-4">
                                    {{ $project['desc'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-container>
</section>
