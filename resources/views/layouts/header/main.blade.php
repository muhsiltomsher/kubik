<header
    x-data="{ scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 10 })"
    :class="scrolled
        ? 'bg-black/70 backdrop-blur-md shadow transition-all duration-500'
        : 'bg-transparent backdrop-blur-0 shadow-none transition-all duration-500'"
    class="sticky top-0 left-0 w-full z-50"
>
    <x-container>
        <div class="py-3 flex justify-between items-center border-b border-white/40 transition-all duration-500">
            {{-- Logo --}}
            @include('layouts.header.logo')

            {{-- Desktop Overlay Menu --}}
            @include('layouts.header.desktop-menu')
        </div>
    </x-container>
</header>
