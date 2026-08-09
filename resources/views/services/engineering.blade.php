@extends('layouts.app')
@section('title', 'Engineering & Industrial Services | Alms Oil Nigeria Limited')
@section('description', 'Technical engineering services for the petroleum and energy sector — equipment installation, HSE compliance, pipeline integrity, and industrial fabrication across Nigeria.')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden bg-alms-green" style="min-height:82vh">
  <div class="absolute inset-0 z-0">
    <img src="https://images.pexels.com/photos/7155795/pexels-photo-7155795.jpeg?auto=compress&cs=tinysrgb&w=1600&q=85"
         alt="Industrial engineer at work"
         class="w-full h-full object-cover object-center"
         style="filter:saturate(0.6) brightness(0.38) contrast(1.1)" />
    <div class="absolute inset-0" style="background:linear-gradient(135deg,rgba(11,51,43,0.9) 0%,rgba(11,51,43,0.48) 55%,rgba(11,51,43,0.72) 100%)"></div>
  </div>
  <div class="absolute inset-0 z-1 pointer-events-none opacity-[0.15]"
       style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 flex flex-col justify-between" style="min-height:82vh">
    <div class="pt-8 sm:pt-10 flex items-center gap-2 text-[11px] text-white/40 font-medium flex-wrap">
      <a href="{{ route('home') }}" class="hover:text-white/70 transition-colors">Home</a>
      <span>/</span>
      <a href="{{ route('home') }}#services" class="hover:text-white/70 transition-colors">Services</a>
      <span>/</span>
      <span class="text-white/65">Engineering &amp; Industrial</span>
    </div>

    <div class="py-10 sm:py-14 lg:py-16 grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-end">
      <div>
        <div class="flex items-center gap-2.5 mb-5 sm:mb-6">
          <div class="w-5 h-px bg-alms-orange"></div>
          <span class="text-[10px] font-bold tracking-[0.32em] uppercase text-alms-orange">03 — Our Services</span>
        </div>
        <h1 class="font-display font-bold text-white leading-[0.9] tracking-tight mb-6 sm:mb-8"
            style="font-size:clamp(2.6rem,6vw,5.5rem)">
          Engineering<br/>&amp; Industrial<br/><span style="color:#F5850F">Services.</span>
        </h1>
        <p class="text-white text-sm sm:text-base lg:text-lg leading-relaxed mb-7 sm:mb-8 max-w-lg">
          End-to-end technical services for the energy sector — equipment installation, safety audits, pipeline integrity checks, and industrial maintenance across Nigeria.
        </p>
        <div class="flex flex-col sm:flex-row gap-3">
          <button data-open-quote="Engineering & Industrial Services"
                  class="group inline-flex items-center justify-center gap-3 bg-alms-orange hover:bg-[#e07708] text-white font-bold text-xs sm:text-sm uppercase tracking-wide pl-6 pr-5 py-4 rounded-full shadow-xl shadow-alms-orange/30 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
            Submit an Enquiry
            <span class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </span>
          </button>
          <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-white/25 text-white font-bold text-xs sm:text-sm uppercase tracking-wide hover:bg-white/10 transition-all duration-200">
            Talk to Our Engineers
          </a>
        </div>
      </div>
      <div class="space-y-3">
        <div class="backdrop-blur-md bg-white/8 border border-white/15 rounded-3xl p-5 sm:p-6">
          <p class="text-white text-sm sm:text-base leading-relaxed">
            Our certified engineers deliver turnkey technical solutions for petroleum facilities — from first installation through to long-term maintenance and HSE compliance management.
          </p>
        </div>
        <div class="grid grid-cols-3 gap-3">
          @foreach([['HSE','Certified Team',true],['DPR','Inspection Ready',false],['ISO','9001:2015',true]] as [$v,$l,$orange])
            <div class="backdrop-blur-md {{ $orange ? 'bg-alms-orange/15 border-alms-orange/25' : 'bg-white/8 border-white/12' }} border rounded-2xl px-3 py-4 text-center">
              <p class="font-display font-black text-white leading-none mb-1" style="font-size:clamp(1.2rem,2.2vw,1.75rem)">{{ $v }}</p>
              <p class="text-[9px] font-bold uppercase tracking-[0.18em] {{ $orange ? 'text-alms-orange/70' : 'text-white/40' }}">{{ $l }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="border-t border-white/8 py-5 flex flex-wrap items-center gap-x-8 gap-y-2">
      @foreach(['HSE Certified','DPR Licensed','Trained Technicians','24hr Emergency Call-out'] as $cert)
        <div class="flex items-center gap-2">
          <div class="w-1 h-1 rounded-full bg-alms-orange"></div>
          <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40">{{ $cert }}</span>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- SERVICES GRID --}}
<section class="bg-[#F8FAFC] py-14 sm:py-20 lg:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-14">
      <div>
        <div class="flex items-center gap-2.5 mb-3">
          <div class="w-4 h-px bg-alms-orange"></div>
          <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-alms-orange">What We Do</span>
        </div>
        <h2 class="font-display font-bold text-alms-green leading-tight tracking-tight" style="font-size:clamp(1.8rem,3.5vw,3rem)">Engineering Capabilities</h2>
      </div>
      <p class="text-sm text-alms-charcoal/55 max-w-xs sm:text-right leading-relaxed">Technical expertise covering the full lifecycle of petroleum assets.</p>
    </div>

    @php
      $services = [
        ['Installation & Commissioning','Pump stations, dispensers, flow meters, and tank instrumentation — supply, delivery, and full installation.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>',
         'bg-alms-green'],
        ['Maintenance & Repairs','Scheduled preventive maintenance contracts and emergency call-out for all energy infrastructure assets.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>',
         'bg-alms-orange'],
        ['Safety & HSE Compliance','Site HSE audits, DPR inspection readiness, fire suppression systems, and spill containment solutions.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
         'bg-alms-green'],
        ['Pipeline Integrity','Pipeline inspection, leak detection, cathodic protection, and structural integrity assessment services.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>',
         'bg-alms-orange'],
        ['Electrical & Instrumentation','Power distribution panels, ATEX-rated electrical systems, and process instrumentation for hazardous zones.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
         'bg-alms-green'],
        ['Industrial Procurement','OEM and equivalent spare parts supply for energy infrastructure — sourced, verified, and delivered fast.',
         '<path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>',
         'bg-alms-orange'],
      ];
    @endphp
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
      @foreach($services as [$title,$desc,$svgPath,$bg])
        <div class="srv-reveal group bg-white rounded-2xl sm:rounded-3xl border border-alms-green/8 p-5 sm:p-6 hover:border-alms-orange/40 hover:shadow-lg hover:shadow-alms-green/8 transition-all duration-300">
          <div class="flex items-start gap-4 mb-4">
            <div class="{{ $bg }} w-11 h-11 rounded-xl flex items-center justify-center shrink-0">
              <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">{!! $svgPath !!}</svg>
            </div>
            <h3 class="text-sm sm:text-base font-bold text-alms-green leading-snug self-center">{{ $title }}</h3>
          </div>
          <p class="text-[13px] text-alms-charcoal/60 leading-relaxed">{{ $desc }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- FEATURE SPLIT --}}
