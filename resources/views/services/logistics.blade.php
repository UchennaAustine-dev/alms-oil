@extends('layouts.app')
@section('title', 'Logistics & Fleet Haulage | Alms Oil Nigeria Limited')
@section('description', 'GPS-tracked petroleum haulage across all 36 Nigerian states. End-to-end depot-to-site delivery with 24/7 dispatch coordination for high-volume clients.')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden bg-[#0B332B]" style="min-height:82vh">
  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=1600&q=80&auto=format&fit=crop"
         alt="Petroleum tanker truck on highway"
         class="w-full h-full object-cover object-center"
         style="filter:saturate(0.65) brightness(0.38) contrast(1.1)" />
    <div class="absolute inset-0" style="background:linear-gradient(135deg,rgba(11,51,43,0.9) 0%,rgba(11,51,43,0.48) 55%,rgba(11,51,43,0.72) 100%)"></div>
  </div>
  <div class="absolute inset-0 z-[1] pointer-events-none opacity-[0.15]"
       style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 flex flex-col justify-between" style="min-height:82vh">
    <div class="pt-8 sm:pt-10 flex items-center gap-2 text-[11px] text-white/40 font-medium flex-wrap">
      <a href="{{ route('home') }}" class="hover:text-white/70 transition-colors">Home</a>
      <span>/</span>
      <a href="{{ route('home') }}#services" class="hover:text-white/70 transition-colors">Services</a>
      <span>/</span>
      <span class="text-white/65">Logistics &amp; Haulage</span>
    </div>

    <div class="py-10 sm:py-14 lg:py-16 grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-end">
      <div>
        <div class="flex items-center gap-2.5 mb-5 sm:mb-6">
          <div class="w-5 h-px bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold tracking-[0.32em] uppercase text-[#F5850F]">02 — Our Services</span>
        </div>
        <h1 class="font-display font-bold text-white leading-[0.9] tracking-tight mb-6 sm:mb-8"
            style="font-size:clamp(2.6rem,6vw,5.5rem)">
          Logistics &amp;<br/>Fleet<br/><span style="color:#F5850F">Haulage.</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base lg:text-lg leading-relaxed mb-7 sm:mb-8 max-w-lg">
          End-to-end petroleum haulage across Nigeria's 36 states. GPS-tracked tankers, depot-to-site delivery, and dedicated account management for high-volume clients.
        </p>
        <div class="flex flex-col sm:flex-row gap-3">
          <button data-open-quote="Logistics & Fleet Haulage"
                  class="group inline-flex items-center justify-center gap-3 bg-[#F5850F] hover:bg-[#e07708] text-white font-bold text-xs sm:text-sm uppercase tracking-wide pl-6 pr-5 py-4 rounded-full shadow-xl shadow-[#F5850F]/30 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
            Get a Haulage Quote
            <span class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </span>
          </button>
          <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-white/25 text-white font-bold text-xs sm:text-sm uppercase tracking-wide hover:bg-white/10 transition-all duration-200">
            Talk to Our Team
          </a>
        </div>
      </div>

      <div class="space-y-3">
        <div class="backdrop-blur-md bg-white/8 border border-white/15 rounded-3xl p-5 sm:p-6">
          <p class="text-white/75 text-sm sm:text-base leading-relaxed">
            Our fleet operates round-the-clock, ensuring your fuel supply chain never stops — whether you need a single mini-tanker or a multi-truck convoy for large industrial operations.
          </p>
        </div>
        <div class="grid grid-cols-3 gap-3">
          @foreach([['24/7','Dispatch Ready',true],['36','States Covered',false],['500K+','Litres per Run',true]] as [$v,$l,$orange])
            <div class="backdrop-blur-md {{ $orange ? 'bg-[#F5850F]/15 border-[#F5850F]/25' : 'bg-white/8 border-white/12' }} border rounded-2xl px-3 py-4 text-center">
              <p class="font-display font-black text-white leading-none mb-1" style="font-size:clamp(1.2rem,2.2vw,1.75rem)">{{ $v }}</p>
              <p class="text-[9px] font-bold uppercase tracking-[0.18em] {{ $orange ? 'text-[#F5850F]/70' : 'text-white/40' }}">{{ $l }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="border-t border-white/8 py-5 flex flex-wrap items-center gap-x-8 gap-y-2">
      @foreach(['GPS Live Tracking','FRSC Compliant Fleet','Certified Drivers','Real-time ETAs'] as $cert)
        <div class="flex items-center gap-2">
          <div class="w-1 h-1 rounded-full bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40">{{ $cert }}</span>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- CAPABILITIES GRID --}}
