@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
@include('sections.common.hero', [
    'title' => 'Contact Us',
    'subtitle' => 'Let’s discuss your project needs',
    'image' => asset('images/contact/hero.jpg')
])

{{-- Contact Section --}}
<section class="bg-black text-white py-24 border-b border-secondary font-light">
    <x-container>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- Contact Info --}}
            <div id="contact-info" class="relative bg-[#151515] p-10 shadow-lg border border-white/10">
                <h2 class="text-3xl md:text-4xl font-sans text-primary mb-6">Get in Touch</h2>

                <p class="text-white/70 mb-6 max-w-lg leading-relaxed">
                    Reach out to our team for any inquiries or to arrange a callback. We’re here to support your next project.
                </p>

                <div class="space-y-4 text-sm text-white/80 mb-10 leading-relaxed">
                    <p><strong class="text-white font-normal">Office:</strong>
                        <a href="tel:+442039039410" class="hover:text-primary transition">020 3903 9410</a>
                    </p>
                    <p><strong class="text-white font-normal">Greg:</strong>
                        <a href="tel:+447587655379" class="hover:text-primary transition">07587 655 379</a> /
                        <a href="tel:+447916284814" class="hover:text-primary transition">07916 284 814</a>
                    </p>
                    <p><strong class="text-white font-normal">James:</strong>
                        <a href="tel:+447587655378" class="hover:text-primary transition">07587 655 378</a>
                    </p>
                    <p><strong class="text-white font-normal">Milena:</strong>
                        <a href="tel:+447950345542" class="hover:text-primary transition">07950 345 542</a>
                    </p>
                    <p><strong class="text-white font-normal">Email:</strong>
                        <a href="mailto:info@kubik.ae" class="hover:text-primary transition">info@kubik.ae</a>
                    </p>
                    <p><strong class="text-white font-normal">Address:</strong><br>
                        Kubik Construction<br>
                        72 First Avenue,<br>
                        Acton, London<br>
                        W3 7JW
                    </p>
                </div>

                <h3 class="uppercase text-sm font-semibold text-white/60 tracking-widest mb-3">Follow Us</h3>

                <div class="flex items-center gap-3" id="social-icons">
                    @php
                        $socials = [
                            ['label' => 'Facebook', 'icon' => 'facebook', 'url' => '#'],
                            ['label' => 'Twitter', 'icon' => 'twitter-alt', 'url' => '#'],
                            ['label' => 'Pinterest', 'icon' => 'pinterest', 'url' => '#'],
                            ['label' => 'LinkedIn', 'icon' => 'linkedin', 'url' => '#'],
                            ['label' => 'Instagram', 'icon' => 'instagram', 'url' => '#'],
                        ];
                    @endphp

                    @foreach ($socials as $social)
                        <a href="{{ $social['url'] }}" aria-label="{{ $social['label'] }}"
                           class="group w-10 h-10 flex items-center justify-center rounded-full border border-white/10 bg-white/5 hover:bg-primary/20 hover:border-primary text-white transition duration-200">
                            <i class="fi fi-brands-{{ $social['icon'] }} group-hover:text-primary leading-3"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Callback Request Form --}}
            <form id="contact-form" class="bg-[#151515] p-8 rounded space-y-6">
                <h2 class="text-xl text-white mb-4">Request a Callback</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm mb-1">Full Name*</label>
                        <input type="text" name="name" placeholder="Your full name"
                               class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" />
                    </div>
                    <div>
                        <label class="block text-sm mb-1">Email*</label>
                        <input type="email" name="email" placeholder="Your email address"
                               class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm mb-1">Telephone*</label>
                    <input type="tel" name="phone" placeholder="Your phone number"
                           class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" />
                </div>

                <div>
                    <label class="block text-sm mb-1">Message</label>
                    <textarea name="message" rows="5" placeholder="Your message..."
                              class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                </div>

                <button type="submit"
                        class="w-full bg-secondary text-white font-semibold py-3 px-6 hover:bg-secondary/90 transition rounded">
                    Call Me Back
                </button>
            </form>
        </div>
    </x-container>
</section>

{{-- Animations --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        gsap.from("#contact-info", {
            scrollTrigger: {
                trigger: "#contact-info",
                start: "top 80%",
            },
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power2.out"
        });

        gsap.from("#contact-form", {
            scrollTrigger: {
                trigger: "#contact-form",
                start: "top 80%",
            },
            opacity: 0,
            y: 50,
            duration: 1,
            delay: 0.3,
            ease: "power2.out"
        });

        gsap.from("#social-icons a", {
            scrollTrigger: {
                trigger: "#social-icons",
                start: "top 90%",
            },
            opacity: 0,
            scale: 0.8,
            stagger: 0.1,
            duration: 0.5,
            ease: "back.out(1.7)"
        });
    });
</script>

@endsection
