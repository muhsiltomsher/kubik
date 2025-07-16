@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
@include('sections.common.hero', [
    'title' => 'Contact Us',
    'subtitle' => 'Let’s discuss your project needs',
    'image' => asset('images/contact/hero.jpg')
])

{{-- Contact Section --}}
<section class="bg-black text-white py-24 border-b border-secondary">
    <x-container>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- Contact Info --}}
   <div class="relative bg-[#151515] p-10  shadow-lg border border-white/10">
    <h2 class="text-3xl md:text-4xl font-silk-serif font-semibold mb-6 text-primary">Get in Touch</h2>

    <p class="text-white/70 mb-6 max-w-lg">
        Whether you're planning a new project or have a general inquiry, our team is here to help.
        Reach out via the form or the contact details below.
    </p>

    <div class="space-y-4 text-sm text-white/80 mb-8">
        <p><strong class="text-white">Phone:</strong>
            <a href="tel:+971500000000" class="hover:text-primary transition">+971 50 000 0000</a>
        </p>
        <p><strong class="text-white">Email:</strong>
            <a href="mailto:info@kubik.ae" class="hover:text-primary transition">info@kubik.ae</a>
        </p>
        <p><strong class="text-white">Address:</strong> Kubik Construction, Dubai, United Arab Emirates</p>
    </div>

    <h3 class="uppercase text-sm font-semibold text-white/60 tracking-widest mb-3">Follow Us</h3>

    <div class="flex items-center gap-3">
        @php
            $socials = [
                ['label' => 'Facebook', 'icon' => 'facebook', 'url' => '#'],
                ['label' => 'Twitter', 'icon' => 'twitter-alt', 'url' => '#'],
                ['label' => 'YouTube', 'icon' => 'youtube', 'url' => '#'],
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


            {{-- Contact Form --}}
            <form class="bg-[#151515] p-8 rounded space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm mb-1">Name*</label>
                        <input type="text" name="name" placeholder="Your name" class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" />
                    </div>
                    <div>
                        <label class="block text-sm mb-1">Email*</label>
                        <input type="email" name="email" placeholder="Your email" class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm mb-1">Phone</label>
                    <input type="tel" name="phone" placeholder="+971" class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary" />
                </div>

                <div>
                    <label class="block text-sm mb-1">Message*</label>
                    <textarea name="message" rows="5" placeholder="Tell us about your project" class="w-full bg-transparent border border-white/30 text-white py-3 px-4 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                </div>

                <button type="submit" class="w-full bg-secondary text-white font-semibold py-3 px-6 hover:bg-secondary/90 transition rounded">
                    Send Message
                </button>
            </form>
        </div>
    </x-container>
</section>

{{-- Map Section --}}
<section class="relative h-[400px]">
    <iframe
        class="absolute inset-0 w-full h-full"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.900269662961!2d55.27078247523305!3d25.204849577747927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f434e01ae2b01%3A0xf3c18f0b8dd6939e!2sDubai!5e0!3m2!1sen!2sae!4v1626168888888!5m2!1sen!2sae"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

@endsection
