<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Kubik'))</title>

    <!-- Helvetica Neue (System font stack fallback) -->
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
    </style>

    <!-- Tailwind CSS + JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://assets.codepen.io/16327/DrawSVGPlugin3.min.js"></script>
</head>
<body class="antialiased text-gray-900 bg-black">

    {{-- 🔄 Site Loader --}}
    @include('components.loader')

    {{-- ✅ ScrollSmoother Required Structure --}}
    <div id="smooth-wrapper">
        <div id="smooth-content">

            {{-- Header --}}
            @include('layouts.header.main')

            {{-- Page Content --}}
            <main class="-mt-[100px]">
                @yield('content')
            </main>

            {{-- Footer --}}
            @include('layouts.footer.main')

        </div>
    </div>

    {{-- Optional Extra Scripts --}}
    @stack('scripts')

    {{-- 🔁 GSAP Menu Alpine Integration --}}
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
                                height: '60vh',
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
