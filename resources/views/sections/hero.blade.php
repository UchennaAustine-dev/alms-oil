{{-- ══════════════════════════════════════════════════════════════════════════
     HERO SECTION — Alms Oil Nigeria Limited
     · Tightly Mobile Responsive
     · Full-bleed atmospheric background (aligned with other page heroes)
     · Interactive tabbed photo preview & floating glassmorphism badges
══════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden pt-4 sm:pt-6 pb-10 sm:pb-12 lg:pb-16 border-b border-[#0B332B]/10">

    {{-- Full-bleed atmospheric background --}}
    <div class="absolute inset-0 z-0">
        <img src="https://images.pexels.com/photos/38214019/pexels-photo-38214019.jpeg?auto=compress&cs=tinysrgb&w=1600&q=85"
            alt="" aria-hidden="true" class="w-full h-full object-cover object-center"
            style="filter:saturate(0.55) brightness(0.72) contrast(1.05)" />
        {{-- Overall green atmosphere --}}
        <div class="absolute inset-0"
            style="background:linear-gradient(135deg,rgba(11,51,43,0.55) 0%,rgba(11,51,43,0.28) 45%,rgba(11,51,43,0.42) 100%)">
        </div>
        {{-- Left-weighted light scrim so existing dark type stays readable (desktop) --}}
        <div class="absolute inset-0"
            style="background:linear-gradient(105deg,rgba(253,253,252,0.96) 0%,rgba(253,253,252,0.92) 40%,rgba(253,253,252,0.5) 68%,rgba(253,253,252,0.12) 100%)">
        </div>
        {{-- Top-weighted light scrim for stacked mobile layout --}}
        <div class="absolute inset-0 lg:hidden"
            style="background:linear-gradient(to bottom,rgba(253,253,252,0.94) 0%,rgba(253,253,252,0.82) 42%,rgba(253,253,252,0.25) 78%,rgba(253,253,252,0.08) 100%)">
        </div>
        <div class="absolute inset-0 pointer-events-none opacity-[0.12]"
            style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px">
        </div>
    </div>

    {{-- Soft orange accent glow (right, behind media card) --}}
    <div
        class="absolute top-0 right-0 w-72 sm:w-[28rem] h-72 sm:h-[28rem] bg-[#F5850F]/10 rounded-full blur-3xl pointer-events-none z-[1] select-none">
    </div>

    {{-- ── MAIN CONTAINER ────────────────────────────────────────────────── --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 pt-4 sm:pt-6 lg:pt-10">

        {{-- Grid Layout --}}
        <div
            class="grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] xl:grid-cols-[1.15fr_0.85fr] gap-8 lg:gap-14 items-center">

            {{-- ════════════════════════════════════════════════════
           LEFT COLUMN — Copy + Action Pills
      ════════════════════════════════════════════════════ --}}
            <div class="relative z-20 hero-el space-y-4 sm:space-y-6">

                {{-- Overline Badge --}}
                {{-- <div
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#0B332B]/5 border border-[#0B332B]/12">
                    <span class="flex h-2 w-2 relative">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#F5850F] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-[#F5850F]"></span>
                    </span>
                    <span
                        class="text-[10px] sm:text-[11px] font-bold tracking-[0.18em] sm:tracking-[0.22em] uppercase text-[#0B332B]">
                        NMDPRA LICENSED · INTEGRATED ENERGY LEADER
                    </span>
                </div> --}}

                {{-- MAIN HEADLINE --}}
                <h1
                    class="font-display font-extrabold text-[#0B332B] tracking-tight leading-[1.05] text-3xl sm:text-5xl lg:text-6xl xl:text-7xl">
                    Powering Nigeria's <br />
                    <span class="text-[#F5850F] relative inline-block">
                        Energy Growth.
                        <svg class="absolute -bottom-1.5 left-0 w-full h-2.5 text-[#F5850F]/30 pointer-events-none"
                            viewBox="0 0 200 12" fill="none" preserveAspectRatio="none">
                            <path d="M2 9C50 3 150 3 198 9" stroke="currentColor" stroke-width="4"
                                stroke-linecap="round" />
                        </svg>
                    </span>
                </h1>

                {{-- SUBTEXT --}}
                <p class="text-[#2A2A2A]/75 text-base lg:text-lg leading-relaxed max-w-xl">
                    Tier-1 petroleum product sourcing, GPS-tracked fleet haulage, and critical energy infrastructure
                    delivered seamlessly across all 36 Nigerian states.
                </p>

                {{-- ACTION BUTTONS --}}
                <div class="flex flex-wrap items-center gap-3 sm:gap-4 pt-1 sm:pt-2">

                    {{-- Primary Pill CTA --}}
                    <button data-open-quote
                        class="group inline-flex items-center justify-center gap-2.5 bg-[#F5850F] hover:bg-[#e07708] text-white
                         font-bold text-xs sm:text-sm uppercase tracking-wider
                         px-6 sm:px-8 py-3.5 sm:py-4 rounded-full w-full sm:w-auto
                         shadow-lg shadow-[#F5850F]/25
                         hover:shadow-lg hover:shadow-[#F5850F]/30 hover:-translate-y-0.5 active:translate-y-0
                         transition-all duration-200 cursor-pointer">
                        <span>Request Supply</span>
                        <span
                            class="flex items-center justify-center w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </button>

                    {{-- Secondary Action Button --}}
                    <a href="{{ route('services.petroleum') }}"
                        class="inline-flex items-center justify-center gap-2 px-6 sm:px-7 py-3.5 sm:py-4 rounded-full border border-[#0B332B]/20 bg-white text-[#0B332B] font-bold text-xs sm:text-sm tracking-wide hover:bg-[#0B332B] hover:text-white hover:border-[#0B332B] transition-all duration-200 w-full sm:w-auto text-center">
                        <span>Our Products &amp; Fleet</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                </div>

                {{-- Trust Badges --}}
                <div
                    class="pt-2 sm:pt-3 flex flex-wrap items-center gap-4 sm:gap-6 text-base md:text-[13px] text-[#2A2A2A]/70 border-t border-[#0B332B]/8 max-w-xl">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#F5850F] shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Guaranteed Product Quality (AGO, PMS, DPK, ATK)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#F5850F] shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>ISO 9001:2015 Certified</span>
                    </div>
                </div>

            </div>

            {{-- ════════════════════════════════════════════════════
           RIGHT COLUMN — High-Quality Unsplash Stock Images
      ════════════════════════════════════════════════════ --}}
            <div class="relative hero-el">

                {{-- Frame Container --}}
                <div
                    class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl shadow-[#0B332B]/20 border-2 sm:border-4 border-white bg-[#0B332B]">

                    {{-- Main Hero Image --}}
                    <div class="relative h-[320px] sm:h-[450px] lg:h-[480px] w-full overflow-hidden">
                        {{-- 
              Tab 1 — Supply: Large petroleum storage tanks / depot — universal industrial
            --}}
                        <img id="hero-dynamic-img"
                            src="https://images.pexels.com/photos/37190872/pexels-photo-37190872.jpeg?auto=compress&cs=tinysrgb&w=1600&q=85"
                            alt="Alms Oil Petroleum Fuel Supply Operations"
                            class="w-full h-full object-cover object-center transition-all duration-700 transform scale-100" />

                        {{-- Gradient Overlays --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0B332B]/90 via-[#0B332B]/25 to-transparent">
                        </div>

                        {{-- Interactive Image Selector Pills --}}
                        <div
                            class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20 flex items-center gap-1 bg-black/50 backdrop-blur-md p-1 rounded-full border border-white/20">
                            <button
                                onclick="switchHeroTab('supply', 'https://images.pexels.com/photos/37190872/pexels-photo-37190872.jpeg?auto=compress&cs=tinysrgb&w=900&q=85', 'Petroleum Fuel Supply Operations')"
                                id="tab-btn-supply"
                                class="hero-tab-btn px-2.5 sm:px-3 py-1 text-[10px] sm:text-[11px] font-bold rounded-full transition-all bg-[#F5850F] text-white">
                                Supply
                            </button>
                            <button
                                onclick="switchHeroTab('haulage', 'https://images.pexels.com/photos/1117210/pexels-photo-1117210.jpeg?auto=compress&cs=tinysrgb&w=900&q=85', 'GPS Tanker Fleet Haulage Logistics')"
                                id="tab-btn-haulage"
                                class="hero-tab-btn px-2.5 sm:px-3 py-1 text-[10px] sm:text-[11px] font-bold rounded-full transition-all text-white/80 hover:text-white">
                                Haulage
                            </button>
                            <button
                                onclick="switchHeroTab('infra', 'https://images.pexels.com/photos/37102469/pexels-photo-37102469.jpeg', 'Energy Infrastructure &amp; Tank Farms')"
                                id="tab-btn-infra"
                                class="hero-tab-btn px-2.5 sm:px-3 py-1 text-[10px] sm:text-[11px] font-bold rounded-full transition-all text-white/80 hover:text-white">
                                Infrastructure
                            </button>
                        </div>

                        {{-- Caption Banner on Image Bottom --}}
                        <div class="absolute bottom-3 left-3 right-3 sm:bottom-4 sm:left-4 sm:right-4 z-20">
                            <div class="glass-card-dark p-3.5 sm:p-4 rounded-xl sm:rounded-2xl text-white">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <span
                                            class="text-[9px] sm:text-[10px] font-bold uppercase tracking-widest text-[#F5850F]">Operational
                                            Showcase</span>
                                        <p id="hero-img-caption" class="text-xs sm:text-sm font-bold text-white mt-0.5">
                                            Petroleum Fuel Supply Operations</p>
                                    </div>
                                    <span
                                        class="flex items-center gap-1.5 text-[10px] sm:text-[11px] font-semibold bg-white/10 px-2.5 py-1 rounded-full border border-white/15">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                        24/7 Dispatch
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- Floating Badges --}}
                <div
                    class="absolute -top-4 -left-4 sm:-left-6 z-30 hidden sm:flex items-center gap-3 glass-card px-4 py-3 rounded-2xl shadow-xl border border-white/80">
                    <div class="w-9 h-9 rounded-xl bg-[#0B332B] flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[9px] font-extrabold uppercase tracking-wider text-[#F5850F]">Compliance
                            Guaranteed</p>
                        <p class="text-xs font-extrabold text-[#0B332B]">NMDPRA &amp; DPR Licensed</p>
                    </div>
                </div>

                <div
                    class="absolute -bottom-5 -right-4 sm:-right-6 z-30 hidden sm:flex items-center gap-3 glass-card px-4 py-3 rounded-2xl shadow-xl border border-white/80">
                    <div class="flex -space-x-2 shrink-0">
                        <div
                            class="w-7 h-7 rounded-full bg-[#0B332B] border-2 border-white flex items-center justify-center text-white text-[10px] font-bold">
                            A</div>
                        <div
                            class="w-7 h-7 rounded-full bg-[#F5850F] border-2 border-white flex items-center justify-center text-white text-[10px] font-bold">
                            O</div>
                        <div
                            class="w-7 h-7 rounded-full bg-[#0B332B] border-2 border-white flex items-center justify-center text-white text-[10px] font-bold">
                            N</div>
                    </div>
                    <div>
                        <p class="text-sm font-black text-[#0B332B] leading-none">850M+ Litres</p>
                        <p class="text-[9px] font-semibold text-[#2A2A2A]/60 mt-0.5">Traded Across 36 States</p>
                    </div>
                </div>

            </div>

        </div>

        {{-- BASE OPERATIONS STRIP --}}


        {{-- STATS STRIP --}}
        <div
            class="mt-6 sm:mt-8 pt-6 border-t border-[#0B332B]/8 grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 text-center sm:text-left">
            <div>
                <p class="font-display text-xl sm:text-3xl font-black text-[#0B332B]">850M+</p>
                <p class="text-[10px] sm:text-[11px] font-bold text-[#2A2A2A]/50 uppercase tracking-wider mt-0.5">
                    Litres Traded</p>
            </div>
            <div>
                <p class="font-display text-xl sm:text-3xl font-black text-[#F5850F]">36</p>
                <p class="text-[10px] sm:text-[11px] font-bold text-[#2A2A2A]/50 uppercase tracking-wider mt-0.5">
                    States Covered</p>
            </div>
            <div>
                <p class="font-display text-xl sm:text-3xl font-black text-[#0B332B]">9+</p>
                <p class="text-[10px] sm:text-[11px] font-bold text-[#2A2A2A]/50 uppercase tracking-wider mt-0.5">
                    Product Types</p>
            </div>
            <div>
                <p class="font-display text-xl sm:text-3xl font-black text-[#0B332B]">24/7</p>
                <p class="text-[10px] sm:text-[11px] font-bold text-[#2A2A2A]/50 uppercase tracking-wider mt-0.5">Fleet
                    Dispatch</p>
            </div>
        </div>

    </div>

</section>

<script>
    function switchHeroTab(key, imgSrc, captionText) {
        var imgEl = document.getElementById('hero-dynamic-img');
        var captionEl = document.getElementById('hero-img-caption');

        if (imgEl && captionEl) {
            imgEl.style.opacity = '0.4';
            imgEl.style.transform = 'scale(0.98)';

            setTimeout(function() {
                imgEl.src = imgSrc;
                captionEl.textContent = captionText;
                imgEl.style.opacity = '1';
                imgEl.style.transform = 'scale(1)';
            }, 200);
        }

        var tabs = ['supply', 'haulage', 'infra'];
        tabs.forEach(function(t) {
            var btn = document.getElementById('tab-btn-' + t);
            if (btn) {
                if (t === key) {
                    btn.className =
                        'hero-tab-btn px-2.5 sm:px-3 py-1 text-[10px] sm:text-[11px] font-bold rounded-full transition-all bg-[#F5850F] text-white shadow-sm';
                } else {
                    btn.className =
                        'hero-tab-btn px-2.5 sm:px-3 py-1 text-[10px] sm:text-[11px] font-bold rounded-full transition-all text-white/80 hover:text-white';
                }
            }
        });
    }
</script>