<section class="bg-white py-14 sm:py-20 lg:py-24 border-t border-alms-green/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
      <div class="srv-reveal">
        <div class="flex items-center gap-2.5 mb-4">
          <div class="w-4 h-px bg-alms-orange"></div>
          <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-alms-orange">Our Approach</span>
        </div>
        <h2 class="font-display font-bold text-alms-green leading-tight tracking-tight mb-8" style="font-size:clamp(1.7rem,3vw,2.6rem)">
          Safety-first engineering<br/>on every project.
        </h2>
        <div class="space-y-4">
          @foreach([
            ['Site Assessment','Every project starts with a full on-site evaluation — identifying hazards, requirements, and optimal technical approach before any work begins.'],
            ['Certified Execution','All works carried out by DPR-certified engineers with active HSE protocols. Zero-compromise on safety standards.'],
            ['Commissioning & Handover','Full system testing, operator training, and documentation package delivered at project completion.'],
            ['Post-Completion Support','Optional long-term maintenance contracts ensure your assets remain in peak operational condition.'],
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

      <div class="relative srv-reveal">
        <div class="rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl shadow-alms-green/20 border-4 border-white">
          <img src="https://images.pexels.com/photos/8487999/pexels-photo-8487999.jpeg?auto=compress&cs=tinysrgb&w=900&q=85"
               alt="Engineering team at petroleum facility"
               class="w-full h-70 sm:h-95 lg:h-115 object-cover object-center" />
          <div class="absolute inset-0 bg-linear-to-t from-alms-green/40 to-transparent rounded-2xl sm:rounded-3xl"></div>
        </div>
        <div class="absolute -bottom-4 -left-2 sm:-left-6 z-10 flex items-center gap-3 bg-white px-4 py-3 rounded-2xl shadow-xl border border-alms-green/10">
          <div class="flex items-center justify-center w-9 h-9 rounded-xl bg-alms-green/8">
            <svg class="w-4 h-4 text-alms-green" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <div>
            <p class="text-[10px] font-extrabold uppercase tracking-wider text-alms-orange">24hr Response</p>
            <p class="text-xs font-black text-alms-green">Emergency call-out ready</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- OTHER SERVICES --}}
<section class="bg-[#F8FAFC] py-12 sm:py-16 border-t border-alms-green/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-alms-green/40 mb-6">Also Explore</p>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      @foreach([
        ['Petroleum Supply','AGO, PMS, DPK & specialty products.',route('services.petroleum')],
        ['Logistics & Haulage','GPS-tracked fleet, nationwide delivery.',route('services.logistics')],
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

{{-- CTA --}}
<section class="relative overflow-hidden bg-alms-green py-14 sm:py-20">
  <div class="absolute top-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-alms-orange/10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 w-48 sm:w-72 h-48 sm:h-72 bg-white/3 rounded-full blur-3xl pointer-events-none"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
      <div>
        <p class="text-[10px] font-bold uppercase tracking-[0.28em] text-alms-orange mb-3">Engineering Enquiry?</p>
        <h2 class="font-display font-bold text-white leading-tight" style="font-size:clamp(1.7rem,3.5vw,3rem)">
          Let's scope your project<br class="hidden sm:block"/>with our technical team.
        </h2>
      </div>
      <div class="flex flex-col sm:flex-row gap-3 shrink-0">
        <button data-open-quote="Engineering & Industrial Services"
                class="group inline-flex items-center justify-center gap-3 bg-alms-orange hover:bg-[#e07708] text-white font-bold text-xs sm:text-sm uppercase tracking-wide pl-6 pr-5 py-4 rounded-full shadow-xl shadow-alms-orange/20 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
          Submit Enquiry
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
