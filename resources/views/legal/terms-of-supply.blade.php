@extends('layouts.app')
@section('title', 'Terms of Supply | Alms Oil Nigeria Limited')
@section('description', 'Standard commercial terms governing all product supply and logistics services provided by Alms Oil Nigeria Limited.')

@section('content')

<section class="bg-white border-b border-[#0B332B]/8 pt-10 sm:pt-14 pb-10 sm:pb-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex items-center gap-2 text-[11px] text-[#2A2A2A]/40 font-medium mb-8 flex-wrap">
      <a href="{{ route('home') }}" class="hover:text-[#F5850F] transition-colors">Home</a>
      <span>/</span>
      <span class="text-[#2A2A2A]/70">Terms of Supply</span>
    </div>
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 max-w-5xl">
      <div>
        <div class="flex items-center gap-2.5 mb-4">
          <div class="w-4 h-px bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold tracking-[0.32em] uppercase text-[#F5850F]">Legal &amp; Compliance</span>
        </div>
        <h1 class="font-display font-bold text-[#0B332B] leading-[0.9] tracking-tight"
            style="font-size:clamp(2rem,4.5vw,3.75rem)">Terms of Supply</h1>
      </div>
      <div class="flex flex-col gap-1.5 shrink-0">
        <div class="flex items-center gap-2 text-[11px] text-[#2A2A2A]/45">
          <svg class="w-3.5 h-3.5 text-[#0B332B]/30 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          <span>Effective: <strong class="text-[#2A2A2A]/70 font-semibold">January 2025</strong></span>
        </div>
        <p class="text-[11px] text-[#2A2A2A]/40 leading-relaxed max-w-xs">Standard terms governing all product supply and logistics services.</p>
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
              ['orders','Orders & Confirmation'],
              ['pricing','Pricing'],
              ['delivery','Delivery'],
              ['quality','Quality'],
              ['payment','Payment Terms'],
              ['liability','Limitation of Liability'],
              ['governing-law','Governing Law'],
            ] as [$id,$label])
              <a href="#{{ $id }}"
                 class="toc-link flex items-center gap-2 py-1.5 px-2 rounded-xl text-[12px] font-medium text-[#2A2A2A]/55 hover:text-[#F5850F] hover:bg-[#F5850F]/5 transition-all duration-150">
                <span class="w-1 h-1 rounded-full bg-[#0B332B]/20 shrink-0"></span>
                {{ $label }}
              </a>
            @endforeach
          </nav>
        </div>

        {{-- Important note callout --}}
        <div class="bg-[#0B332B] rounded-2xl p-5">
          <div class="h-0.5 bg-[#F5850F] -mx-5 -mt-5 mb-4 rounded-t-2xl"></div>
          <p class="text-[10px] font-black uppercase tracking-[0.25em] text-[#F5850F] mb-2">Questions?</p>
          <p class="text-[12px] text-white/60 leading-relaxed mb-4">Our commercial team can clarify any aspect of these terms before you commit to a supply agreement.</p>
          <a href="{{ route('contact') }}"
             class="inline-flex items-center gap-1.5 text-[11px] font-bold text-[#F5850F] hover:text-white transition-colors">
            Contact our team
            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
        </div>

        <div class="bg-white rounded-2xl border border-[#0B332B]/8 p-5 mt-5">
          <p class="text-[10px] font-black uppercase tracking-[0.25em] text-[#0B332B]/35 mb-4">Legal Documents</p>
          <div class="space-y-1">
            @foreach([
              ['Privacy Policy', route('privacy'), false],
              ['Cookie Policy', route('cookies'), false],
              ['Terms of Supply', route('terms'), true],
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

          <p class="lead">These Terms of Supply govern all product supply and logistics services provided by Alms Oil Nigeria Limited to its clients. By placing an order or entering a supply agreement with us, you agree to these terms.</p>

          <h2 id="orders">Orders and Confirmation</h2>
          <p>All quote requests submitted via this website are treated as expressions of interest. A binding supply agreement is formed only upon written confirmation from Alms Oil Nigeria Limited. We reserve the right to decline any order at our discretion.</p>

          <h2 id="pricing">Pricing</h2>
          <p>Prices are subject to change without notice due to market conditions, exchange rate fluctuations, and depot pricing. Confirmed orders are fixed at the agreed rate for the duration specified in the written supply contract.</p>

          <h2 id="delivery">Delivery</h2>
          <p>Alms Oil will use all reasonable efforts to meet agreed delivery schedules. We are not liable for delays caused by force majeure events, road conditions, regulatory restrictions, or third-party depot closures beyond our control.</p>

          <h3 id="delivery-acceptance">Delivery Acceptance</h3>
          <p>The client is responsible for ensuring a competent representative is available at the delivery site to accept and sign for products. Unsigned deliveries will not be accepted as completed without further verification.</p>

          <h2 id="quality">Quality</h2>
          <p>All products are supplied meeting NMDPRA quality standards and are accompanied by a Certificate of Analysis. Quality claims must be raised in writing within 48 hours of delivery, supported by independent laboratory test documentation.</p>

          <h2 id="payment">Payment Terms</h2>
          <p>Standard payment terms are set out in the individual supply agreement. Overdue accounts may attract interest charges and result in suspension of supply pending full settlement of outstanding balances.</p>

          <h2 id="liability">Limitation of Liability</h2>
          <p>Alms Oil's liability shall not exceed the value of the specific supply order in dispute. We are not liable for consequential, indirect, or economic losses arising from supply delays or product claims.</p>

          <h2 id="governing-law">Governing Law</h2>
          <p>These terms are governed by and construed in accordance with the laws of the Federal Republic of Nigeria. Any disputes shall be subject to the exclusive jurisdiction of Nigerian courts.</p>

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
