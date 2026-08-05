@extends('layouts.app')
@section('title', 'HSE Policy | Alms Oil Nigeria Limited')
@section('description', 'Alms Oil Nigeria Limited\'s commitment to Health, Safety and Environmental performance across all operations.')

@section('content')

<section class="bg-white border-b border-[#0B332B]/8 pt-10 sm:pt-14 pb-10 sm:pb-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex items-center gap-2 text-[11px] text-[#2A2A2A]/40 font-medium mb-8 flex-wrap">
      <a href="{{ route('home') }}" class="hover:text-[#F5850F] transition-colors">Home</a>
      <span>/</span>
      <span class="text-[#2A2A2A]/70">HSE Policy</span>
    </div>
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 max-w-5xl">
      <div>
        <div class="flex items-center gap-2.5 mb-4">
          <div class="w-4 h-px bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold tracking-[0.32em] uppercase text-[#F5850F]">Legal &amp; Compliance</span>
        </div>
        <h1 class="font-display font-bold text-[#0B332B] leading-[0.9] tracking-tight"
            style="font-size:clamp(1.75rem,4vw,3.75rem)">
          Health, Safety &amp;<br/>Environment Policy
        </h1>
      </div>
      <div class="flex flex-col gap-1.5 shrink-0">
        <div class="flex items-center gap-2 text-[11px] text-[#2A2A2A]/45">
          <svg class="w-3.5 h-3.5 text-[#0B332B]/30 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          <span>Reviewed: <strong class="text-[#2A2A2A]/70 font-semibold">January 2025</strong></span>
        </div>
        <p class="text-[11px] text-[#2A2A2A]/40 leading-relaxed max-w-xs">Our commitment to HSE performance across all operations.</p>
      </div>
    </div>
  </div>
</section>

<section class="bg-[#F8FAFC] py-10 sm:py-14">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

      <aside class="lg:col-span-3 order-2 lg:order-1 lg:sticky lg:top-24">

        <div class="bg-white rounded-2xl border border-[#0B332B]/8 p-5 mb-5">
          <p class="text-[10px] font-black uppercase tracking-[0.25em] text-[#0B332B]/35 mb-4">On This Page</p>
          <nav class="space-y-1">
            @foreach([
              ['commitment','Our Commitment'],
              ['fleet-safety','Driver & Fleet Safety'],
              ['environment','Environmental Responsibility'],
              ['spill-response','Spill Response'],
              ['incident-reporting','Incident Reporting'],
              ['hse-contact','HSE Contact'],
            ] as [$id,$label])
              <a href="#{{ $id }}"
                 class="toc-link flex items-center gap-2 py-1.5 px-2 rounded-xl text-[12px] font-medium text-[#2A2A2A]/55 hover:text-[#F5850F] hover:bg-[#F5850F]/5 transition-all duration-150">
                <span class="w-1 h-1 rounded-full bg-[#0B332B]/20 shrink-0"></span>
                {{ $label }}
              </a>
            @endforeach
          </nav>
        </div>

        {{-- HSE commitment badge --}}
        <div class="bg-white rounded-2xl border border-[#0B332B]/8 p-5 mb-5">
          <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 rounded-xl bg-[#0B332B] flex items-center justify-center shrink-0">
              <svg class="w-5 h-5 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <div>
              <p class="text-[10px] font-black uppercase tracking-wider text-[#F5850F]">Zero Tolerance</p>
              <p class="text-[11px] font-bold text-[#0B332B]">Unsafe Practices</p>
            </div>
          </div>
          <p class="text-[11px] text-[#2A2A2A]/50 leading-relaxed">All Alms Oil operations are conducted under active HSE management protocols.</p>
        </div>

        <div class="bg-white rounded-2xl border border-[#0B332B]/8 p-5">
          <p class="text-[10px] font-black uppercase tracking-[0.25em] text-[#0B332B]/35 mb-4">Legal Documents</p>
          <div class="space-y-1">
            @foreach([
              ['Privacy Policy', route('privacy'), false],
              ['Cookie Policy', route('cookies'), false],
              ['Terms of Supply', route('terms'), false],
              ['HSE Policy', route('hse'), true],
            ] as [$label,$route,$active])
              <a href="{{ $route }}"
                 class="flex items-center gap-2 py-1.5 px-2 rounded-xl text-[12px] font-medium transition-all duration-150
                        {{ $active ? 'bg-[#0B332B]/5 text-[#0B332B] font-bold' : 'text-[#2A2A2A]/55 hover:text-[#F5850F] hover:bg-[#F5850F]/5' }}">
                <span class="w-1 h-1 rounded-full {{ $active ? 'bg-[#F5850F]' : 'bg-[#0B332B]/15' }} shrink-0"></span>
                {{ $label }}
              </a>
            @endforeach
          </div>
        </div>
      </aside>

      <main class="lg:col-span-9 order-1 lg:order-2">
        <div class="bg-white rounded-2xl sm:rounded-3xl border border-[#0B332B]/8 p-6 sm:p-8 lg:p-10 legal-prose">

          <p class="lead">Alms Oil Nigeria Limited is committed to maintaining the highest standards of Health, Safety and Environmental (HSE) performance across all our operations — from depot loading to final-mile delivery and infrastructure development.</p>

          <h2 id="commitment">Our Commitment</h2>
          <ul>
            <li>Zero tolerance for unsafe practices across our entire supply chain</li>
            <li>Full compliance with NMDPRA, NOSDRA, and all applicable Nigerian HSE legislation</li>
            <li>Continuous training, certification, and competency assessment of all field and operations staff</li>
            <li>Regular internal and third-party HSE audits across all operational sites</li>
          </ul>

          <h2 id="fleet-safety">Driver and Fleet Safety</h2>
          <p>All Alms Oil transport drivers hold current hazardous materials (HAZMAT) certifications and undergo regular defensive driving assessments. Every vehicle in our fleet carries valid roadworthiness documentation and is fitted with GPS tracking and speed governance systems.</p>

          <h2 id="environment">Environmental Responsibility</h2>
          <p>We are committed to minimising the environmental footprint of petroleum operations through spill prevention protocols, proper waste disposal practices, secondary containment at all storage facilities, and responsible route planning to minimise vehicle emissions.</p>

          <h3 id="spill-response">Spill Response</h3>
          <p>All operational staff are trained in first-response spill containment. We maintain pre-positioned spill response equipment at key logistics nodes and comply with NOSDRA reporting obligations for all reportable incidents.</p>

          <h2 id="incident-reporting">Incident Reporting</h2>
          <p>All incidents, near-misses, and unsafe conditions must be reported immediately to the HSE desk. We operate a non-punitive reporting culture to promote transparency, learning, and continuous improvement in safety performance.</p>

          <h2 id="hse-contact">HSE Contact</h2>
          <p>For HSE-related enquiries, incident reports, or compliance documentation requests: <a href="mailto:hse@almsoil.com">hse@almsoil.com</a></p>

        </div>
        <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 px-1">
          <a href="{{ route('home') }}"
             class="inline-flex items-center gap-2 text-[11px] font-bold text-[#2A2A2A]/40 hover:text-[#F5850F] uppercase tracking-wider transition-colors">
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Home
          </a>
          <p class="text-[11px] text-[#2A2A2A]/35">© {{ date('Y') }} Alms Oil Nigeria Limited. All rights reserved.</p>
        </div>
      </main>

    </div>
  </div>
</section>

@endsection

@push('head')
@include('legal._prose-styles')
@endpush

@push('scripts')
@include('legal._toc-script')
@endpush
