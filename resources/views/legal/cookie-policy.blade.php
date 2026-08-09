@extends('layouts.app')
@section('title', 'Cookie Policy | Alms Oil Nigeria Limited')
@section('description', 'How the Alms Oil Nigeria Limited website uses cookies and similar technologies.')

@section('content')

<section class="bg-white border-b border-[#0B332B]/8 pt-10 sm:pt-14 pb-10 sm:pb-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex items-center gap-2 text-[11px] text-[#2A2A2A]/40 font-medium mb-8 flex-wrap">
      <a href="{{ route('home') }}" class="hover:text-[#F5850F] transition-colors">Home</a>
      <span>/</span>
      <span class="text-[#2A2A2A]/70">Cookie Policy</span>
    </div>
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 max-w-5xl">
      <div>
        <div class="flex items-center gap-2.5 mb-4">
          <div class="w-4 h-px bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold tracking-[0.32em] uppercase text-[#F5850F]">Legal &amp; Compliance</span>
        </div>
        <h1 class="font-display font-bold text-[#0B332B] leading-[0.9] tracking-tight"
            style="font-size:clamp(2rem,4.5vw,3.75rem)">Cookie Policy</h1>
      </div>
      <div class="flex flex-col gap-1.5 shrink-0">
        <div class="flex items-center gap-2 text-[11px] text-[#2A2A2A]/45">
          <svg class="w-3.5 h-3.5 text-[#0B332B]/30 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          <span>Last updated: <strong class="text-[#2A2A2A]/70 font-semibold">January 2025</strong></span>
        </div>
        <p class="text-[11px] text-[#2A2A2A]/40 leading-relaxed max-w-xs">How this website uses cookies and similar technologies.</p>
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
              ['what-we-dont','What We Do Not Use'],
              ['managing','Managing Cookies'],
              ['contact','Contact'],
            ] as [$id,$label])
              <a href="#{{ $id }}"
                 class="toc-link flex items-center gap-2 py-1.5 px-2 rounded-xl text-[12px] font-medium text-[#2A2A2A]/55 hover:text-[#F5850F] hover:bg-[#F5850F]/5 transition-all duration-150">
                <span class="w-1 h-1 rounded-full bg-[#0B332B]/20 shrink-0"></span>
                {{ $label }}
              </a>
            @endforeach
          </nav>
        </div>
        <div class="bg-white rounded-2xl border border-[#0B332B]/8 p-5">
          <p class="text-[10px] font-black uppercase tracking-[0.25em] text-[#0B332B]/35 mb-4">Legal Documents</p>
          <div class="space-y-1">
            @foreach([
              ['Privacy Policy', route('privacy'), false],
              ['Cookie Policy', route('cookies'), true],
              ['Terms of Supply', route('terms'), false],
              ['HSE Policy', route('hse'), false],
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

          <p class="lead">This website uses cookies to ensure basic functionality and improve your experience. We do not use cookies for advertising or third-party tracking purposes.</p>

          <h2 id="what-we-dont">What We Do Not Use</h2>
          <ul>
            <li>Advertising or retargeting cookies</li>
            <li>Third-party analytics trackers (e.g. Google Analytics)</li>
            <li>Social media tracking pixels</li>
          </ul>

          <h2 id="managing">Managing Cookies</h2>
          <p>You can disable cookies in your browser settings at any time. Note that disabling essential session cookies will prevent contact and quote forms from working correctly.</p>

          <h2 id="contact">Contact</h2>
          <p>For questions about how we use cookies: <a href="mailto:info@almsoil.com">info@almsoil.com</a>.</p>

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