<section class="bg-[#F8FAFC] py-14 sm:py-20 lg:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-14">
      <div>
        <div class="flex items-center gap-2.5 mb-3">
          <div class="w-4 h-px bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-[#F5850F]">Fleet Capabilities</span>
        </div>
        <h2 class="font-display font-bold text-[#0B332B] leading-tight tracking-tight" style="font-size:clamp(1.8rem,3.5vw,3rem)">Built for Nigeria's Roads</h2>
      </div>
      <p class="text-sm text-[#2A2A2A]/55 max-w-xs sm:text-right leading-relaxed">From Lagos to Maiduguri — we cover every route, every time.</p>
    </div>

    @php
      $caps = [
        ['GPS Fleet Tracking','Real-time visibility on every tanker. Live ETAs and delivery confirmation from loading point to final site.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>',
         'bg-[#0B332B]'],
        ['Nationwide Routes','Active haulage in all 36 states and FCT. Same-day dispatch in Lagos, Abuja, and Port Harcourt.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>',
         'bg-[#F5850F]'],
        ['24/7 Operations','Round-the-clock dispatch coordination and emergency supply capability for critical industrial operations.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>',
         'bg-[#0B332B]'],
        ['Volume Flexibility','Mini tankers (10,000 L) to bulk multi-truck convoys (500,000+ L). Structured for any scale.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>',
         'bg-[#F5850F]'],
        ['Dedicated Account Manager','A single point of contact who knows your routes, your schedule, and your compliance requirements.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>',
         'bg-[#0B332B]'],
        ['Safety & Compliance','FRSC-compliant fleet, certified drivers, and mandatory HSE protocols on every delivery run.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
         'bg-[#F5850F]'],
      ];
    @endphp
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
      @foreach($caps as [$title,$desc,$svgPath,$bg])
        <div class="srv-reveal group bg-white rounded-2xl sm:rounded-3xl border border-[#0B332B]/8 p-5 sm:p-6 hover:border-[#F5850F]/40 hover:shadow-lg hover:shadow-[#0B332B]/8 transition-all duration-300">
          <div class="flex items-start gap-4 mb-4">
            <div class="{{ $bg }} w-11 h-11 rounded-xl flex items-center justify-center shrink-0">
              <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">{!! $svgPath !!}</svg>
            </div>
            <h3 class="text-sm sm:text-base font-bold text-[#0B332B] leading-snug self-center">{{ $title }}</h3>
          </div>
          <p class="text-[13px] text-[#2A2A2A]/60 leading-relaxed">{{ $desc }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- HOW IT WORKS --}}
<section class="bg-white py-14 sm:py-20 lg:py-24 border-t border-[#0B332B]/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="text-center mb-10 sm:mb-14">
      <div class="flex items-center justify-center gap-2.5 mb-3">
        <div class="w-4 h-px bg-[#F5850F]"></div>
        <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-[#F5850F]">The Process</span>
        <div class="w-4 h-px bg-[#F5850F]"></div>
      </div>
      <h2 class="font-display font-bold text-[#0B332B] tracking-tight" style="font-size:clamp(1.7rem,3vw,2.6rem)">From Order to Delivery</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 relative">
      <div class="hidden lg:block absolute top-8 left-[12.5%] right-[12.5%] h-px bg-[#0B332B]/8 z-0"></div>
      @foreach([
        ['01','Submit Request','Use our quote form or call directly to specify product, volume, and delivery location.'],
        ['02','Route Planning','Our logistics team plans the optimal route and assigns a GPS-enabled tanker to your order.'],
        ['03','Loading & Dispatch','Product is loaded from a certified depot, sealed, and dispatched with real-time tracking active.'],
        ['04','Delivery & Sign-off','Your team receives delivery at site. Certificate of delivery and quantity slip issued on arrival.'],
      ] as [$num,$title,$desc])
        <div class="srv-reveal relative z-10 flex flex-col items-center text-center sm:items-start sm:text-left lg:items-center lg:text-center">
          <div class="w-16 h-16 rounded-2xl bg-[#0B332B] text-white flex flex-col items-center justify-center mb-4 shrink-0 shadow-lg">
            <span class="text-[9px] font-black uppercase tracking-widest text-[#F5850F]">Step</span>
            <span class="text-xl font-black leading-none">{{ $num }}</span>
          </div>
          <h3 class="text-sm sm:text-base font-bold text-[#0B332B] mb-2">{{ $title }}</h3>
          <p class="text-[13px] text-[#2A2A2A]/55 leading-relaxed">{{ $desc }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- OTHER SERVICES --}}
<section class="bg-[#F8FAFC] py-12 sm:py-16 border-t border-[#0B332B]/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#0B332B]/40 mb-6">Also Explore</p>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      @foreach([
        ['Petroleum Supply','AGO, PMS, DPK & specialty products.',route('services.petroleum')],
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

{{-- CTA --}}
<section class="relative overflow-hidden bg-[#0B332B] py-14 sm:py-20">
  <div class="absolute top-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-[#F5850F]/10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 w-48 sm:w-72 h-48 sm:h-72 bg-white/3 rounded-full blur-3xl pointer-events-none"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
      <div>
        <p class="text-[10px] font-bold uppercase tracking-[0.28em] text-[#F5850F] mb-3">Need a Logistics Partner?</p>
        <h2 class="font-display font-bold text-white leading-tight" style="font-size:clamp(1.7rem,3.5vw,3rem)">
          Reliable haulage starts<br class="hidden sm:block"/>with a single call.
        </h2>
      </div>
      <div class="flex flex-col sm:flex-row gap-3 shrink-0">
        <button data-open-quote="Logistics & Fleet Haulage"
                class="group inline-flex items-center justify-center gap-3 bg-[#F5850F] hover:bg-[#e07708] text-white font-bold text-xs sm:text-sm uppercase tracking-wide pl-6 pr-5 py-4 rounded-full shadow-xl shadow-[#F5850F]/20 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
          Get a Quote
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
    document.querySelectorAll('.srv-reveal').forEach(function(el,i){el.style.transitionDelay=(i%4)*0.07+'s';ro.observe(el);});
  } else { document.querySelectorAll('.srv-reveal').forEach(function(el){el.classList.add('is-visible');}); }
}());
</script>
@endpush
