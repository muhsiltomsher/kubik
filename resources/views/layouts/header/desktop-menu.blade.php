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
    <!-- Mobile Menu Button -->
    <button @click="open = true"
        class="w-12 h-12 !p-2 flex items-center justify-center text-white text-xl bg-transparent hover:bg-primary hover:text-black transition duration-300"
        aria-label="Open menu">
        <i class="flex fi fi-rs-burger-menu"></i>
    </button>

    <!-- Drawer -->
    <div x-show="open"
        x-transition:enter="transition-transform duration-500 ease-in-out"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition-transform duration-400 ease-in"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed top-0 left-0 z-50 h-screen w-full flex bg-black bg-opacity-95"
        tabindex="-1"
        @keydown.escape.window="open = false"
        @click.away="open = false">

        <!-- Left Image Area -->
        <div class="hidden md:flex w-1/2 h-full items-center justify-center relative bg-black/70 overflow-hidden">
            <!-- Default Image -->
            <img x-show="!hovered"
                :src="defaultImage"
                alt=""
                class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out scale-100 opacity-100"
                :class="{ 'opacity-100 scale-100': !hovered, 'opacity-0 scale-105': hovered }" />

            <!-- Hovered Images -->
            <template x-for="(img, key) in menuImages" :key="key">
                <img :src="img" alt=""
                    class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out scale-105 opacity-0"
                    :class="{ 'opacity-100 scale-100': hovered === key, 'opacity-0 scale-105': hovered !== key }" />
            </template>
        </div>

        <!-- Right Nav Area -->
        <div class="flex flex-col justify-center w-full md:w-1/2 px-8 max-w-3xl relative text-white">
            <!-- Close Button -->
            <button @click="open = false"
                class="absolute top-6 p-2 right-8 text-primary text-3xl bg-black/60 hover:bg-primary hover:text-black transition duration-300 z-10"
                aria-label="Close menu">
                <i class="flex fi fi-rs-cross"></i>
            </button>

            <!-- Navigation -->
            <nav class="flex flex-col mt-20 space-y-6 text-[60px] leading-[1.2] font-light">
                <!-- Home -->
                <a href="{{ route('home') }}"
                   class="group flex justify-between items-end border-b border-white/10 pb-2 hover:text-primary transition relative"
                   @mouseenter="hovered = 'home'" @mouseleave="hovered = null">
                    <span>Home</span>
                    <i class="fi fi-ts-arrow-up-right text-primary text-3xl opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
                </a>

                <!-- About  -->
<!-- About Link (No Dropdown) -->
<div class="relative border-b border-white/10 pb-2">
    <a href="{{ route('about') }}" 
       class="group flex justify-between items-end w-full text-left hover:text-primary transition">
        <span>About</span>
        <i class="fi fi-ts-arrow-up-right text-primary text-3xl opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
    </a>
</div>




                <!-- Services Dropdown -->
<!-- Services Dropdown -->
<div x-data="{ serviceOpen: false }" class="relative border-b border-white/10 pb-2">
    <button @click="serviceOpen = !serviceOpen"
        @mouseenter="hovered = 'services'" @mouseleave="hovered = null"
        class="group flex justify-between items-end w-full text-left hover:text-primary transition">
        <span>Services</span>
        <i class="fi fi-ts-arrow-up-right text-primary text-3xl opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
    </button>

    <div x-show="serviceOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="mt-4 space-y-2 pl-6 text-[36px]">

                <a href="/services/construction" class="group flex justify-between items-end hover:text-primary transition">
            <span>Construction Services</span>
            <i class="fi fi-ts-arrow-up-right text-primary text-2xl opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
        </a>

        <a href="/services/architecture" class="group flex justify-between items-end hover:text-primary transition">
            <span>Architects</span>
            <i class="fi fi-ts-arrow-up-right text-primary text-2xl opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
        </a>

        <a href="/services/design-build" class="group flex justify-between items-end hover:text-primary transition">
            <span>Design & Build</span>
            <i class="fi fi-ts-arrow-up-right text-primary text-2xl opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
        </a>

        <a href="/services/garden-designers" class="group flex justify-between items-end hover:text-primary transition">
            <span>Garden Designers</span>
            <i class="fi fi-ts-arrow-up-right text-primary text-2xl opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
        </a>

        <a href="/services/civil-ground-engineers" class="group flex justify-between items-end hover:text-primary transition">
            <span>Civil & Ground Engineers</span>
            <i class="fi fi-ts-arrow-up-right text-primary text-2xl opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
        </a>

        <a href="/services/planning-consultants" class="group flex justify-between items-end hover:text-primary transition">
            <span>Planning Consultants</span>
            <i class="fi fi-ts-arrow-up-right text-primary text-2xl opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
        </a>

        <a href="/services/mechanical-electrical" class="group flex justify-between items-end hover:text-primary transition">
            <span>Mechanical & Electrical Consultants</span>
            <i class="fi fi-ts-arrow-up-right text-primary text-2xl opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
        </a>
    </div>
</div>



                                <!-- Projects -->
                <a href="{{ route('projects') }}"
                   class="group flex justify-between items-end border-b border-white/10 pb-2 hover:text-primary transition relative"
                   @mouseenter="hovered = 'projects'" @mouseleave="hovered = null">
                    <span>Projects</span>
                    <i class="fi fi-ts-arrow-up-right text-primary text-3xl opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
                </a>

                <!-- Contact -->
                <a href="{{ route('contact') }}"
                   class="group flex justify-between items-end border-b border-white/10 pb-2 hover:text-primary transition relative"
                   @mouseenter="hovered = 'contact'" @mouseleave="hovered = null">
                    <span>Contact</span>
                    <i class="fi fi-ts-arrow-up-right text-primary text-3xl opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out"></i>
                </a>
            </nav>

            <!-- CTA -->
            <a href="{{ route('contact') }}"
               class="mt-10 inline-flex items-baseline justify-between gap-2 px-6 py-3 max-w-md bg-primary text-black font-light hover:bg-secondary hover:text-white transition-all text-xl">
                Request a Quote
                <i class="fi fi-ts-arrow-up-right text-lg"></i>
            </a>

            <!-- Social Icons -->
            <div class="flex space-x-6 text-3xl mt-10">
                <a href="#" class="hover:text-primary transition"><i class="fi fi-brands-facebook"></i></a>
                <a href="#" class="hover:text-primary transition"><i class="fi fi-brands-instagram"></i></a>
                <a href="#" class="hover:text-primary transition"><i class="fi fi-brands-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
