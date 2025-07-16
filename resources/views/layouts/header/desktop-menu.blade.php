<!-- Alpine.js Root for Menu State -->
<div x-data="{
        open: false,
        hovered: null,
        menuImages: {
            home: '/images/menu/menu-home.webp',
            about: '/images/menu/menu-about.jpg',
            services: '/images/menu/menu-services.jpg',
            projects: '/images/menu/menu-projects.jpg',
            contact: '/images/menu/menu-contact.webp'
        },
        defaultImage: '/images/menu/menu-default.jpg'
    }">
    <!-- Mobile Menu Button (Top-Right) -->
    <button @click="open = true"
        class="w-12 h-12 !p-2 flex items-center justify-center text-white text-xl bg-transparent bg-opacity-60 hover:bg-primary hover:text-black transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary active:scale-95"
        aria-label="Open menu">
        <i class="flex fi fi-rs-burger-menu"></i>
    </button>

    <!-- Drawer: Full Width, Menu Right, Image Left -->
    <div x-show="open" x-transition:enter="transition-transform duration-500 ease-in-out"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition-transform duration-400 ease-in" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed top-0 left-0 z-50 h-screen w-full flex bg-black bg-opacity-95 transition-transform"
        tabindex="-1"
        aria-labelledby="drawer-label"
        @keydown.escape.window="open = false"
        @click.away="open = false"
    >
        <!-- Left: Image Reveal Area (Desktop Only) -->
        <div class="hidden md:flex w-1/2 h-full items-center justify-center relative bg-black/70 overflow-hidden">
            <!-- Default Image (shown when nothing hovered) -->
            <img x-show="!hovered" :src="defaultImage" alt=""
                class="absolute inset-0 w-full h-full object-cover opacity-100 transition-all duration-700"
                x-transition:enter="transition-all duration-700"
                x-transition:enter-start="opacity-0 -translate-x-10"
                x-transition:enter-end="opacity-100 -translate-x-0"
                x-transition:leave="transition-all duration-500"
                x-transition:leave-start="opacity-100 -translate-x-0"
                x-transition:leave-end="opacity-0 -translate-x-10">
            <!-- Menu Images (shown on hover) -->
            <template x-for="(img, key) in menuImages" :key="key">
                <img x-show="hovered === key" :src="img" alt=""
                    class="absolute inset-0 w-full h-full object-cover opacity-0 transition-all duration-700"
                    :class="hovered === key ? 'opacity-100 -translate-x-0' : 'opacity-0 -translate-x-10'"
                    x-transition:enter="transition-all duration-700"
                    x-transition:enter-start="opacity-0 -translate-x-10"
                    x-transition:enter-end="opacity-100 -translate-x-0"
                    x-transition:leave="transition-all duration-500"
                    x-transition:leave-start="opacity-100 -translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-10">
            </template>
        </div>

        <!-- Right: Navigation & Content -->
        <div
            class="flex flex-col justify-center items-start w-full md:w-1/2 px-8 space-y-12 text-white bg-transparent max-w-3xl relative">
            <!-- Close Button (Top-Right in Menu) -->
            <button @click="open = false"
                class="absolute top-6 right-8 text-primary text-3xl bg-black bg-opacity-60 hover:bg-primary hover:text-black transition-all duration-300 shadow focus:outline-none focus:ring-2 focus:ring-primary active:scale-95 z-10"
                aria-label="Close menu">
                <i class="flex fi fi-rs-cross"></i>
            </button>
            <nav class="flex flex-col text-left mt-16">
                <a href="{{ route('home') }}"
                    class="block hover:text-primary transition-colors duration-200 text-[60px] leading-[1.2] font-normal"
                    @mouseenter="hovered = 'home'" @mouseleave="hovered = null">Home</a>
                <a href="{{ route('about') }}"
                    class="block hover:text-primary transition-colors duration-200 text-[60px] leading-[1.2] font-normal"
                    @mouseenter="hovered = 'about'" @mouseleave="hovered = null">About</a>
                <!-- Services Dropdown -->
                <div x-data="{ serviceOpen: false }" class="relative">
                    <button @mouseenter="hovered = 'services'" @mouseleave="hovered = null"
                        @click="serviceOpen = !serviceOpen"
                        class="flex items-center gap-2 hover:text-primary transition-colors duration-200 focus:outline-none text-[60px] leading-[1.2] font-normal"
                        :aria-expanded="serviceOpen" aria-controls="services-dropdown">
                        Services
                        <span :class="{ 'rotate-45': serviceOpen }"
                            class="transform transition-transform duration-300 text-primary">+</span>
                    </button>
                    <div id="services-dropdown" x-show="serviceOpen"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2"
                        class="overflow-hidden space-y-2 mt-3 text-left pl-5">
                        <a href="/services/construction"
                            class="block hover:text-primary transition text-[40px] leading-[1.2]">Construction Services</a>
                        <a href="/services/contractors"
                            class="block hover:text-primary transition text-[40px] leading-[1.2]">Contractors & Trade Centres</a>
                        <a href="/services/professional"
                            class="block hover:text-primary transition text-[40px] leading-[1.2]">Professional Services</a>
                    </div>
                </div>
                <a href="{{ route('projects') }}"
                    class="block hover:text-primary transition-colors duration-200 text-[60px] leading-[1.2] font-normal"
                    @mouseenter="hovered = 'projects'" @mouseleave="hovered = null">Projects</a>
                <a href="{{ route('contact') }}"
                    class="block hover:text-primary transition-colors duration-200 text-[60px] leading-[1.2] font-normal"
                    @mouseenter="hovered = 'contact'" @mouseleave="hovered = null">Contact</a>
            </nav>

            <!-- CTA -->
            <a href="{{ route('contact') }}"
                class="inline-block px-6 py-3 bg-primary text-black font-bold rounded-full hover:bg-secondary hover:text-white transition-all duration-200 shadow-lg text-xl mt-8">
                Request a Quote
            </a>

            <!-- Social Icons -->
            <div class="flex space-x-6 text-white text-3xl mt-8">
                <a href="#" class="hover:text-primary transition-colors duration-200"><i class="fi fi-brands-facebook"></i></a>
                <a href="#" class="hover:text-primary transition-colors duration-200"><i class="fi fi-brands-instagram"></i></a>
                <a href="#" class="hover:text-primary transition-colors duration-200"><i class="fi fi-brands-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
