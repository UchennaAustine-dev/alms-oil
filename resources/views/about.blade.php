@extends('layouts.app')
@section('title', 'About Us | Alms Oil Nigeria Limited')
@section('description', 'Learn about Alms Oil Nigeria Limited — our story, mission, leadership team, and 15+ years of delivering reliable petroleum supply across all 36 Nigerian states.')

@section('content')
  @include('about.hero')
  @include('about.story')
  @include('about.mission-vision')
  @include('about.numbers')
  @include('about.timeline')
  @include('about.why-us')
  @include('about.team')
  @include('about.certifications')
  @include('about.cta')
@endsection

@push('scripts')
<script>
(function () {
  /* Scroll-reveal */
  var style = document.createElement('style');
  style.textContent = '.about-reveal{opacity:0;transform:translateY(28px);transition:opacity 0.65s cubic-bezier(.22,1,.36,1),transform 0.65s cubic-bezier(.22,1,.36,1)}.about-reveal.is-visible{opacity:1;transform:translateY(0)}';
  document.head.appendChild(style);
  var reveals = document.querySelectorAll('.about-reveal');
  if ('IntersectionObserver' in window) {
    var ro = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) { if (e.isIntersecting) { e.target.classList.add('is-visible'); ro.unobserve(e.target); } });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(function(el, i) { el.style.transitionDelay = (i % 4) * 0.08 + 's'; ro.observe(el); });
  } else {
    reveals.forEach(function(el) { el.classList.add('is-visible'); });
  }
  /* Counter animation */
  function animateCounter(el) {
    var target = parseFloat(el.dataset.target);
    var isDecimal = String(target).includes('.');
    var start = null;
    (function step(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / 1800, 1);
      var v = target * (1 - Math.pow(1 - p, 3));
      el.querySelector('.about-counter-num').textContent = isDecimal ? v.toFixed(1) : Math.round(v);
      if (p < 1) requestAnimationFrame(step);
      else el.querySelector('.about-counter-num').textContent = isDecimal ? target.toFixed(1) : target;
    })(performance.now());
  }
  if ('IntersectionObserver' in window) {
    var co = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) { if (e.isIntersecting) { animateCounter(e.target); co.unobserve(e.target); } });
    }, { threshold: 0.3 });
    document.querySelectorAll('.about-counter').forEach(function(el) { co.observe(el); });
  }
}());
</script>
@endpush
