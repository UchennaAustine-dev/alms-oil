@extends('layouts.app')
@section('title', 'Petroleum Supply & Trading | Alms Oil Nigeria Limited')
@section('description', 'Reliable bulk supply of AGO, PMS, DPK, Jet A-1, LPG and specialty products from certified depots across all 36 Nigerian states. NMDPRA licensed.')

@section('content')

{{-- ══════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-alms-green" style="min-height:82vh">

  <div class="absolute inset-0 z-0">
    <img src="https://images.pexels.com/photos/36228061/pexels-photo-36228061.jpeg?auto=compress&cs=tinysrgb&w=1600&q=85"
         alt="Petroleum storage tanks"
         class="w-full h-full object-cover object-center"
         style="filter:saturate(0.65) brightness(0.4) contrast(1.1)" />
    <div class="absolute inset-0"
         style="background:linear-gradient(135deg,rgba(11,51,43,0.88) 0%,rgba(11,51,43,0.5) 55%,rgba(11,51,43,0.72) 100%)"></div>
  </div>

  <div class="absolute inset-0 z-1 pointer-events-none opacity-[0.15]"
       style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 flex flex-col justify-between" style="min-height:82vh">

    <div class="pt-8 sm:pt-10 flex items-center gap-2 text-[11px] text-white/40 font-medium flex-wrap">
      <a href="{{ route('home') }}" class="hover:text-white/70 transition-colors">Home</a>
      <span>/</span>
      <a href="{{ route('home') }}#services" class="hover:text-white/70 transition-colors">Services</a>
      <span>/</span>
      <span class="text-white/65">Petroleum Supply &amp; Trading</span>
    </div>

    <div class="py-10 sm:py-14 lg:py-16 grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-end">
      <div>
        <div class="flex items-center gap-2.5 mb-5 sm:mb-6">
          <div class="w-5 h-px bg-alms-orange"></div>
          <span class="text-[10px] font-bold tracking-[0.32em] uppercase text-white">01 — Our Services</span>
        </div>
        <h1 class="font-display font-bold text-white leading-[0.9] tracking-tight mb-6 sm:mb-8"
            style="font-size:clamp(2.6rem,6vw,5.5rem)">
          Petroleum<br/>Supply &amp;<br/>
          <span style="color:#F5850F">Trading.</span>
        </h1>
        <p class="text-white text-sm sm:text-base lg:text-lg leading-relaxed mb-7 sm:mb-8 max-w-lg">
          NMDPRA-licensed bulk supply of AGO, PMS, DPK, Jet A-1, LPG, and specialty products from certified depots across all 36 Nigerian states.
        </p>
        <div class="flex flex-col sm:flex-row gap-3">
          <button data-open-quote="Petroleum Supply & Trading"
                  class="group inline-flex items-center justify-center gap-3 bg-alms-orange hover:bg-[#e07708] text-white
                         font-bold text-xs sm:text-sm uppercase tracking-wide
                         pl-6 pr-5 py-4 rounded-full shadow-xl shadow-alms-orange/30
                         hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
            Request Supply Quote
            <span class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </span>
          </button>
          <a href="{{ route('contact') }}"
             class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-white/25 text-white font-bold text-xs sm:text-sm uppercase tracking-wide hover:bg-white/10 transition-all duration-200">
            Talk to Our Team
          </a>
        </div>
      </div>
      <div class="space-y-3">
        <div class="backdrop-blur-md bg-white/8 border border-white/15 rounded-3xl p-5 sm:p-6">
          <p class="text-white text-sm sm:text-base leading-relaxed">
            We connect industrial consumers, retailers, and government entities to certified petroleum products — backed by a robust logistics network and strict quality assurance at every stage.
          </p>
        </div>
        <div class="grid grid-cols-3 gap-3">
          @foreach([['9+','Product Types'],['850M+','Litres Supplied'],['36','States Active']] as [$v,$l])
            <div class="backdrop-blur-md bg-white/8 border border-white/12 rounded-2xl px-3 py-4 text-center">
              <p class="font-display font-black text-white leading-none mb-1" style="font-size:clamp(1.3rem,2.2vw,1.75rem)">{{ $v }}</p>
              <p class="text-[9px] font-bold uppercase tracking-[0.18em] text-white">{{ $l }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="border-t border-white/8 py-5 flex flex-wrap items-center gap-x-8 gap-y-2">
      @foreach(['NMDPRA Licensed','DPR Certified','ISO 9001:2015','PIA 2021 Compliant'] as $cert)
        <div class="flex items-center gap-2">
          <div class="w-1 h-1 rounded-full bg-alms-orange"></div>
          <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40">{{ $cert }}</span>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════
     PRODUCTS GRID
══════════════════════════════════════════════════ --}}
<section class="bg-[#F8FAFC] py-14 sm:py-20 lg:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">

    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-14">
      <div>
        <div class="flex items-center gap-2.5 mb-3">
          <div class="w-4 h-px bg-alms-orange"></div>
          <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-alms-orange">Product Range</span>
        </div>
        <h2 class="font-display font-bold text-alms-green leading-tight tracking-tight"
            style="font-size:clamp(1.8rem,3.5vw,3rem)">What We Supply</h2>
      </div>
      <p class="text-sm text-alms-charcoal/55 max-w-xs sm:text-right leading-relaxed">
        All products sourced directly from NNPC and certified private depot networks.
      </p>
    </div>

    @php
      $products = [
        [
          'code' => 'AGO',
          'name' => 'Automotive Gas Oil',
          'desc' => 'Diesel fuel for trucks, generators, and industrial equipment. Multiple grade specifications.',
          'bg' => '#0B332B',
          'icon' => 'truck',
        ],
        [
          'code' => 'PMS',
          'name' => 'Premium Motor Spirit',
          'desc' => 'High-quality petrol for private and commercial vehicles. Pump-ready supply.',
          'bg' => '#F5850F',
          'icon' => 'pump',
        ],
        [
          'code' => 'DPK',
          'name' => 'Dual Purpose Kerosene',
          'desc' => 'Household and industrial kerosene. Clean-burning specification.',
          'bg' => '#0B332B',
          'icon' => 'flame',
        ],
        [
          'code' => 'ATK / Jet A-1',
          'name' => 'Aviation Turbine Kerosene',
          'desc' => 'Aviation-grade fuel for private and commercial aircraft. Strict purity standards.',
          'bg' => '#F5850F',
          'icon' => 'plane',
        ],
        [
          'code' => 'LPG',
          'name' => 'Liquefied Petroleum Gas',
          'desc' => 'Cylinder and bulk LPG for domestic, commercial, and industrial use.',
          'bg' => '#0B332B',
          'icon' => 'cylinder',
        ],
        [
          'code' => 'Lubricants',
          'name' => 'Specialty & Industrial Oils',
          'desc' => 'Engine oils, hydraulic fluids, and specialty lubricants for industrial assets.',
          'bg' => '#F5850F',
          'icon' => 'droplet',
        ],
      ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
      @foreach($products as $product)
        <div class="srv-reveal group bg-white rounded-2xl sm:rounded-3xl border border-[#0B332B]/10 p-5 sm:p-6 hover:border-[#F5850F]/40 hover:shadow-lg hover:shadow-[#0B332B]/8 transition-all duration-300">
          <div class="flex items-start gap-3.5 mb-4">
            <svg class="w-9 h-9 shrink-0 mt-0.5" style="color: {{ $product['bg'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
              @switch($product['icon'])
                @case('truck')
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m0 0V6.375c0-.621.504-1.125 1.125-1.125h9.75c.621 0 1.125.504 1.125 1.125v7.875m-12 0h12m0 0h1.875c.621 0 1.125-.504 1.125-1.125V11.25a2.25 2.25 0 00-.659-1.591l-2.475-2.475A2.25 2.25 0 0016.125 6.75H15"/>
                  @break
                @case('pump')
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 3h5a2 2 0 012 2v12a1 1 0 01-1 1H8a1 1 0 01-1-1V4a1 1 0 011-1z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 8h1.5A2.5 2.5 0 0119 10.5V13a1 1 0 01-1 1h-1"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7 18v2M14 18v2M6 21h10"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.5 7h2"/>
                  @break
                @case('flame')
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c0 3-2.5 4.5-2.5 7.5A2.5 2.5 0 0012 13a2.5 2.5 0 002.5-2.5C14.5 7.5 12 6 12 3z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 12.5c-1.5 1.2-2.5 3-2.5 5a6 6 0 0012 0c0-2-1-3.8-2.5-5"/>
                  @break
                @case('plane')
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.5 12.5l16.5-7-5.5 15-3.5-5.5-5.5-2.5z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 15l1.5 5.5"/>
                  @break
                @case('cylinder')
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 4.5h6"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10 4.5V6a1 1 0 01-1 1H8.5A2.5 2.5 0 006 9.5v8A2.5 2.5 0 008.5 20h7a2.5 2.5 0 002.5-2.5v-8A2.5 2.5 0 0015.5 7H15a1 1 0 01-1-1V4.5"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6M9 15.5h6"/>
                  @break
                @case('droplet')
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.5S6.5 9.2 6.5 13.5a5.5 5.5 0 0011 0C17.5 9.2 12 3.5 12 3.5z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10 14.5c.4 1.2 1.3 2 2.5 2"/>
                  @break
              @endswitch
            </svg>
            <div>
              <span class="text-[10px] font-black uppercase tracking-widest text-[#F5850F]">{{ $product['code'] }}</span>
              <h3 class="text-sm sm:text-base font-bold text-[#0B332B] leading-snug">{{ $product['name'] }}</h3>
            </div>
          </div>
          <p class="text-[13px] text-[#2A2A2A]/60 leading-relaxed">{{ $product['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════
     SERVICE FEATURES
══════════════════════════════════════════════════ --}}
<section class="bg-white py-14 sm:py-20 lg:py-24 border-t border-alms-green/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

      <div class="relative srv-reveal order-2 lg:order-1">
        <div class="rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl shadow-alms-green/20 border-4 border-white">
          <img src="https://images.pexels.com/photos/9739039/pexels-photo-9739039.jpeg?auto=compress&cs=tinysrgb&w=900&q=85"
               alt="Petroleum tanker fleet dispatch"
               class="w-full h-70 sm:h-95 lg:h-115 object-cover object-center" />
          <div class="absolute inset-0 bg-linear-to-t from-alms-green/50 to-transparent rounded-2xl sm:rounded-3xl"></div>
        </div>
        <div class="absolute -bottom-4 -right-2 sm:-right-6 z-10 flex items-center gap-3 bg-white px-4 py-3 rounded-2xl shadow-xl border border-alms-green/10">
          <div class="flex items-center justify-center w-9 h-9 rounded-xl bg-alms-orange/10">
            <svg class="w-4 h-4 text-alms-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <div>
            <p class="text-[10px] font-extrabold uppercase tracking-wider text-alms-orange">Quality Certified</p>
            <p class="text-xs font-black text-alms-green">Every batch tested</p>
          </div>
        </div>
      </div>

      <div class="order-1 lg:order-2 srv-reveal">
        <div class="flex items-center gap-2.5 mb-4">
          <div class="w-4 h-px bg-alms-orange"></div>
          <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-alms-orange">How We Deliver</span>
        </div>
        <h2 class="font-display font-bold text-alms-green leading-tight tracking-tight mb-8"
            style="font-size:clamp(1.7rem,3vw,2.6rem)">
          Supply you can<br/>count on — always.
        </h2>
        <div class="space-y-4">
          @foreach([
            ['Supply Volumes','From 5,000 L retail orders to 5M+ L industrial contracts. Flexible volume tiers structured around your operations.'],
            ['Quality Assurance','DPR-certified supply chain. Every product batch is lab-tested before dispatch — no shortcuts.'],
            ['Nationwide Coverage','Active supply routes in all 36 states and FCT. Same-day capability in Lagos, Abuja, Port Harcourt.'],
            ['Flexible Contracts','Spot supply, monthly retainer, or long-term trading agreements. We structure around your cash flow.'],
          ] as [$title,$desc])
            <div class="flex gap-4 p-4 sm:p-5 rounded-2xl bg-[#F8FAFC] border border-alms-green/8 hover:border-alms-orange/30 hover:bg-alms-orange/2 transition-all duration-200">
              <div class="w-1.5 bg-alms-orange rounded-full shrink-0 self-stretch min-h-10"></div>
              <div>
                <h3 class="text-sm font-bold text-alms-green mb-1">{{ $title }}</h3>
                <p class="text-[13px] text-alms-charcoal/60 leading-relaxed">{{ $desc }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════
     OTHER SERVICES STRIP
══════════════════════════════════════════════════ --}}
<section class="bg-[#F8FAFC] py-12 sm:py-16 border-t border-alms-green/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-alms-green/40 mb-6">Also Explore</p>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      @foreach([
        ['Logistics & Haulage','GPS-tracked fleet, nationwide delivery.',route('services.logistics')],
        ['Engineering Services','Installation, maintenance & HSE compliance.',route('services.engineering')],
        ['Energy Infrastructure','Tank farms, depots & filling stations.',route('services.infrastructure')],
      ] as [$t,$s,$r])
        <a href="{{ $r }}" class="group flex items-center justify-between gap-4 p-4 sm:p-5 rounded-2xl bg-white border border-alms-green/8 hover:border-alms-orange/40 hover:shadow-md transition-all duration-200">
          <div>
            <h3 class="text-sm font-bold text-alms-green group-hover:text-alms-orange transition-colors">{{ $t }}</h3>
            <p class="text-[12px] text-alms-charcoal/50 mt-0.5">{{ $s }}</p>
          </div>
          <svg class="w-4 h-4 text-alms-green/30 group-hover:text-alms-orange group-hover:translate-x-1 transition-all duration-200 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </a>
      @endforeach
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════
     CTA BANNER
══════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-alms-green py-14 sm:py-20">
  <div class="absolute top-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-alms-orange/10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 w-48 sm:w-72 h-48 sm:h-72 bg-white/3 rounded-full blur-3xl pointer-events-none"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
      <div>
        <p class="text-[10px] font-bold uppercase tracking-[0.28em] text-alms-orange mb-3">Ready to Start?</p>
        <h2 class="font-display font-bold text-white leading-tight" style="font-size:clamp(1.7rem,3.5vw,3rem)">
          Discuss a supply contract<br class="hidden sm:block"/>with our team today.
        </h2>
      </div>
      <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0 self-center lg:self-auto">
        <button data-open-quote="Petroleum Supply & Trading"
                class="group inline-flex items-center justify-center gap-3 bg-alms-orange hover:bg-[#e07708] text-white font-bold text-xs sm:text-sm uppercase tracking-wide pl-6 pr-5 py-4 rounded-full shadow-xl shadow-alms-orange/20 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
          Request a Quote
          <span class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </span>
        </button>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-white/20 text-white font-bold text-xs sm:text-sm uppercase tracking-wide hover:bg-white/10 transition-all duration-200">
          Contact Us
        </a>
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
(function(){
  var style=document.createElement('style');
  style.textContent='.srv-reveal{opacity:0;transform:translateY(24px);transition:opacity 0.6s cubic-bezier(.22,1,.36,1),transform 0.6s cubic-bezier(.22,1,.36,1)}.srv-reveal.is-visible{opacity:1;transform:translateY(0)}';
  document.head.appendChild(style);
  if('IntersectionObserver' in window){
    var ro=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('is-visible');ro.unobserve(e.target);}});},{threshold:0.1,rootMargin:'0px 0px -30px 0px'});
    document.querySelectorAll('.srv-reveal').forEach(function(el,i){el.style.transitionDelay=(i%3)*0.07+'s';ro.observe(el);});
  } else { document.querySelectorAll('.srv-reveal').forEach(function(el){el.classList.add('is-visible');}); }
}());
</script>
@endpush
