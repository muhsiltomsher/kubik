<div class="group relative overflow-hidden">
    <div class="relative rounded-lg overflow-hidden">
        <img src="{{ asset('images/projects/' . $project['image']) }}"
             alt="{{ $project['title'] }}"
             class="w-full h-auto object-cover transform group-hover:scale-105 transition duration-700" />

        <a href="{{ route('projects.show', ['slug' => $project['slug']]) }}"
           class="absolute inset-0 z-10 flex items-center justify-center opacity-0 group-hover:opacity-100 bg-black/30 transition duration-500 ease-in-out">
            <span class="bg-white text-black px-6 py-2 rounded-full text-sm font-semibold">
                View Project
            </span>
        </a>
    </div>

    <div class="flex flex-col md:flex-row items-start gap-4 mt-6">
        <div class="text-3xl text-[#C5A26B] font-silk-serif font-medium min-w-[50px]">{{ $project['id'] }}</div>
        <div>
            <a href="{{ route('projects.show', ['slug' => $project['slug']]) }}"
               class="text-lg md:text-2xl uppercase font-silk-serif font-semibold leading-snug text-white hover:text-[#C5A26B] transition">
                {{ $project['title'] }}
            </a>
            <p class="mt-2 text-sm text-white/70 leading-relaxed max-w-xl">
                {{ $project['desc'] }}
            </p>
        </div>
    </div>
</div>
