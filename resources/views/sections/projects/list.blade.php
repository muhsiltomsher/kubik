<section id="projects" class="bg-black text-white py-[120px] border-b border-gray-800">
    <div x-data="{ tab: 'completed' }" x-cloak class="relative container mx-auto px-4">

        {{-- Header --}}
        <div class="text-left mb-14">
            <p class="text-sm text-primary uppercase font-light tracking-widest mb-3">
                Projects Portfolio
            </p>
            <h2 class="text-4xl md:text-5xl font-sans font-light leading-tight">
                Timeless Craftsmanship<br />Enduring Impact.
            </h2>
        </div>

        {{-- Tab Buttons --}}
        <div class="flex flex-wrap gap-4 mb-12">
            <button
                @click="tab = 'completed'"
                type="button"
                class="px-6 py-2 rounded-full border transition-all duration-300 font-light text-sm focus:outline-none"
                :class="tab === 'completed'
                    ? 'bg-primary text-black border-primary'
                    : 'border-white text-white hover:bg-white hover:text-black'"
            >
                Completed Projects
            </button>
            <button
                @click="tab = 'upcoming'"
                type="button"
                class="px-6 py-2 rounded-full border transition-all duration-300 font-light text-sm focus:outline-none"
                :class="tab === 'upcoming'
                    ? 'bg-primary text-black border-primary'
                    : 'border-white text-white hover:bg-white hover:text-black'"
            >
                Upcoming Projects
            </button>
        </div>

        {{-- Tab Panels --}}
        <div class="relative">
@php
    function renderProjects($projects, $type) {
        $output = '<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">';
        foreach ($projects as $project) {
            $output .= '
            <a href="' . route('projects.show', $project['slug']) . '" class="group block relative overflow-hidden rounded-lg border border-primary/10 hover:border-primary/50 transition-all duration-500 p-2">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="' . asset('images/projects/' . $project['image']) . '"
                         alt="' . e($project['title']) . '"
                         class="w-full h-[300px] object-cover transition-transform duration-700 transform group-hover:scale-105 ' . ($type === 'upcoming' ? 'grayscale group-hover:grayscale-0' : '') . '" />
                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out z-10"></div>
                </div>
                <div class="mt-6">
                    <div class="text-lg md:text-2xl uppercase font-sans font-light leading-snug text-white group-hover:text-[#C5A26B] transition-colors duration-300">'
                        . e($project['title']) . '
                    </div>
                    <p class="mt-2 text-sm text-white/70 leading-relaxed max-w-xl font-light">'
                        . e($project['desc']) . '
                    </p>
                </div>
            </a>';
        }
        $output .= '</div>';
        return $output;
    }
@endphp


            {{-- Completed Projects --}}
            <div
                x-show="tab === 'completed'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
            >
                {!! renderProjects($completedProjects, 'completed') !!}
            </div>

            {{-- Upcoming Projects --}}
            <div
                x-show="tab === 'upcoming'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
            >
                {!! renderProjects($upcomingProjects, 'upcoming') !!}
            </div>
        </div>
    </div>
</section>
