@extends('layouts.app')
@section('title', 'Terms of Supply | Alms Oil Nigeria Limited')

@section('content')

<header class="bg-white border-b border-slate-200 sticky top-16 z-40">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 h-12 flex items-center gap-1.5 text-xs text-slate-500">
    <a href="{{ route('home') }}" class="hover:text-amber-600 transition-colors font-medium">Home</a>
    <svg class="w-3 h-3 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    <span class="text-slate-700 font-semibold">Terms of Supply</span>
  </div>
</header>

<div class="bg-white border-b border-slate-200">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
    <p class="text-xs font-bold uppercase tracking-widest text-amber-700 mb-3">Legal &amp; Compliance</p>
    <h1 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display leading-tight text-slate-950 mb-4">Terms of Supply</h1>
    <p class="text-slate-600 text-sm sm:text-base max-w-2xl leading-relaxed">
      Standard commercial terms governing all product supply and logistics services provided by Alms Oil Nigeria Limited.
    </p>
    <p class="text-xs text-slate-400 mt-4 font-medium">Effective: <span class="text-slate-600">January 2025</span></p>
  </div>
</div>

<main class="flex-1 bg-[#f8fafc]">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
    <div class="legal-content">
      <p>These Terms of Supply govern all product supply and logistics services provided by Alms Oil Nigeria Limited to its clients.</p>

      <h2>Orders and Confirmation</h2>
      <p>All quote requests submitted via this website are treated as expressions of interest. A binding supply agreement is formed only upon written confirmation from Alms Oil Nigeria Limited. We reserve the right to decline any order at our discretion.</p>

      <h2>Pricing</h2>
      <p>Prices are subject to change without notice due to market conditions, exchange rate fluctuations, and depot pricing. Confirmed orders are fixed at the agreed rate for the duration specified in the written supply contract.</p>

      <h2>Delivery</h2>
      <p>Alms Oil will use all reasonable efforts to meet agreed delivery schedules. We are not liable for delays caused by force majeure events, road conditions, regulatory restrictions, or third-party depot closures beyond our control.</p>

      <h3>Delivery Acceptance</h3>
      <p>The client is responsible for ensuring a competent representative is available at the delivery site to accept and sign for products. Unsigned deliveries will not be accepted as completed without further verification.</p>

      <h2>Quality</h2>
      <p>All products are supplied meeting NMDPRA quality standards and are accompanied by a Certificate of Analysis. Quality claims must be raised in writing within 48 hours of delivery, supported by independent laboratory test documentation.</p>

      <h2>Payment Terms</h2>
      <p>Standard payment terms are set out in the individual supply agreement. Overdue accounts may attract interest charges and result in suspension of supply pending settlement.</p>

      <h2>Limitation of Liability</h2>
      <p>Alms Oil's liability shall not exceed the value of the specific supply order in dispute. We are not liable for consequential, indirect, or economic losses arising from supply delays or product claims.</p>

      <h2>Governing Law</h2>
      <p>These terms are governed by and construed in accordance with the laws of the Federal Republic of Nigeria. Any disputes shall be subject to the exclusive jurisdiction of Nigerian courts.</p>
    </div>
  </div>
</main>

<footer class="bg-slate-900 text-slate-400 py-8">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
    <p>© {{ date('Y') }} Alms Oil Nigeria Limited. All rights reserved.</p>
    <div class="flex flex-wrap items-center justify-center gap-x-4 gap-y-2">
      <a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Home</a>
      <a href="{{ route('privacy') }}" class="hover:text-amber-400 transition-colors">Privacy Policy</a>
      <a href="{{ route('terms') }}" class="hover:text-amber-400 transition-colors">Terms of Supply</a>
      <a href="{{ route('cookies') }}" class="hover:text-amber-400 transition-colors">Cookie Policy</a>
      <a href="{{ route('hse') }}" class="hover:text-amber-400 transition-colors">HSE Policy</a>
    </div>
  </div>
</footer>

@endsection
