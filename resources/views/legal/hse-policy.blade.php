@extends('layouts.app')
@section('title', 'HSE Policy | Alms Oil Nigeria Limited')

@section('content')

<header class="bg-white border-b border-slate-200 sticky top-16 z-40">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 h-12 flex items-center gap-1.5 text-xs text-slate-500">
    <a href="{{ route('home') }}" class="hover:text-amber-600 transition-colors font-medium">Home</a>
    <svg class="w-3 h-3 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    <span class="text-slate-700 font-semibold">HSE Policy</span>
  </div>
</header>

<div class="bg-white border-b border-slate-200">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
    <p class="text-xs font-bold uppercase tracking-widest text-amber-700 mb-3">Legal &amp; Compliance</p>
    <h1 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display leading-tight text-slate-950 mb-4">Health, Safety &amp; Environment Policy</h1>
    <p class="text-slate-600 text-sm sm:text-base max-w-2xl leading-relaxed">
      Alms Oil Nigeria Limited's commitment to maintaining the highest standards of HSE performance across all operations.
    </p>
    <p class="text-xs text-slate-400 mt-4 font-medium">Reviewed: <span class="text-slate-600">January 2025</span></p>
  </div>
</div>

<main class="flex-1 bg-[#f8fafc]">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
    <div class="legal-content">
      <p>Alms Oil Nigeria Limited is committed to maintaining the highest standards of Health, Safety and Environmental (HSE) performance across all our operations — from depot loading to final-mile delivery and infrastructure development.</p>

      <h2>Our Commitment</h2>
      <ul>
        <li>Zero tolerance for unsafe practices across our entire supply chain</li>
        <li>Full compliance with NMDPRA, NOSDRA, and all applicable Nigerian HSE legislation</li>
        <li>Continuous training, certification, and competency assessment of all field and operations staff</li>
        <li>Regular internal and third-party HSE audits across all operational sites</li>
      </ul>

      <h2>Driver and Fleet Safety</h2>
      <p>All Alms Oil transport drivers hold current hazardous materials (HAZMAT) certifications and undergo regular defensive driving assessments. Every vehicle in our fleet carries valid roadworthiness documentation and is fitted with GPS tracking and speed governance systems.</p>

      <h2>Environmental Responsibility</h2>
      <p>We are committed to minimising the environmental footprint of petroleum operations through spill prevention protocols, proper waste disposal practices, secondary containment at all storage facilities, and responsible route planning to minimise emissions.</p>

      <h3>Spill Response</h3>
      <p>All operational staff are trained in first-response spill containment. We maintain pre-positioned spill response equipment at key logistics nodes and comply with NOSDRA reporting obligations for all reportable incidents.</p>

      <h2>Incident Reporting</h2>
      <p>All incidents, near-misses, and unsafe conditions must be reported immediately to the HSE desk. We operate a non-punitive reporting culture to promote transparency, learning, and continuous improvement in safety performance.</p>

      <h2>HSE Contact</h2>
      <p>For HSE-related enquiries, incident reports, or compliance documentation requests: <a href="mailto:hse@almsoil.com">hse@almsoil.com</a></p>
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
