@extends('layouts.app')

@section('content')
    {{-- Reusable Hero Section --}}
    @include('sections.common.hero', [
        'title' => 'Our Projects',
        'subtitle' => 'Timeless Craftsmanship. Enduring Impact.',
        'image' => asset('images/projects/hero.jpg'),
    ])

    {{-- Projects Section --}}
    @include('sections.projects.list')

        {{-- Contact / Call to Action --}}
    <section class="bg-black text-white py-20">
        @include('sections.form-cta')
    </section>
@endsection
