<footer class="bg-[#0B332B] text-white/60 overflow-hidden relative">

  {{-- Noise texture --}}
  <div class="absolute inset-0 pointer-events-none z-0"
       style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px"></div>

  {{-- Ambient glow --}}
  <div class="absolute top-0 right-0 w-96 h-96 pointer-events-none z-0"
       style="background:radial-gradient(circle at 90% 0%,rgba(245,133,15,0.09) 0%,transparent 60%)"></div>

  {{-- Separator line --}}
  <div class="relative z-10 h-px"
       style="background:linear-gradient(to right,transparent,rgba(245,133,15,0.35),transparent)"></div>

  {{-- ══════════════════════════════════════
       CTA BAND
  ══════════════════════════════════════ --}}
  <div class="relative z-10 border-b border-white/8">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 py-8 sm:py-10 lg:py-12">

      {{-- Stack on mobile, row on sm+ --}}
      <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

        {{-- Text --}}
        <div class="space-y-1.5">
          <div class="flex items-center gap-2 mb-2">
            <div class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></div>
            <span class="text-[10px] font-bold tracking-[0.25em] uppercase text-[#F5850F]">
              Nationwide Petroleum Distribution
            </span>
          </div>
          <h3 class="text-lg sm:text-xl lg:text-2xl font-display font-bold text-white leading-snug">
            Need Uninterrupted Commercial<br class="hidden sm:block"/> Fuel Supply?
          </h3>
          <p class="text-white/45 text-[13px] sm:text-sm leading-relaxed max-w-md">
            Our commercial desk responds within 2 hours.
          </p>
        </div>

        {{-- CTA button — full width on mobile, auto on sm+ --}}
        <div class="w-full sm:w-auto shrink-0">
          <button data-open-quote
                  class="group w-full sm:w-auto flex items-center justify-center gap-3
                         bg-[#F5850F] hover:bg-[#e07708] active:bg-[#cc6900] text-white
                         font-bold text-sm uppercase tracking-wide
                         px-6 py-4 rounded-full
                         shadow-lg shadow-[#F5850F]/20
                         hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.98]
                         transition-all duration-200 cursor-pointer">
            <span>Request Supply Quote</span>
            <span class="flex items-center justify-center w-7 h-7 rounded-full
                         bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
              </svg>
            </span>
          </button>
        </div>

      </div>
    </div>
  </div>

  {{-- ══════════════════════════════════════
       MAIN COLUMNS
       Mobile:  1 column, full width
       sm:      2 columns
       lg:      12-column grid
  ══════════════════════════════════════ --}}
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12
              py-10 sm:py-14 lg:py-16 border-b border-white/8">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-8 sm:gap-10 lg:gap-8">

      {{-- ── Brand + Contact ── --}}
      <div class="sm:col-span-2 lg:col-span-4 space-y-5">

        <a href="{{ route('home') }}" class="inline-block">
          <img src="/branding/ALMS OIL PNG 01.png"
               alt="Alms Oil Nigeria"
               class="h-7 sm:h-8 w-auto object-contain brightness-0 invert opacity-75
                      hover:opacity-100 transition-opacity" />
        </a>

        <p class="text-[13px] leading-relaxed text-white/40 max-w-xs">
          Integrated petroleum supply, logistics, engineering, and energy infrastructure
          across Nigeria and West Africa.
        </p>

        {{-- Contact items --}}
        <div class="space-y-2.5 text-[13px]">

          <a href="mailto:info@almsoil.com"
             class="flex items-center gap-3 text-white/55 hover:text-[#F5850F] transition-colors group">
            <div class="w-8 h-8 rounded-lg bg-white/6 border border-white/8 flex items-center justify-center shrink-0">
              <svg class="w-3.5 h-3.5 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <span class="min-w-0 truncate">info@almsoil.com</span>
          </a>

          <a href="tel:+2348002567645"
             class="flex items-center gap-3 text-white/55 hover:text-[#F5850F] transition-colors group">
            <div class="w-8 h-8 rounded-lg bg-white/6 border border-white/8 flex items-center justify-center shrink-0">
              <svg class="w-3.5 h-3.5 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <span>+234 (0) 800 ALMSOIL</span>
          </a>

          <div class="flex items-center gap-3 text-white/40">
            <div class="w-8 h-8 rounded-lg bg-white/6 border border-white/8 flex items-center justify-center shrink-0">
              <svg class="w-3.5 h-3.5 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            Lagos &amp; Abuja, Nigeria
          </div>

        </div>

        {{-- Cert tags --}}
        <div class="flex flex-wrap gap-x-4 gap-y-1.5 pt-1">
          @foreach(['NMDPRA Licensed','ISO 9001','CAC Reg.'] as $cert)
            <span class="text-[10px] font-bold text-white/25 uppercase tracking-wider">{{ $cert }}</span>
          @endforeach
        </div>

      </div>

      {{-- ── Services ── --}}
      <div class="lg:col-span-3 space-y-4">
        <h4 class="text-[10px] font-black uppercase tracking-[0.22em] text-[#F5850F]
                   pb-2.5 border-b border-white/8">
          Services
        </h4>
        <ul class="space-y-2.5 text-[13px]">
          @foreach([
            ['Petroleum Supply & Trading',   route('services.petroleum')],
            ['Logistics & Distribution',     route('services.logistics')],
            ['Engineering & Industrial',     route('services.engineering')],
            ['Energy Infrastructure',        route('services.infrastructure')],
            ['Insights & News',              route('blog.index')],
            ['About Alms Oil',               route('about')],
            ['Contact Us',                   route('contact')],
          ] as [$label, $href])
            <li>
              <a href="{{ $href }}"
                 class="flex items-center gap-2.5 text-white/50 hover:text-white
                        transition-colors group py-0.5">
                <span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]/40
                             group-hover:bg-[#F5850F] shrink-0 transition-colors"></span>
                {{ $label }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>

      {{-- ── Products ── --}}
      <div class="lg:col-span-2 space-y-4">
        <h4 class="text-[10px] font-black uppercase tracking-[0.22em] text-[#F5850F]
                   pb-2.5 border-b border-white/8">
          Products
        </h4>
        <ul class="space-y-2 text-[13px] text-white/40">
          @foreach(['AGO (Diesel)','PMS (Petrol)','DPK (Kerosene)','Jet A-1','LPFO','LPG','Base Oils','Bitumen'] as $p)
            <li class="flex items-center gap-2.5 py-0.5">
              <span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]/35 shrink-0"></span>
              {{ $p }}
            </li>
          @endforeach
        </ul>
      </div>

      {{-- ── Legal + Compliance ── --}}
      <div class="lg:col-span-3 space-y-4">
        <h4 class="text-[10px] font-black uppercase tracking-[0.22em] text-[#F5850F]
                   pb-2.5 border-b border-white/8">
          Legal
        </h4>
        <ul class="space-y-2.5 text-[13px]">
          @foreach([
            ['Privacy Policy',  route('privacy')],
            ['Terms of Supply', route('terms')],
            ['Cookie Policy',   route('cookies')],
            ['HSE Policy',      route('hse')],
          ] as [$label, $href])
            <li>
              <a href="{{ $href }}"
                 class="flex items-center gap-2.5 text-white/50 hover:text-white
                        transition-colors group py-0.5">
                <span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]/40
                             group-hover:bg-[#F5850F] shrink-0 transition-colors"></span>
                {{ $label }}
              </a>
            </li>
          @endforeach
        </ul>

        {{-- Compliance cards --}}
        <div class="space-y-2 pt-1">
          @foreach([
            ['NMDPRA &amp; DPR Licensed', 'Full PIA Regulatory Compliance'],
            ['ISO 9001:2015 Certified',   'Quality Management Systems'],
          ] as [$title, $sub])
            <div class="flex items-center gap-3 px-3 py-3 rounded-xl
                        bg-white/[0.04] border border-white/8">
              <div class="w-7 h-7 rounded-lg bg-[#F5850F]/12 border border-[#F5850F]/20
                          flex items-center justify-center shrink-0">
                <svg class="w-3.5 h-3.5 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <div class="min-w-0">
                <p class="text-[12px] font-bold text-white/80 leading-tight">{!! $title !!}</p>
                <p class="text-[10px] text-white/35 mt-0.5">{{ $sub }}</p>
              </div>
            </div>
          @endforeach
        </div>

      </div>

    </div>
  </div>

  {{-- ══════════════════════════════════════
       BOTTOM BAR
  ══════════════════════════════════════ --}}
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 py-5">
    <div class="flex flex-col items-center gap-2
                sm:flex-row sm:items-center sm:justify-between
                text-[11px] text-white/25">
      <p class="text-center sm:text-left">
        © {{ date('Y') }} Alms Oil Nigeria Limited. All rights reserved.
      </p>
      <div class="flex items-center gap-3 justify-center">
        <span>almsoil.com</span>
        <span class="w-1 h-1 rounded-full bg-white/15"></span>
        <span>Powered by Excellence</span>
      </div>
    </div>
  </div>

</footer>
