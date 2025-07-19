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
<section class="bg-black text-white py-20 font-sans">
  <x-container>
    <div class="grid grid-cols-1 gap-12">

      <!-- Intro Block -->
      <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Left Text -->
        <div>
          <p class="text-sm uppercase text-primary tracking-widest mb-4">Our Services</p>
          <h2 class="text-5xl font-light leading-[1.2] mb-6 text-primary">
            We Build<br>With Precision.
          </h2>
          <p class="text-white/70 max-w-xl text-base leading-relaxed">
            At Kubik Construction, we have some of the most talented builders within the UK. Combined with our engineers and specialist teams, we deliver unrivalled building services and solutions.
            <br><br>
            Our reputation for innovative design, staying on budget, and always delivering on time helps us build long-standing relationships with our clients.
          </p>
        </div>

        <!-- Right Image -->
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

      <!-- Service List -->
      <div class="divide-y divide-white/10">
        @php
          $services = [
            [ 'title' => 'Site Surveys', 'desc' => 'We carry out comprehensive topographical and boundary surveys, ensuring all site data is precise and aligned with planning and construction needs.', 'image' => '/images/services/thumb-site-survey.jpg' ],
            [ 'title' => 'Soil Investigation', 'desc' => 'We provide geotechnical reports through drilling, sampling, and testing, helping inform foundation types and mitigate structural risks.', 'image' => '/images/services/thumb-soil.jpg' ],
            [ 'title' => 'Piling', 'desc' => 'We offer both driven and bored piling services to support deep foundation requirements, ideal for high-rise or load-intensive structures.', 'image' => '/images/services/thumb-piling.jpg' ],
            [ 'title' => 'Underpinning', 'desc' => 'Our underpinning solutions stabilise existing structures with minimal disruption — perfect for strengthening, refurbishments, or extensions.', 'image' => '/images/services/thumb-underpinning.jpg' ],
            [ 'title' => 'Steel Frame Structuring', 'desc' => 'We fabricate and install custom steel structures, providing robust frameworks that meet architectural, safety, and load-bearing needs.', 'image' => '/images/services/thumb-steel.jpg' ],
            [ 'title' => 'Roofing', 'desc' => 'Complete roofing solutions from structural framing to waterproofing — suitable for both new builds and roof replacements.', 'image' => '/images/services/thumb-roofing.jpg' ],
            [ 'title' => 'Brickwork', 'desc' => 'Precision bricklaying services using traditional and contemporary methods for facades, walls, and decorative structures.', 'image' => '/images/services/thumb-brickwork.jpg' ],
            [ 'title' => 'Plastering & Rendering', 'desc' => 'Smooth and durable finishes — from internal plastering to external rendering, all with aesthetic and weather protection in mind.', 'image' => '/images/services/thumb-rendering.jpg' ],
            [ 'title' => 'Painting & Decorating', 'desc' => 'Interior and exterior decorative finishes with high-grade materials, executed with attention to detail and design integrity.', 'image' => '/images/services/thumb-paint.jpg' ],
            [ 'title' => 'Concrete Pump Work', 'desc' => 'Efficient concrete placement using boom and line pumps — ideal for bulk pours, hard-to-reach zones, and complex projects.', 'image' => '/images/services/thumb-concrete.jpg' ],
          ];
        @endphp

        @foreach($services as $index => $service)
        <div class="group flex flex-col md:flex-row justify-between items-start md:items-center gap-6 py-8 transition-all duration-300 ease-in-out hover:bg-white/5 rounded-lg px-4">
          <div class="flex-1">
            <div class="flex items-center gap-3 mb-2">
              <span class="text-secondary text-base font-mono">
                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
              </span>
              <h3 class="text-2xl md:text-3xl font-light text-white">
                {{ $service['title'] }}
              </h3>
            </div>
            <p class="text-white/60 text-base leading-relaxed max-w-3xl">
              {{ $service['desc'] }}
            </p>
          </div>
          @if($service['image'])
          <div class="overflow-hidden rounded-md hidden md:block transition-all duration-500 ease-in-out w-70 h-36 group-hover:w-80 group-hover:h-44">
            <img 
              src="{{ asset($service['image']) }}" 
              alt="{{ $service['title'] }}"
              class="h-full w-full object-cover transition-transform duration-500 ease-in-out transform scale-95 group-hover:scale-100"
            />
          </div>
          @endif
        </div>
        @endforeach
      </div>

    </div>
  </x-container>
</section>

{{-- Call to Action --}}
@include('sections.form-cta')

@endsection
