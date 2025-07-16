@extends('layouts.app')

@section('content')

{{-- Hero --}}
@include('sections.common.hero', [
    'title' => $project['title'],
    'subtitle' => $project['subtitle'] ?? '',
    'image' => asset($project['hero']),
])

{{-- Project Details --}}
<section class="bg-black text-white py-24 border-b border-white/10 fade-wrapper">
    <x-container>
        <div class="grid md:grid-cols-2 gap-12 items-start">
            {{-- Text Block --}}
            <div>
                <h2 class="fade-top text-3xl md:text-4xl font-silk-serif font-semibold text-primary mb-6">
                    {{ $project['title'] }}
                </h2>

                @if (!empty($project['description']))
                    @foreach ($project['description'] as $para)
                        <p class="fade-top text-white/70 leading-relaxed mb-4">
                            {{ $para }}
                        </p>
                    @endforeach
                @endif
            </div>

            {{-- Feature Image --}}
            @if (!empty($project['feature']))
                <div class="fade-top overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset($project['feature']) }}"
                         alt="{{ $project['title'] }} Feature Image"
                         class="w-full h-full object-cover transition duration-300 hover:scale-105" />
                </div>
            @endif
        </div>
    </x-container>
</section>

{{-- Image Gallery --}}
@if (!empty($project['gallery']) && count($project['gallery']))
<section class="bg-[#111] py-20">
    <x-container>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery">
            @foreach ($project['gallery'] as $img)
                @php $fullPath = asset($img); @endphp
                <a href="{{ $fullPath }}"
                   data-pswp-width="1600"
                   data-pswp-height="1067"
                   target="_blank"
                   class="gallery-item block overflow-hidden rounded shadow"
                >
                    <img src="{{ $fullPath }}"
                         alt="{{ $project['title'] }} image"
                         class="w-full h-full object-cover hover:scale-105 transition duration-300" />
                </a>
            @endforeach
        </div>
    </x-container>
</section>
@endif

{{-- Project Stats --}}
@if (!empty($project['stats']))
<section class="bg-black text-white py-20 border-t border-white/5">
    <x-container>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            @foreach ($project['stats'] as $stat)
                <div class="fade-top">
                    <h3 class="text-primary text-3xl font-bold mb-2 stat-number" data-count="{{ $stat['value'] }}">{{ $stat['value'] }}</h3>
                    <p class="text-white/60 text-sm">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </x-container>
</section>
@endif

{{-- Call to Action --}}
@include('sections.form-cta')

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Lightbox
        const lightbox = new PhotoSwipeLightbox({
            gallery: '#gallery',
            children: 'a',
            pswpModule: PhotoSwipe
        });
        lightbox.init();

        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Fade/slide in
        gsap.utils.toArray('.fade-top').forEach(el => {
            gsap.from(el, {
                opacity: 0,
                y: 50,
                duration: 0.7,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 90%',
                    toggleActions: 'play none none reverse'
                }
            });
        });

        // Gallery stagger animation
        gsap.from('.gallery-item', {
            opacity: 0,
            y: 30,
            duration: 0.6,
            stagger: 0.1,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '#gallery',
                start: 'top 90%',
                once: true
            }
        });

        // Counter animation
        document.querySelectorAll('.stat-number').forEach(stat => {
            let value = stat.getAttribute('data-count');
            let isNumber = !isNaN(parseFloat(value.replace(',', '').replace('%', '')));

            if (isNumber) {
                let endValue = parseFloat(value);
                let suffix = value.includes('%') ? '%' : '';
                gsap.fromTo(stat, {
                    innerText: 0
                }, {
                    innerText: endValue,
                    duration: 2,
                    ease: "power1.out",
                    snap: { innerText: 1 },
                    scrollTrigger: {
                        trigger: stat,
                        start: "top 90%",
                    },
                    onUpdate: function () {
                        stat.innerText = Math.floor(stat.innerText).toLocaleString() + suffix;
                    }
                });
            }
        });
    });
</script>
@endpush
