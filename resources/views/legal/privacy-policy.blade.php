@extends('layouts.app')
@section('title', 'Privacy Policy | Alms Oil Nigeria Limited')

@section('content')

{{-- Header bar --}}
<header class="bg-white border-b border-slate-200 sticky top-16 z-40">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 h-12 flex items-center gap-1.5 text-xs text-slate-500">
    <a href="{{ route('home') }}" class="hover:text-amber-600 transition-colors font-medium">Home</a>
    <svg class="w-3 h-3 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    <span class="text-slate-700 font-semibold">Privacy Policy</span>
  </div>
</header>

{{-- Hero --}}
<div class="bg-white border-b border-slate-200">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
    <p class="text-xs font-bold uppercase tracking-widest text-amber-700 mb-3">Legal &amp; Compliance</p>
    <h1 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display leading-tight text-slate-950 mb-4">Privacy Policy</h1>
    <p class="text-slate-600 text-sm sm:text-base max-w-2xl leading-relaxed">
      How Alms Oil Nigeria Limited collects, uses, and protects personal information submitted through this website.
    </p>
    <p class="text-xs text-slate-400 mt-4 font-medium">Last updated: <span class="text-slate-600">January 2025</span></p>
  </div>
</div>

<main class="flex-1 bg-[#f8fafc]">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
    <div class="legal-content">
      <p>Alms Oil Nigeria Limited ("we", "us", or "our") is committed to protecting your personal information. This policy explains how we collect, use, and safeguard data submitted through this website.</p>

      <h2>Information We Collect</h2>
      <p>We collect information you provide directly when you submit a contact form or quote request — including your name, email address, phone number, and company name. We do not sell or share your personal data with third parties for marketing purposes.</p>

      <h2>How We Use Your Information</h2>
      <ul>
        <li>To respond to your supply enquiries and quote requests</li>
        <li>To communicate about our services and relevant updates</li>
        <li>To fulfil our contractual obligations to you</li>
        <li>To improve our website and service delivery</li>
      </ul>

      <h2>Data Security</h2>
      <p>All form submissions are encrypted in transit using industry-standard TLS. We retain your contact information only as long as necessary to fulfil our business obligations or as required by applicable Nigerian law.</p>

      <h2>Cookies</h2>
      <p>We use only essential session cookies required for secure form submissions. We do not use tracking or advertising cookies. See our <a href="{{ route('cookies') }}">Cookie Policy</a> for details.</p>

      <h2>Your Rights</h2>
      <p>You have the right to request access to, correction of, or deletion of personal data we hold about you. To make a request, contact us at <a href="mailto:info@almsoil.com">info@almsoil.com</a>.</p>

      <h2>Contact</h2>
      <p>For data protection enquiries: <a href="mailto:info@almsoil.com">info@almsoil.com</a> — Alms Oil Nigeria Limited, Lagos, Nigeria.</p>
    </div>
  </div>
</main>

{{-- Legal footer strip --}}
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
