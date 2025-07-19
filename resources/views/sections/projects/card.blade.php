<a href="{{ route('projects.show', ['slug' => $project['slug'] ?? '']) }}"
   class="group block relative overflow-hidden rounded-lg border border-primary/10 hover:border-primary/50 transition-all duration-500 p-2">

    {{-- Project Image --}}
    <div class="relative overflow-hidden rounded-lg">
        <img src="{{ asset('images/projects/' . ($project['image'] ?? 'placeholder.jpg')) }}"
             alt="{{ $project['title'] ?? 'Project Image' }}"
             class="w-full h-[300px] object-cover transform transition-transform duration-700 group-hover:scale-105" />
        <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out z-10"></div>
    </div>

    {{-- Project Details --}}
    <div class="flex flex-col md:flex-row items-start gap-4 mt-6">
        <div class="text-3xl text-[#C5A26B] font-sans font-medium min-w-[50px]">
            {{ str_pad($project['id'] ?? '0', 2, '0', STR_PAD_LEFT) }}
        </div>
        <div>
            <div class="text-lg md:text-2xl uppercase font-sans font-light leading-snug text-white group-hover:text-[#C5A26B] transition-colors duration-300">
                {{ $project['title'] ?? 'Untitled Project' }}
            </div>
            <p class="mt-2 text-sm text-white/70 leading-relaxed max-w-xl font-light">
                {{ $project['desc'] ?? '' }}
            </p>
        </div>
    </div>
</a>
