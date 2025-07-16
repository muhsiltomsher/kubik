<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Kubik'))</title>

    <!-- Fonts: Sora only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS + JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sora antialiased text-gray-900 bg-white scroll-smooth">

    {{-- Header --}}
    @include('layouts.header.main')

    {{-- Page Content --}}
     <main class="-mt-[100px]">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer.main')



    {{-- Optional Extra Scripts --}}
    @stack('scripts')

    <script>
        function gsapMenu() {
            return {
                open: false,
                tl: null,
                init() {
                    this.$nextTick(() => {
                        const menu = this.$refs.menu;
                        if (!menu) return;

                        const links = menu.querySelectorAll('ul.main-menu li');

                        this.tl = window.gsap.timeline({ paused: true })
                            .to(menu, {
                                duration: 1,
                                opacity: 1,
                                height: '60vh', // adjust as needed
                                ease: 'expo.inOut'
                            })
                            .from(links, {
                                duration: 1,
                                opacity: 0,
                                y: 20,
                                stagger: 0.1,
                                ease: 'expo.inOut'
                            }, "-=0.5");

                        this.tl.reverse();
                    });
                },
                toggleMenu() {
                    if (!this.tl) return;
                    this.open = !this.open;
                    this.tl.reversed(!this.open);
                },
                closeMenu() {
                    if (!this.tl) return;
                    this.open = false;
                    this.tl.reverse();
                }
            };
        }
    </script>

</body>
</html>
