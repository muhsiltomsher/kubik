{{-- Services Overview Section --}}
@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
@include('sections.common.hero', [
    'title' => $title,
    'subtitle' => 'Delivering Structural Excellence Since 2012',
    'image' => asset('images/services/hero.jpg')
])

{{-- Services Overview Section --}}
<section class="bg-black text-white py-20">
  <x-container>
    <div class="grid grid-cols-1 gap-12">

      <!-- Left Intro -->
      <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Text Content -->
        <div>
          <p class="text-sm uppercase text-primary tracking-widest mb-4">Services</p>
          <h2 class="text-5xl font-bold leading-[45px] mb-6 text-primary">
            Services<br>we provide
          </h2>
          <p class="text-gray-400 max-w-xl">
            We are a team of passionate engineers, surveyors, and construction experts committed to delivering quality with precision and integrity. 
            From mapping terrain to underpinning structures, we lay the groundwork for lasting legacies—bold, stable, and efficient.
          </p>
        </div>

        <!-- Decorative Image -->
        <div class="hidden md:block">
          <div class="relative w-full h-[400px] overflow-hidden rounded shadow-lg">
            <img 
              src="{{ asset('images/services/services-intro.png') }}" 
              alt="Kubik Engineering Team at Work"
              class="absolute inset-0 h-full w-full object-cover brightness-90 transition duration-300 hover:scale-105"
            />
          </div>
        </div>
      </div>

      <!-- Right List -->
      <div class="divide-y divide-white/10">
        @php
          $services = [
            [
              'id' => '001',
              'title' => 'Site Surveys',
              'desc' => 'We perform detailed topographical site analysis and reporting to ensure readiness for construction. This includes measuring contours, verifying legal boundaries, and ensuring alignment with architectural plans.',
              'image' => '/images/services/thumb-site-survey.jpg',
            ],
            [
              'id' => '002',
              'title' => 'Soil Investigation',
              'desc' => 'We conduct geotechnical and environmental assessments to prevent structural surprises. Our process includes soil boring, sampling, lab testing, and foundation suitability reports.',
              'image' => '/images/services/thumb-soil.jpg',
            ],
            [
              'id' => '003',
              'title' => 'Piling',
              'desc' => 'Reliable piling services tailored for your structural and soil needs. We handle both driven and bored pile systems for various load and soil conditions.',
              'image' => '/images/services/thumb-piling.jpg',
            ],
            [
              'id' => '004',
              'title' => 'Underpinning',
              'desc' => 'We reinforce existing foundations with minimal disruption and maximum stability. Ideal for structural strengthening, renovations, or correcting settlement issues.',
              'image' => '/images/services/thumb-underpinning.jpg',
            ],
            [
              'id' => '005',
              'title' => 'Concrete Pump Work',
              'desc' => 'Boom and line pump solutions for high-efficiency concrete placement. Suitable for high-rise pours, tight-access sites, and bulk placement projects.',
              'image' => '/images/services/thumb-concrete.jpg',
            ],
            [
              'id' => '006',
              'title' => 'Foundation Design',
              'desc' => 'Customized foundation solutions based on structural load, site constraints, and soil classification. We combine structural engineering and ground modeling to deliver optimal base designs.',
              'image' => '/images/services/thumb-foundation.jpg',
            ],
          ];
        @endphp

        @foreach($services as $service)
        <div class="group flex justify-between items-center gap-6 py-6 transition-all duration-300 ease-in-out">
          <div class="flex flex-col gap-1">
            <span class="text-secondary text-sm font-mono">({{ $service['id'] }})</span>
            <h3 class="text-2xl font-semibold text-white group-hover:text-primary">{{ $service['title'] }}</h3>
            <p class="text-white/60 text-sm max-w-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              {{ $service['desc'] }}
            </p>
          </div>
          @if($service['image'])
          <div class="overflow-hidden rounded-md hidden md:block transition-all duration-500 ease-in-out group-hover:w-90 group-hover:h-60 w-70 h-36">
            <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}"
                 class="h-full w-full object-cover transition-transform duration-500 ease-in-out transform group-hover:scale-100" />
          </div>
          @endif
        </div>
        @endforeach
      </div>

    </div>
  </x-container>
</section>

{{-- Call to Action (CTA) --}}
@include('sections.form-cta')

@endsection
