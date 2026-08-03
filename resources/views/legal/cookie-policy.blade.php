@extends('layouts.app')
@section('title', 'Cookie Policy | Alms Oil Nigeria Limited')

@section('content')

<header class="bg-white border-b border-slate-200 sticky top-16 z-40">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 h-12 flex items-center gap-1.5 text-xs text-slate-500">
    <a href="{{ route('home') }}" class="hover:text-amber-600 transition-colors font-medium">Home</a>
    <svg class="w-3 h-3 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    <span class="text-slate-700 font-semibold">Cookie Policy</span>
  </div>
</header>

<div class="bg-white border-b border-slate-200">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
    <p class="text-xs font-bold uppercase tracking-widest text-amber-700 mb-3">Legal &amp; Compliance</p>
    <h1 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display leading-tight text-slate-950 mb-4">Cookie Policy</h1>
    <p class="text-slate-600 text-sm sm:text-base max-w-2xl leading-relaxed">
      How this website uses cookies and similar technologies.
    </p>
    <p class="text-xs text-slate-400 mt-4 font-medium">Last updated: <span class="text-slate-600">January 2025</span></p>
  </div>
</div>

<main class="flex-1 bg-[#f8fafc]">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
    <div class="legal-content">
      <p>This website uses cookies to ensure basic functionality and improve your experience. We do not use cookies for advertising or third-party tracking purposes.</p>

      <h2>What Cookies We Use</h2>
      <ul>
        <li><strong>Session cookies:</strong> Essential for secure form submissions and maintaining your session state. These expire automatically when you close your browser.</li>
        <li><strong>CSRF token:</strong> A security token required for all form submissions to prevent cross-site request forgery attacks. It is set automatically and is essential to site security.</li>
      </ul>

      <h2>What We Do Not Use</h2>
      <ul>
        <li>Advertising or retargeting cookies</li>
        <li>Third-party analytics trackers (e.g. Google Analytics)</li>
        <li>Social media tracking pixels</li>
      </ul>

      <h2>Managing Cookies</h2>
      <p>You can disable cookies in your browser settings at any time. Note that disabling essential session cookies will prevent contact and quote forms from working correctly.</p>

      <h2>Contact</h2>
      <p>For questions about how we use cookies: <a href="mailto:info@almsoil.com">info@almsoil.com</a>.</p>
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
