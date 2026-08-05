@extends('layouts.app')
@section('title', 'Petroleum Supply & Trading | Alms Oil Nigeria Limited')
@section('description', 'Reliable bulk supply of AGO, PMS, DPK, Jet A-1, LPG and specialty products from certified depots across all 36 Nigerian states. NMDPRA licensed.')

@section('content')

{{-- ══════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-[#0B332B]" style="min-height:82vh">

  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?w=1600&q=80&auto=format&fit=crop"
         alt="Petroleum storage tanks"
         class="w-full h-full object-cover object-center"
         style="filter:saturate(0.65) brightness(0.4) contrast(1.1)" />
    <div class="absolute inset-0"
         style="background:linear-gradient(135deg,rgba(11,51,43,0.88) 0%,rgba(11,51,43,0.5) 55%,rgba(11,51,43,0.72) 100%)"></div>
  </div>

  <div class="absolute inset-0 z-[1] pointer-events-none opacity-[0.15]"
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
          <div class="w-5 h-px bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold tracking-[0.32em] uppercase text-[#F5850F]">01 — Our Services</span>
        </div>
        <h1 class="font-display font-bold text-white leading-[0.9] tracking-tight mb-6 sm:mb-8"
            style="font-size:clamp(2.6rem,6vw,5.5rem)">
          Petroleum<br/>Supply &amp;<br/>
          <span style="color:#F5850F">Trading.</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base lg:text-lg leading-relaxed mb-7 sm:mb-8 max-w-lg">
          NMDPRA-licensed bulk supply of AGO, PMS, DPK, Jet A-1, LPG, and specialty products from certified depots across all 36 Nigerian states.
        </p>
        <div class="flex flex-col sm:flex-row gap-3">
          <button data-open-quote="Petroleum Supply & Trading"
                  class="group inline-flex items-center justify-center gap-3 bg-[#F5850F] hover:bg-[#e07708] text-white
                         font-bold text-xs sm:text-sm uppercase tracking-wide
                         pl-6 pr-5 py-4 rounded-full shadow-xl shadow-[#F5850F]/30
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
          <p class="text-white/75 text-sm sm:text-base leading-relaxed">
            We connect industrial consumers, retailers, and government entities to certified petroleum products — backed by a robust logistics network and strict quality assurance at every stage.
          </p>
        </div>
        <div class="grid grid-cols-3 gap-3">
          @foreach([['9+','Product Types',true],['850M+','Litres Supplied',false],['36','States Active',true]] as [$v,$l,$orange])
            <div class="backdrop-blur-md {{ $orange ? 'bg-[#F5850F]/15 border-[#F5850F]/25' : 'bg-white/8 border-white/12' }} border rounded-2xl px-3 py-4 text-center">
              <p class="font-display font-black text-white leading-none mb-1" style="font-size:clamp(1.3rem,2.2vw,1.75rem)">{{ $v }}</p>
              <p class="text-[9px] font-bold uppercase tracking-[0.18em] {{ $orange ? 'text-[#F5850F]/70' : 'text-white/40' }}">{{ $l }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="border-t border-white/8 py-5 flex flex-wrap items-center gap-x-8 gap-y-2">
      @foreach(['NMDPRA Licensed','DPR Certified','ISO 9001:2015','PIA 2021 Compliant'] as $cert)
        <div class="flex items-center gap-2">
          <div class="w-1 h-1 rounded-full bg-[#F5850F]"></div>
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
          <div class="w-4 h-px bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-[#F5850F]">Product Range</span>
        </div>
        <h2 class="font-display font-bold text-[#0B332B] leading-tight tracking-tight"
            style="font-size:clamp(1.8rem,3.5vw,3rem)">What We Supply</h2>
      </div>
      <p class="text-sm text-[#2A2A2A]/55 max-w-xs sm:text-right leading-relaxed">
        All products sourced directly from NNPC and certified private depot networks.
      </p>
    </div>

    @php
      $products = [
        ['AGO','Automotive Gas Oil','Diesel fuel for trucks, generators, and industrial equipment. Multiple grade specifications.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>',
         'bg-[#0B332B]'],
        ['PMS','Premium Motor Spirit','High-quality petrol for private and commercial vehicles. Pump-ready supply.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>',
         'bg-[#F5850F]'],
        ['DPK','Dual Purpose Kerosene','Household and industrial kerosene. Clean-burning specification.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>',
         'bg-[#0B332B]'],
        ['ATK / Jet A-1','Aviation Turbine Kerosene','Aviation-grade fuel for private and commercial aircraft. Strict purity standards.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>',
         'bg-[#F5850F]'],
        ['LPG','Liquefied Petroleum Gas','Cylinder and bulk LPG for domestic, commercial, and industrial use.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>',
         'bg-[#0B332B]'],
        ['Lubricants','Specialty & Industrial Oils','Engine oils, hydraulic fluids, and specialty lubricants for industrial assets.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>',
         'bg-[#F5850F]'],
      ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
      @foreach($products as [$code,$name,$desc,$svgPath,$bg])
        <div class="srv-reveal group bg-white rounded-2xl sm:rounded-3xl border border-[#0B332B]/8 p-5 sm:p-6 hover:border-[#F5850F]/40 hover:shadow-lg hover:shadow-[#0B332B]/8 transition-all duration-300">
          <div class="flex items-start gap-4 mb-4">
            <div class="{{ $bg }} w-11 h-11 rounded-xl flex items-center justify-center shrink-0">
              <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">{!! $svgPath !!}</svg>
            </div>
            <div>
              <span class="text-[10px] font-black uppercase tracking-widest text-[#F5850F]">{{ $code }}</span>
              <h3 class="text-sm sm:text-base font-bold text-[#0B332B] leading-snug">{{ $name }}</h3>
            </div>
          </div>
          <p class="text-[13px] text-[#2A2A2A]/60 leading-relaxed">{{ $desc }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════
     SERVICE FEATURES
══════════════════════════════════════════════════ --}}
<section class="bg-white py-14 sm:py-20 lg:py-24 border-t border-[#0B332B]/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

      <div class="relative srv-reveal order-2 lg:order-1">
        <div class="rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl shadow-[#0B332B]/20 border-4 border-white">
          <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=900&q=85&auto=format&fit=crop"
               alt="Petroleum tanker fleet dispatch"
               class="w-full h-[280px] sm:h-[380px] lg:h-[460px] object-cover object-center" />
          <div class="absolute inset-0 bg-gradient-to-t from-[#0B332B]/50 to-transparent rounded-2xl sm:rounded-3xl"></div>
        </div>
        <div class="absolute -bottom-4 -right-2 sm:-right-6 z-10 flex items-center gap-3 bg-white px-4 py-3 rounded-2xl shadow-xl border border-[#0B332B]/10">
          <div class="flex items-center justify-center w-9 h-9 rounded-xl bg-[#F5850F]/10">
            <svg class="w-4 h-4 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <div>
            <p class="text-[10px] font-extrabold uppercase tracking-wider text-[#F5850F]">Quality Certified</p>
            <p class="text-xs font-black text-[#0B332B]">Every batch tested</p>
          </div>
        </div>
      </div>

      <div class="order-1 lg:order-2 srv-reveal">
        <div class="flex items-center gap-2.5 mb-4">
          <div class="w-4 h-px bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-[#F5850F]">How We Deliver</span>
        </div>
        <h2 class="font-display font-bold text-[#0B332B] leading-tight tracking-tight mb-8"
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
            <div class="flex gap-4 p-4 sm:p-5 rounded-2xl bg-[#F8FAFC] border border-[#0B332B]/8 hover:border-[#F5850F]/30 hover:bg-[#F5850F]/[0.02] transition-all duration-200">
              <div class="w-1.5 bg-[#F5850F] rounded-full shrink-0 self-stretch min-h-[40px]"></div>
              <div>
                <h3 class="text-sm font-bold text-[#0B332B] mb-1">{{ $title }}</h3>
                <p class="text-[13px] text-[#2A2A2A]/60 leading-relaxed">{{ $desc }}</p>
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
<section class="bg-[#F8FAFC] py-12 sm:py-16 border-t border-[#0B332B]/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#0B332B]/40 mb-6">Also Explore</p>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      @foreach([
        ['Logistics & Haulage','GPS-tracked fleet, nationwide delivery.',route('services.logistics')],
        ['Engineering Services','Installation, maintenance & HSE compliance.',route('services.engineering')],
        ['Energy Infrastructure','Tank farms, depots & filling stations.',route('services.infrastructure')],
      ] as [$t,$s,$r])
        <a href="{{ $r }}" class="group flex items-center justify-between gap-4 p-4 sm:p-5 rounded-2xl bg-white border border-[#0B332B]/8 hover:border-[#F5850F]/40 hover:shadow-md transition-all duration-200">
          <div>
            <h3 class="text-sm font-bold text-[#0B332B] group-hover:text-[#F5850F] transition-colors">{{ $t }}</h3>
            <p class="text-[12px] text-[#2A2A2A]/50 mt-0.5">{{ $s }}</p>
          </div>
          <svg class="w-4 h-4 text-[#0B332B]/30 group-hover:text-[#F5850F] group-hover:translate-x-1 transition-all duration-200 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </a>
      @endforeach
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════
     CTA BANNER
══════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-[#0B332B] py-14 sm:py-20">
  <div class="absolute top-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-[#F5850F]/10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 w-48 sm:w-72 h-48 sm:h-72 bg-white/3 rounded-full blur-3xl pointer-events-none"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
      <div>
        <p class="text-[10px] font-bold uppercase tracking-[0.28em] text-[#F5850F] mb-3">Ready to Start?</p>
        <h2 class="font-display font-bold text-white leading-tight" style="font-size:clamp(1.7rem,3.5vw,3rem)">
          Discuss a supply contract<br class="hidden sm:block"/>with our team today.
        </h2>
      </div>
      <div class="flex flex-col sm:flex-row gap-3 shrink-0">
        <button data-open-quote="Petroleum Supply & Trading"
                class="group inline-flex items-center justify-center gap-3 bg-[#F5850F] hover:bg-[#e07708] text-white font-bold text-xs sm:text-sm uppercase tracking-wide pl-6 pr-5 py-4 rounded-full shadow-xl shadow-[#F5850F]/20 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
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
