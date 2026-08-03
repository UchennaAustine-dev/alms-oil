{{-- ══════════════════════════════════════════════════════
     SECTION: LOOKING AHEAD
     Design concept: Full-bleed cinematic image with
     oversized outlined heading layered over it,
     floating frosted-glass metric cards,
     auto-scrolling marquee ticker,
     and a clean CTA strip at the bottom.
     "Woah" factor comes from the giant text + image fusion.
══════════════════════════════════════════════════════ --}}
<section class="relative bg-[#0B332B] overflow-hidden">

  {{-- ════════════════════════════════════
       PART 1 — CINEMATIC IMAGE + GIANT TEXT
  ════════════════════════════════════ --}}
  <div class="relative" style="min-height:85vh">

    {{-- Full-bleed background photo --}}
    <div class="absolute inset-0 z-0">
      <img src="/servicessection-image.png"
           alt=""
           class="w-full h-full object-cover object-center"
           style="filter:saturate(0.6) brightness(0.55) contrast(1.1)" />
      {{-- Green tint overlay --}}
      <div class="absolute inset-0"
           style="background:linear-gradient(180deg,rgba(11,51,43,0.55) 0%,rgba(11,51,43,0.3) 40%,rgba(11,51,43,0.85) 100%)">
      </div>
    </div>

    {{-- Noise texture --}}
    <div class="absolute inset-0 z-[1] pointer-events-none opacity-30"
         style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12
                pt-16 sm:pt-20 lg:pt-24 pb-0 flex flex-col justify-between"
         style="min-height:85vh">

      {{-- ── Top: overline + body copy ── --}}
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 mb-auto">

        <div>
          <div class="flex items-center gap-2.5 mb-5">
            <div class="w-5 h-px bg-[#F5850F]"></div>
            <span class="text-[10px] font-bold tracking-[0.32em] uppercase text-[#F5850F]">
              Looking Ahead · 2025 &amp; Beyond
            </span>
          </div>
          <p class="text-white/65 text-base sm:text-lg leading-relaxed max-w-md">
            Nigeria is entering a new era of industrial growth. Alms Oil is committed to being at the forefront — through disciplined operations, long-term partnerships, and uncompromised delivery.
          </p>
        </div>

        {{-- Floating metric cards — top right --}}
        <div class="flex flex-wrap gap-3 lg:justify-end items-start">

          <div class="backdrop-blur-md bg-white/10 border border-white/20
                      rounded-2xl px-5 py-4 text-white min-w-[120px]">
            <p class="text-[9px] font-bold uppercase tracking-[0.22em] text-[#F5850F]/80 mb-1">
              Volume
            </p>
            <p class="font-display font-black text-2xl sm:text-3xl leading-none">850M+</p>
            <p class="text-[10px] text-white/45 mt-0.5">Litres delivered</p>
          </div>

          <div class="backdrop-blur-md bg-white/10 border border-white/20
                      rounded-2xl px-5 py-4 text-white min-w-[110px]">
            <p class="text-[9px] font-bold uppercase tracking-[0.22em] text-[#F5850F]/80 mb-1">
              Coverage
            </p>
            <p class="font-display font-black text-2xl sm:text-3xl leading-none text-[#F5850F]">
              36
            </p>
            <p class="text-[10px] text-white/45 mt-0.5">States</p>
          </div>

          <div class="backdrop-blur-md bg-[#F5850F]/20 border border-[#F5850F]/30
                      rounded-2xl px-5 py-4 text-white min-w-[110px]">
            <p class="text-[9px] font-bold uppercase tracking-[0.22em] text-[#F5850F]/80 mb-1">
              On-Time
            </p>
            <p class="font-display font-black text-2xl sm:text-3xl leading-none">98.5%</p>
            <p class="text-[10px] text-white/45 mt-0.5">Delivery rate</p>
          </div>

        </div>
      </div>

      {{-- ── GIANT OUTLINED HEADLINE — the "woah" element ── --}}
      {{-- Sits at the bottom of the image, half in / half creating depth --}}
      <div class="mt-12 sm:mt-16 overflow-hidden" id="la-headline">
        <div class="font-display font-black text-transparent leading-[0.85] tracking-tight
                    select-none whitespace-nowrap"
             style="
               font-size:clamp(4.5rem,13vw,12rem);
               -webkit-text-stroke: 1.5px rgba(255,255,255,0.28);
             ">
          Nigeria's&nbsp;<span style="-webkit-text-stroke:1.5px rgba(245,133,15,0.55)">Future.</span>
        </div>
      </div>

    </div>
  </div>

  {{-- ════════════════════════════════════
       PART 2 — SCROLLING MARQUEE TICKER
  ════════════════════════════════════ --}}
  <div class="relative z-10 border-t border-white/8 border-b border-white/8
              bg-[#0B332B] py-4 overflow-hidden">

    {{-- Fade edges --}}
    <div class="absolute left-0 inset-y-0 w-16 z-10 pointer-events-none"
         style="background:linear-gradient(to right,#0B332B,transparent)"></div>
    <div class="absolute right-0 inset-y-0 w-16 z-10 pointer-events-none"
         style="background:linear-gradient(to left,#0B332B,transparent)"></div>

    <div class="flex animate-marquee w-max gap-0">
      @php
        $items = [
          'NMDPRA Licensed', 'ISO 9001 Certified', '850M+ Litres Delivered',
          '36 States Covered', '98.5% On-Time Delivery', '24/7 Emergency Dispatch',
          'PIA Compliant', 'CAC Registered', '9 Product Types', 'GPS Fleet Tracking',
          'NMDPRA Licensed', 'ISO 9001 Certified', '850M+ Litres Delivered',
          '36 States Covered', '98.5% On-Time Delivery', '24/7 Emergency Dispatch',
          'PIA Compliant', 'CAC Registered', '9 Product Types', 'GPS Fleet Tracking',
        ];
      @endphp
      @foreach($items as $item)
        <div class="flex items-center gap-4 px-6 shrink-0">
          <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-white/40 whitespace-nowrap">
            {{ $item }}
          </span>
          <span class="w-1 h-1 rounded-full bg-[#F5850F]/50 shrink-0"></span>
        </div>
      @endforeach
    </div>

  </div>

  {{-- ════════════════════════════════════
       PART 3 — CTA STRIP
  ════════════════════════════════════ --}}
  <div class="relative z-10 bg-[#0B332B]">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 py-10 sm:py-12 lg:py-14">

      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-8">

        {{-- Left: compact heading --}}
        <div class="space-y-2">
          <h2 class="font-display font-bold text-white leading-tight"
              style="font-size:clamp(1.5rem,3vw,2.5rem)">
            Ready to build Africa's<br class="hidden sm:block"/>
            energy future with us?
          </h2>
          <p class="text-white/45 text-sm">
            Our commercial desk responds within 2 hours.
          </p>
        </div>

        {{-- Right: CTAs --}}
        <div class="flex flex-col sm:flex-row gap-3 shrink-0">

          <button data-open-quote
                  class="group flex items-center justify-center gap-3
                         bg-[#F5850F] hover:bg-[#e07708] active:bg-[#cc6900]
                         text-white font-bold text-sm uppercase tracking-wide
                         pl-7 pr-5 py-4 rounded-full w-full sm:w-auto
                         shadow-xl shadow-[#F5850F]/25
                         hover:-translate-y-0.5 active:scale-[0.98]
                         transition-all duration-200 cursor-pointer">
            <span>Become a Partner</span>
            <span class="flex items-center justify-center w-7 h-7 rounded-full
                         bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"/>
              </svg>
            </span>
          </button>

          <a href="{{ route('contact') }}"
             class="group flex items-center justify-center gap-2 text-sm font-semibold
                    text-white/55 hover:text-white
                    border border-white/15 hover:border-white/35
                    px-6 py-4 rounded-full w-full sm:w-auto
                    transition-all duration-200 hover:bg-white/[0.05]">
            Contact our team
            <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>

        </div>
      </div>

    </div>
  </div>

</section>

{{-- ── Headline parallax scroll effect ── --}}
<script>
(function () {
  var headline = document.getElementById('la-headline');
  if (!headline) return;

  function onScroll() {
    var rect = headline.closest('section').getBoundingClientRect();
    if (rect.bottom < 0 || rect.top > window.innerHeight) return;
    var progress = 1 - (rect.bottom / (window.innerHeight + rect.height));
    var translateX = progress * -80; // shift left as you scroll down
    headline.style.transform = 'translateX(' + translateX + 'px)';
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
}());
</script>
