@extends('layouts.app')
@section('title', 'Petroleum Supply & Trading | Alms Oil Nigeria Limited')

@section('content')

<div class="border-b border-[#efefef]">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-5 flex items-center gap-2 text-[13px] text-[#999]">
    <a href="{{ route('home') }}" class="hover:text-[#C8922A] transition-colors">Home</a>
    <span>/</span>
    <span class="text-[#0f0f0f]">Petroleum Supply &amp; Trading</span>
  </div>
</div>

<section class="py-16 sm:py-24 bg-white">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
      <div>
        <div class="flex items-center gap-3 mb-6">
          <div class="w-8 h-px bg-[#C8922A]"></div>
          <span class="text-[11px] font-semibold tracking-[0.2em] uppercase text-[#C8922A]">01 — Our Services</span>
        </div>
        <h1 class="font-display font-bold text-[#0f0f0f] leading-[1.05] tracking-tight mb-6"
            style="font-size:clamp(2rem,4vw,3.25rem)">Petroleum Supply &amp; Trading</h1>
        <p class="text-[#555] text-base sm:text-lg leading-relaxed mb-8 max-w-lg">
          Reliable sourcing and supply of AGO, PMS, DPK, Jet A-1, LPG, and specialty products from certified depots across Nigeria. Bulk supply, retail distribution, and long-term trading contracts.
        </p>
        <button data-open-quote="Petroleum Supply & Trading"
                class="flex items-center gap-2 px-7 py-3.5 text-sm font-semibold bg-[#C8922A] text-white rounded-sm hover:bg-[#b07d22] transition-colors">
          Request a Quote
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
        </button>
      </div>
      <div class="space-y-6">
        @foreach([
          ['Product Range','AGO, PMS, DPK, LPG, and specialty lubricants. We source from NNPC and private depot networks.'],
          ['Supply Volumes','From 5,000 litres retail to 5M+ litre industrial contracts. Flexible volume tiers.'],
          ['Quality Assurance','DPR-certified supply chain. Every product batch is quality-tested before dispatch.'],
          ['Nationwide Coverage','Active supply routes covering all 36 states and FCT, with same-day capability in Lagos and Abuja.'],
        ] as [$title,$desc])
          <div class="flex gap-4 p-6 border border-[#efefef] hover:border-[#C8922A]/30 transition-colors">
            <div class="w-1 bg-[#C8922A] shrink-0 rounded-full"></div>
            <div>
              <h3 class="text-[13px] font-bold text-[#0f0f0f] mb-1">{{ $title }}</h3>
              <p class="text-[#777] text-[13px] leading-relaxed">{{ $desc }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<section class="bg-[#C8922A] py-16 sm:py-20">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
      <h2 class="font-display font-bold text-white leading-[1.05]" style="font-size:clamp(1.75rem,3vw,2.75rem)">
        Ready to discuss a supply contract?
      </h2>
      <div class="flex flex-wrap gap-4">
        <button data-open-quote="Petroleum Supply & Trading"
                class="flex items-center gap-2 px-7 py-3.5 text-sm font-semibold bg-white text-[#C8922A] rounded-sm hover:bg-white/90 transition-colors">
          Request a Quote
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
        </button>
        <a href="{{ route('contact') }}" class="flex items-center gap-2 px-7 py-3.5 text-sm font-semibold border border-white/40 text-white rounded-sm hover:bg-white/10 transition-colors">Contact Us</a>
      </div>
    </div>
  </div>
</section>

@endsection
