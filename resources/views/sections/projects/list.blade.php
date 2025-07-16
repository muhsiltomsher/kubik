<section id="projects" class="bg-black text-white py-[100px]">
    <div x-data="{ tab: 'completed' }" x-cloak class="relative container mx-auto px-4">

        <!-- Header -->
        <div class="text-left mb-12">
            <p class="text-sm text-primary uppercase font-medium tracking-widest mb-3">Projects Portfolio</p>
            <h2 class="text-4xl md:text-5xl font-silk-serif font-medium leading-tight">
                Timeless Craftsmanship<br />Enduring Impact.
            </h2>
        </div>

        <!-- Tabs -->
        <div class="flex flex-wrap gap-4 mb-10">
            <button
                @click="tab = 'completed'"
                type="button"
                class="px-6 py-2 rounded-full border transition font-medium text-sm focus:outline-none"
                :class="tab === 'completed' ? 'bg-primary text-black border-primary' : 'border-white text-white hover:bg-white hover:text-black'"
            >
                Completed Projects
            </button>
            <button
                @click="tab = 'upcoming'"
                type="button"
                class="px-6 py-2 rounded-full border transition font-medium text-sm focus:outline-none"
                :class="tab === 'upcoming' ? 'bg-primary text-black border-primary' : 'border-white text-white hover:bg-white hover:text-black'"
            >
                Upcoming Projects
            </button>
        </div>

        <!-- Tab Panels -->
        <div class="relative">

            <!-- Completed Projects -->
            <div
                x-show="tab === 'completed'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
            >
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach ($completedProjects as $project)
                        <div class="group relative overflow-hidden">
                            <div class="relative rounded-lg overflow-hidden">
                                <img
                                    src="{{ asset('images/projects/' . $project['image']) }}"
                                    alt="{{ $project['title'] }}"
                                    class="w-full h-[300px] object-cover transform group-hover:scale-105 transition duration-700"
                                />
                                <a href="{{ route('projects.show', $project['slug']) }}"
                                   class="absolute inset-0 z-10 flex items-center justify-center opacity-0 group-hover:opacity-100 bg-black/30 transition duration-500">
                                    <span class="bg-white text-black px-6 py-2 rounded-full text-sm font-semibold">
                                        View Project
                                    </span>
                                </a>
                            </div>
                            <h4 class="mt-4 text-lg font-silk-serif uppercase font-medium">
                                {{ $project['title'] }}
                            </h4>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Upcoming Projects -->
            <div
                x-show="tab === 'upcoming'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
            >
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach ($upcomingProjects as $project)
                        <div class="group relative overflow-hidden">
                            <div class="relative rounded-lg overflow-hidden">
                                <img
                                    src="{{ asset('images/projects/' . $project['image']) }}"
                                    alt="{{ $project['title'] }}"
                                    class="w-full h-[300px] object-cover transform group-hover:scale-105 transition duration-700 grayscale"
                                />
                                <a href="{{ route('projects.show', $project['slug']) }}"
                                   class="absolute inset-0 z-10 flex items-center justify-center opacity-0 group-hover:opacity-100 bg-black/30 transition duration-500">
                                    <span class="bg-white text-black px-6 py-2 rounded-full text-sm font-semibold">
                                        View Project
                                    </span>
                                </a>
                            </div>
                            <h4 class="mt-4 text-lg font-silk-serif uppercase font-medium">
                                {{ $project['title'] }}
                            </h4>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
