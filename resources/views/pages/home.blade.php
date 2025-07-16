@extends('layouts.app')

@section('title', 'Home - Kubik')

@section('content')

    {{-- Hero Section --}}
    @include('sections.hero-home')

    {{-- About Us Section --}}
    @include('sections.about-home')

    {{-- Projects Section --}}
    @include('sections.projects')

    {{-- Services Section --}}
    @include('sections.services')

    {{-- Testimonials Section --}}
    @include('sections.testimonials-home')

    {{-- Service CTA Section --}}
    @include('sections.service-cta-home')

    {{-- Team Section --}}
    @include('sections.team-home')

    {{-- Where We Work Section --}}
    @include('sections.wework-home') {{-- ✅ Corrected --}}

    {{-- Call to Action (CTA) --}}
@include('sections.form-cta')


@endsection
