@extends('layouts.app')
@section('title', 'Our Team | Alms Oil Nigeria Limited')
@section('description', 'Meet the leadership team at Alms Oil Nigeria Limited. Seasoned professionals with deep roots in Nigeria\'s downstream petroleum, logistics, and energy infrastructure sectors.')

@section('content')

{{-- ══════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-[#0B332B] min-h-[82vh] sm:min-h-[78vh] flex flex-col">
  <div class="absolute inset-0 z-0">
    <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1600&q=85"
         alt="Alms Oil leadership team"
         class="w-full h-full object-cover object-center"
         style="filter:saturate(0.6) brightness(0.35) contrast(1.1)" />
    <div class="absolute inset-0"
         style="background:linear-gradient(135deg,rgba(11,51,43,0.93) 0%,rgba(11,51,43,0.55) 52%,rgba(11,51,43,0.78) 100%)"></div>
  </div>
  {{-- Noise texture --}}
  <div class="absolute inset-0 z-[1] pointer-events-none opacity-[0.15]"
       style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px"></div>
  {{-- Ambient orange glow --}}
  <div class="absolute top-0 right-0 w-72 sm:w-[36rem] h-72 sm:h-[36rem] pointer-events-none z-[1]"
       style="background:radial-gradient(circle at 80% 20%,rgba(245,133,15,0.12) 0%,transparent 60%)"></div>

  <div class="relative z-10 flex-1 max-w-7xl mx-auto w-full px-4 sm:px-8 lg:px-12 flex flex-col justify-between">

    {{-- Breadcrumb --}}
    <div class="pt-8 sm:pt-10 flex items-center gap-2 text-[11px] text-white/40 font-medium flex-wrap">
      <a href="{{ route('home') }}" class="hover:text-white/70 transition-colors">Home</a>
      <span>/</span>
      <a href="{{ route('about') }}" class="hover:text-white/70 transition-colors">About</a>
      <span>/</span>
      <span class="text-white/65">Our Team</span>
    </div>

    {{-- Hero content --}}
    <div class="py-10 sm:py-14 lg:py-20">
      <div class="max-w-3xl">
        <div class="inline-flex items-center gap-2 mb-5 sm:mb-6 px-3 py-1.5 rounded-full border border-white/15 bg-white/5">
          <div class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold uppercase tracking-[0.25em] text-white/70">Leadership & Expertise</span>
        </div>
        <h1 class="font-display font-bold text-white leading-[0.92] tracking-tight mb-5 sm:mb-8"
            style="font-size:clamp(2.4rem,6vw,5.5rem)">
          The People<br/>Powering<br/><span style="color:#F5850F">Alms Oil.</span>
        </h1>
        <p class="text-white text-sm sm:text-base lg:text-lg leading-relaxed max-w-xl mb-7 sm:mb-10">
          Seasoned professionals with decades of Nigerian downstream energy experience. From bulk petroleum trading and fleet operations to HSE compliance and infrastructure engineering.
        </p>
        <div class="flex flex-col sm:flex-row gap-3">
          <a href="{{ route('contact') }}"
             class="group inline-flex items-center justify-center gap-3 bg-[#F5850F] hover:bg-[#e07708] text-white
                    font-bold text-xs sm:text-sm uppercase tracking-wide
                    pl-6 pr-5 py-4 rounded-full shadow-xl shadow-[#F5850F]/30
                    hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 w-full sm:w-auto">
            Work With Our Team
            <span class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
              </svg>
            </span>
          </a>
          <a href="{{ route('about') }}"
             class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-white/20 text-white font-bold text-xs sm:text-sm uppercase tracking-wide hover:bg-white/10 transition-all duration-200 w-full sm:w-auto">
            Our Story
          </a>
        </div>
      </div>
    </div>

    {{-- Stats strip --}}
    <div class="border-t border-white/8 py-5 flex flex-wrap items-center gap-x-6 gap-y-2.5">
      @foreach(['20+ Years Experience', '36-State Coverage', 'ISO 9001 Certified', 'NMDPRA Licensed'] as $item)
        <div class="flex items-center gap-2">
          <div class="w-1 h-1 rounded-full bg-[#F5850F] shrink-0"></div>
          <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40">{{ $item }}</span>
        </div>
      @endforeach
    </div>

  </div>
</section>

{{-- ══════════════════════════════════════════════════
     INTRO STRIP
══════════════════════════════════════════════════ --}}
<section class="bg-white border-b border-[#0B332B]/8 py-10 sm:py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 lg:gap-10 items-start">
      <div class="lg:col-span-7">
        <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#0B332B]/40 mb-3">Who We Are</p>
        <h2 class="font-display font-bold text-[#0B332B] leading-tight"
            style="font-size:clamp(1.25rem,2.6vw,2.1rem)">
          Decades of downstream energy expertise. One mission: reliable supply, every time.
        </h2>
      </div>
      <div class="lg:col-span-5">
        <p class="text-[#2A2A2A]/60 text-sm sm:text-base leading-relaxed">
          Every leader at Alms Oil has hands-on experience from Nigeria's most demanding energy environments. NNPC subsidiaries, international trading desks, and infrastructure projects across all 36 states.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════
     EXECUTIVE LEADERSHIP
══════════════════════════════════════════════════ --}}
@php
$executives = [
  [
    'name'     => 'Adewale Okonkwo',
    'title'    => 'Chief Executive Officer',
    'dept'     => 'Energy Strategy & Downstream',
    'bio'      => 'Leads Alms Oil\'s strategic vision with 20+ years in Nigeria\'s petroleum downstream sector, including senior positions at NNPC subsidiaries. He has been instrumental in scaling our trading volume to 850M+ litres annually.',
    'img'      => 'https://images.pexels.com/photos/34687890/pexels-photo-34687890.jpeg?auto=compress&cs=tinysrgb&w=800&q=85',
    'initials' => 'AO',
    'tags'     => ['Petroleum Trading', 'Strategy', 'Downstream Ops'],
  ],
  [
    'name'     => 'David Lawal',
    'title'    => 'Director of Operations',
    'dept'     => 'Logistics & Fleet Management',
    'bio'      => 'Oversees the GPS-tracked tanker fleet and nationwide depot operations, maintaining our 98.5% on-time delivery benchmark across all 36 states. He previously served as Head of Distribution at a major Lagos-based petroleum marketer.',
    'img'      => 'https://images.unsplash.com/photo-1522529599102-193c0d76b5b6?auto=format&fit=crop&w=800&q=80',
    'initials' => 'DL',
    'tags'     => ['Fleet Logistics', 'Operations', 'Supply Chain'],
  ],
  [
    'name'     => 'Tunde Adeniyi',
    'title'    => 'Technical Director',
    'dept'     => 'HSE & Quality Assurance',
    'bio'      => 'Champions our ISO 9001:2015 quality framework and all HSE protocols across tank farms, fleet, and customer site operations. He is a certified HSE auditor with 15+ years in petroleum facility management.',
    'img'      => 'https://images.pexels.com/photos/8487795/pexels-photo-8487795.jpeg?auto=compress&cs=tinysrgb&w=800&q=85',
    'initials' => 'TA',
    'tags'     => ['ISO 9001', 'HSE', 'Quality Management'],
  ],
  [
    'name'     => 'Chisom Dike',
    'title'    => 'Commercial Director',
    'dept'     => 'Business Development & Trade',
    'bio'      => 'Manages national commercial partnerships, bulk trading relationships, and West African market expansion. She previously led business development at a regional energy conglomerate, closing over N4B in annual supply contracts.',
    'img'      => 'https://images.pexels.com/photos/34690061/pexels-photo-34690061.jpeg?auto=compress&cs=tinysrgb&w=800&q=85',
    'initials' => 'CD',
    'tags'     => ['Business Dev', 'Trading', 'West Africa'],
  ],
];
@endphp

<section class="bg-[#FAFAF9] py-12 sm:py-18 lg:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">

    {{-- Section header --}}
    <div class="mb-8 sm:mb-12">
      <p class="text-[10px] font-black uppercase tracking-[0.28em] text-[#F5850F] mb-1.5">Executive Leadership</p>
      <h2 class="font-display font-bold text-[#0B332B] tracking-tight leading-tight"
          style="font-size:clamp(1.4rem,3vw,2.4rem)">
        Steering the company forward
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5 lg:gap-6">
      @foreach($executives as $i => $member)
        <div class="team-reveal group flex flex-col bg-white rounded-2xl sm:rounded-[1.75rem] overflow-hidden border border-[#0B332B]/8
                    hover:border-[#F5850F]/35 hover:shadow-2xl hover:shadow-[#0B332B]/8 transition-all duration-300
                    {{ $i % 2 === 1 ? 'lg:mt-8' : '' }}">

          {{-- Photo --}}
          <div class="relative h-52 sm:h-56 lg:h-60 overflow-hidden bg-[#0B332B] shrink-0">
            <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}"
                 class="w-full h-full object-cover object-top group-hover:scale-[1.06] transition-transform duration-700"
                 style="filter:saturate(0.78) brightness(0.92)" loading="lazy" />

            {{-- Hover overlay on desktop. Bio shown inline on mobile. --}}
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 hidden sm:block"
                 style="background:linear-gradient(to top,rgba(11,51,43,0.95) 0%,rgba(11,51,43,0.6) 52%,transparent 100%)"></div>
            <div class="absolute inset-x-4 bottom-4 opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300 hidden sm:block">
              <p class="text-white/85 text-[12px] leading-relaxed line-clamp-4">{{ $member['bio'] }}</p>
            </div>

            {{-- Dept badge --}}
            <div class="absolute top-3 left-3 z-10">
              <span class="inline-flex items-center bg-[#0B332B]/80 backdrop-blur-sm border border-white/15 text-[#F5850F] text-[9px] font-black uppercase tracking-[0.2em] px-2.5 py-1 rounded-full leading-none">
                {{ $member['dept'] }}
              </span>
            </div>
          </div>

          {{-- Card body --}}
          <div class="flex flex-col flex-1 p-4 sm:p-5">
            <div class="flex items-start justify-between gap-3 mb-3">
              <div class="min-w-0">
                <h3 class="font-display font-bold text-[#0B332B] text-[15px] sm:text-base leading-snug group-hover:text-[#F5850F] transition-colors duration-200">
                  {{ $member['name'] }}
                </h3>
                <p class="text-[10px] sm:text-[11px] font-bold text-[#2A2A2A]/45 mt-0.5 uppercase tracking-wider leading-tight">{{ $member['title'] }}</p>
              </div>
              <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-[#0B332B] flex items-center justify-center text-white font-black text-[10px] sm:text-[11px] shrink-0 group-hover:bg-[#F5850F] transition-colors duration-200">
                {{ $member['initials'] }}
              </div>
            </div>

            {{-- Bio always visible on mobile --}}
            <p class="text-[12px] text-[#2A2A2A]/55 leading-relaxed mb-3 sm:hidden">{{ $member['bio'] }}</p>

            {{-- Tags --}}
            <div class="flex flex-wrap gap-1.5 mt-auto pt-3 border-t border-[#0B332B]/8">
              @foreach($member['tags'] as $tag)
                <span class="text-[9px] font-bold uppercase tracking-wider px-2 py-1 rounded-full bg-[#0B332B]/5 text-[#0B332B]/50 group-hover:bg-[#F5850F]/8 group-hover:text-[#F5850F]/70 transition-colors duration-200">
                  {{ $tag }}
                </span>
              @endforeach
            </div>
          </div>

        </div>
      @endforeach
    </div>

  </div>
</section>

{{-- ══════════════════════════════════════════════════
     MANAGEMENT TEAM
══════════════════════════════════════════════════ --}}
@php
$managers = [
  [
    'name'     => 'Emeka Nwosu',
    'title'    => 'Head of Procurement',
    'dept'     => 'Supply & Procurement',
    'img'      => 'https://images.pexels.com/photos/8487393/pexels-photo-8487393.jpeg?auto=compress&cs=tinysrgb&w=600&q=80',
    'initials' => 'EN',
    'bio'      => 'Handles upstream product procurement and vendor relationships across all petroleum product categories.',
  ],
  [
    'name'     => 'Fatima Bello',
    'title'    => 'Finance Manager',
    'dept'     => 'Finance & Compliance',
    'img'      => 'https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=600&q=80',
    'initials' => 'FB',
    'bio'      => 'Leads financial planning, trade settlement, and regulatory compliance across CBN and DPR reporting obligations.',
  ],
  [
    'name'     => 'Segun Adeleke',
    'title'    => 'Fleet Operations Manager',
    'dept'     => 'Tanker Operations',
    'img'      => 'https://images.pexels.com/photos/8487392/pexels-photo-8487392.jpeg?auto=compress&cs=tinysrgb&w=600&q=80',
    'initials' => 'SA',
    'bio'      => 'Runs real-time dispatch, driver scheduling, and GPS telemetry monitoring for the full tanker fleet.',
  ],
  [
    'name'     => 'Ngozi Obi',
    'title'    => 'Engineering Lead',
    'dept'     => 'Infrastructure & Engineering',
    'img'      => 'https://images.pexels.com/photos/8093574/pexels-photo-8093574.jpeg?auto=compress&cs=tinysrgb&w=600&q=80',
    'initials' => 'NO',
    'bio'      => 'Heads tank farm design, filling station setup projects, and site engineering activities nationwide.',
  ],
  [
    'name'     => 'Babatunde Yusuf',
    'title'    => 'Regional Manager, Abuja',
    'dept'     => 'FCT & North Operations',
    'img'      => 'https://images.pexels.com/photos/5490235/pexels-photo-5490235.jpeg?auto=compress&cs=tinysrgb&w=600&q=80',
    'initials' => 'BY',
    'bio'      => 'Oversees all commercial and supply operations from the FCT desk, with coverage across northern Nigeria.',
  ],
  [
    'name'     => 'Amaka Eze',
    'title'    => 'Client Relations Lead',
    'dept'     => 'Commercial Desk',
    'img'      => 'https://images.pexels.com/photos/5327585/pexels-photo-5327585.jpeg?auto=compress&cs=tinysrgb&w=600&q=80',
    'initials' => 'AE',
    'bio'      => 'Manages key accounts from day one, handling onboarding, contract renewals, and day-to-day client satisfaction.',
  ],
];
@endphp

<section class="bg-white py-12 sm:py-18 lg:py-24 border-t border-[#0B332B]/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">

    <div class="mb-8 sm:mb-12">
      <p class="text-[10px] font-black uppercase tracking-[0.28em] text-[#F5850F] mb-1.5">Management Team</p>
      <h2 class="font-display font-bold text-[#0B332B] tracking-tight leading-tight"
          style="font-size:clamp(1.4rem,3vw,2.4rem)">
        Experts across every function
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
      @foreach($managers as $member)
        <div class="team-reveal group flex items-start gap-3 sm:gap-4 p-4 sm:p-5 rounded-2xl border border-[#0B332B]/8 bg-white
                    hover:border-[#F5850F]/30 hover:bg-[#FAFAF9] hover:shadow-lg hover:shadow-[#0B332B]/6 transition-all duration-300">

          {{-- Avatar --}}
          <div class="relative shrink-0">
            <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-xl sm:rounded-2xl overflow-hidden border-2 border-[#0B332B]/8 group-hover:border-[#F5850F]/30 transition-colors duration-200">
              <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}"
                   class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500"
                   style="filter:saturate(0.8)" loading="lazy" />
            </div>
            <div class="absolute -bottom-1 -right-1 w-4 h-4 sm:w-5 sm:h-5 rounded-full bg-[#F5850F] border-2 border-white flex items-center justify-center">
              <div class="w-1 h-1 sm:w-1.5 sm:h-1.5 rounded-full bg-white"></div>
            </div>
          </div>

          {{-- Info --}}
          <div class="min-w-0 flex-1">
            <p class="text-[9px] font-bold uppercase tracking-wider text-[#F5850F] mb-0.5 leading-tight">{{ $member['dept'] }}</p>
            <h3 class="font-display font-bold text-[#0B332B] text-[14px] sm:text-[15px] leading-snug group-hover:text-[#F5850F] transition-colors duration-200 mb-0.5">
              {{ $member['name'] }}
            </h3>
            <p class="text-[10px] sm:text-[11px] font-semibold text-[#2A2A2A]/45 uppercase tracking-wide mb-2 leading-tight">{{ $member['title'] }}</p>
            <p class="text-[12px] sm:text-[13px] text-[#2A2A2A]/55 leading-relaxed line-clamp-2">{{ $member['bio'] }}</p>
          </div>

        </div>
      @endforeach
    </div>

  </div>
</section>

{{-- ══════════════════════════════════════════════════
     STATS STRIP
══════════════════════════════════════════════════ --}}
<section class="bg-[#0B332B] py-12 sm:py-16 relative overflow-hidden">
  {{-- Noise --}}
  <div class="absolute inset-0 pointer-events-none opacity-[0.15]"
       style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px"></div>
  {{-- Orange glow --}}
  <div class="absolute top-0 left-0 w-80 h-80 pointer-events-none"
       style="background:radial-gradient(circle at 10% 0%,rgba(245,133,15,0.10) 0%,transparent 60%)"></div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    {{-- 2 cols on mobile, 4 on lg --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-10">
      @php
        $stats = [
          ['850M+', 'Litres Traded',    'Across Nigeria and West Africa'],
          ['36',    'States Covered',   'Full nationwide distribution'],
          ['15+',   'Years Operating',  'In Nigeria\'s downstream sector'],
          ['98.5%', 'On-Time Delivery', 'GPS-tracked fleet performance'],
        ];
      @endphp
      @foreach($stats as [$number, $label, $sub])
        <div class="team-reveal text-center lg:text-left">
          <p class="font-display font-black text-[#F5850F] leading-none mb-1.5"
             style="font-size:clamp(1.8rem,4vw,3rem)">{{ $number }}</p>
          <p class="font-bold text-white text-sm sm:text-base mb-1 leading-snug">{{ $label }}</p>
          <p class="text-white/40 text-xs sm:text-sm leading-relaxed">{{ $sub }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════
     JOIN THE TEAM CTA
══════════════════════════════════════════════════ --}}
<section class="bg-[#F8FAFC] border-t border-[#0B332B]/8 py-14 sm:py-16 lg:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="max-w-2xl mx-auto text-center">

      <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-[#0B332B] flex items-center justify-center mx-auto mb-5 sm:mb-6">
        <svg class="w-6 h-6 sm:w-7 sm:h-7 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
        </svg>
      </div>

      <p class="text-[10px] font-black uppercase tracking-[0.28em] text-[#F5850F] mb-3">Careers</p>
      <h2 class="font-display font-bold text-[#0B332B] leading-tight mb-4"
          style="font-size:clamp(1.35rem,3vw,2.2rem)">
        Join a team that powers Nigeria's industry
      </h2>
      <p class="text-[#2A2A2A]/55 text-sm sm:text-base leading-relaxed mb-8 max-w-lg mx-auto">
        We're growing. If you're passionate about petroleum operations, logistics, engineering, or commercial energy trading, we'd love to hear from you.
      </p>

      <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3">
        <a href="{{ route('contact') }}"
           class="group inline-flex items-center justify-center gap-3 bg-[#F5850F] hover:bg-[#e07708] text-white
                  font-bold text-xs sm:text-sm uppercase tracking-wide
                  pl-6 pr-5 py-4 rounded-full shadow-lg shadow-[#F5850F]/25
                  hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200">
          Get In Touch
          <span class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </span>
        </a>
        <a href="{{ route('about') }}"
           class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-[#0B332B]/15 text-[#0B332B] font-bold text-xs uppercase tracking-wider hover:bg-[#0B332B] hover:text-white hover:border-[#0B332B] transition-all duration-200">
          About Alms Oil
        </a>
      </div>

    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
(function () {
  var style = document.createElement('style');
  style.textContent = [
    '.team-reveal{opacity:0;transform:translateY(22px);transition:opacity 0.58s cubic-bezier(.22,1,.36,1),transform 0.58s cubic-bezier(.22,1,.36,1)}',
    '.team-reveal.is-visible{opacity:1;transform:translateY(0)}'
  ].join('');
  document.head.appendChild(style);

  if ('IntersectionObserver' in window) {
    var ro = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('is-visible'); ro.unobserve(e.target); }
      });
    }, { threshold: 0.06, rootMargin: '0px 0px -16px 0px' });

    document.querySelectorAll('.team-reveal').forEach(function (el, i) {
      el.style.transitionDelay = (i % 4) * 0.06 + 's';
      ro.observe(el);
    });
  } else {
    document.querySelectorAll('.team-reveal').forEach(function (el) {
      el.classList.add('is-visible');
    });
  }
}());
</script>
@endpush
