@extends('layouts.app')

@section('content')
    {{-- Animated Hero Section (with GSAP) --}}
    @include('sections.common.hero', [
        'title' => 'About Kubik',
        'subtitle' => 'Innovative Construction. Bold Vision.',
        'image' => asset('/images/about/hero.jpg'),
    ])

    {{-- About Us Section --}}
    @include('sections.about.about-us')

    {{-- Our Story --}}
    @include('sections.about.story')

    {{-- Our Values --}}
    @include('sections.about.values')

    {{-- Who We Work With --}}
    @include('sections.about.clients')

    {{-- Scrollable Image Strip --}}
    @include('sections.about.image-scroll')


@endsection


