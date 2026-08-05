{{-- ══════════════════════════════════════════════════════════════════════════
     HERO SECTION — Alms Oil Nigeria Limited
     · Tightly Mobile Responsive
     · High-quality Unsplash stock images (oil/fuel/industrial — contextually relevant)
     · Interactive tabbed photo preview & floating glassmorphism badges
══════════════════════════════════════════════════════════════════════════ --}}
<section class="relative bg-[#FDFDFC] overflow-hidden pt-4 sm:pt-6 pb-10 sm:pb-12 lg:pb-16 border-b border-[#0B332B]/8">

  {{-- Ambient Glows --}}
  <div class="absolute top-0 right-1/4 w-72 sm:w-96 h-72 sm:h-96 bg-[#F5850F]/8 rounded-full blur-3xl pointer-events-none -z-10 select-none"></div>
  <div class="absolute bottom-10 left-10 w-60 sm:w-80 h-60 sm:h-80 bg-[#0B332B]/5 rounded-full blur-3xl pointer-events-none -z-10 select-none"></div>

  {{-- ── MAIN CONTAINER ────────────────────────────────────────────────── --}}
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 pt-4 sm:pt-6 lg:pt-10">

    {{-- Grid Layout --}}
    <div class="grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] xl:grid-cols-[1.15fr_0.85fr] gap-8 lg:gap-14 items-center">

      {{-- ════════════════════════════════════════════════════
           LEFT COLUMN — Copy + Action Pills
      ════════════════════════════════════════════════════ --}}
      <div class="relative z-20 hero-el space-y-4 sm:space-y-6">

        {{-- Overline Badge --}}
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#0B332B]/5 border border-[#0B332B]/12">
          <span class="flex h-2 w-2 relative">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#F5850F] opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#F5850F]"></span>
          </span>
          <span class="text-[10px] sm:text-[11px] font-bold tracking-[0.18em] sm:tracking-[0.22em] uppercase text-[#0B332B]">
            NMDPRA LICENSED · INTEGRATED ENERGY LEADER
          </span>
        </div>

        {{-- MAIN HEADLINE --}}
        <h1 class="font-display font-extrabold text-[#0B332B] tracking-tight leading-[1.05] text-3xl sm:text-5xl lg:text-6xl xl:text-7xl">
          Powering Nigeria's <br/>
          <span class="text-[#F5850F] relative inline-block">
            Energy Growth.
            <svg class="absolute -bottom-1.5 left-0 w-full h-2.5 text-[#F5850F]/30 pointer-events-none" viewBox="0 0 200 12" fill="none" preserveAspectRatio="none">
              <path d="M2 9C50 3 150 3 198 9" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
            </svg>
          </span>
        </h1>

        {{-- SUBTEXT --}}
        <p class="text-[#2A2A2A]/75 text-sm sm:text-base lg:text-lg leading-relaxed max-w-xl">
          Tier-1 petroleum product sourcing, GPS-tracked fleet haulage, and critical energy infrastructure delivered seamlessly across all 36 Nigerian states.
        </p>

        {{-- ACTION BUTTONS --}}
        <div class="flex flex-wrap items-center gap-3 sm:gap-4 pt-1 sm:pt-2">
          
          {{-- Primary Pill CTA --}}
          <button data-open-quote
                  class="group inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-[#F5850F] to-[#e07708] text-white
                         font-bold text-xs sm:text-sm uppercase tracking-wider
                         px-6 sm:px-8 py-3.5 sm:py-4 rounded-full w-full sm:w-auto
                         hover:shadow-lg hover:shadow-[#F5850F]/30 hover:-translate-y-0.5 active:translate-y-0
                         transition-all duration-200 cursor-pointer">
            <span>Request Supply</span>
            <span class="flex items-center justify-center w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors">
              <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
              </svg>
            </span>
          </button>

          {{-- Secondary Action Button --}}
          <a href="{{ route('services.petroleum') }}"
             class="inline-flex items-center justify-center gap-2 px-6 sm:px-7 py-3.5 sm:py-4 rounded-full border border-[#0B332B]/20 bg-white text-[#0B332B] font-bold text-xs sm:text-sm tracking-wide hover:bg-[#0B332B] hover:text-white hover:border-[#0B332B] transition-all duration-200 w-full sm:w-auto text-center">
            <span>Our Products &amp; Fleet</span>
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </a>

        </div>

        {{-- Trust Badges --}}
        <div class="pt-2 sm:pt-3 flex flex-wrap items-center gap-4 sm:gap-6 text-[11px] sm:text-xs text-[#2A2A2A]/70 font-semibold border-t border-[#0B332B]/8 max-w-xl">
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-[#F5850F] shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span>Guaranteed Product Quality (AGO, PMS, DPK, ATK)</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-[#F5850F] shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
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
        <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl shadow-[#0B332B]/20 border-2 sm:border-4 border-white bg-[#0B332B]">
          
          {{-- Main Hero Image --}}
          <div class="relative h-[320px] sm:h-[450px] lg:h-[480px] w-full overflow-hidden">
            {{-- 
              Tab 1 — Supply: Large petroleum storage tanks / depot — universal industrial
            --}}
            <img id="hero-dynamic-img"
                 src="https://images.pexels.com/photos/247763/pexels-photo-247763.jpeg?auto=compress&cs=tinysrgb&w=900&q=85"
                 alt="Alms Oil Petroleum Fuel Supply Operations"
                 class="w-full h-full object-cover object-center transition-all duration-700 transform scale-100" />
            
            {{-- Gradient Overlays --}}
            <div class="absolute inset-0 bg-gradient-to-t from-[#0B332B]/90 via-[#0B332B]/25 to-transparent"></div>

            {{-- Interactive Image Selector Pills --}}
            <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20 flex items-center gap-1 bg-black/50 backdrop-blur-md p-1 rounded-full border border-white/20">
              <button onclick="switchHeroTab('supply', 'https://images.pexels.com/photos/247763/pexels-photo-247763.jpeg?auto=compress&cs=tinysrgb&w=900&q=85', 'Petroleum Fuel Supply Operations')"
                      id="tab-btn-supply"
                      class="hero-tab-btn px-2.5 sm:px-3 py-1 text-[10px] sm:text-[11px] font-bold rounded-full transition-all bg-[#F5850F] text-white">
                Supply
              </button>
              <button onclick="switchHeroTab('haulage', 'https://images.pexels.com/photos/1117210/pexels-photo-1117210.jpeg?auto=compress&cs=tinysrgb&w=900&q=85', 'GPS Tanker Fleet Haulage Logistics')"
                      id="tab-btn-haulage"
                      class="hero-tab-btn px-2.5 sm:px-3 py-1 text-[10px] sm:text-[11px] font-bold rounded-full transition-all text-white/80 hover:text-white">
                Haulage
              </button>
              <button onclick="switchHeroTab('infra', 'https://images.pexels.com/photos/3850512/pexels-photo-3850512.jpeg?auto=compress&cs=tinysrgb&w=900&q=85', 'Energy Infrastructure &amp; Tank Farms')"
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
                    <span class="text-[9px] sm:text-[10px] font-bold uppercase tracking-widest text-[#F5850F]">Operational Showcase</span>
                    <p id="hero-img-caption" class="text-xs sm:text-sm font-bold text-white mt-0.5">Petroleum Fuel Supply Operations</p>
                  </div>
                  <span class="flex items-center gap-1.5 text-[10px] sm:text-[11px] font-semibold bg-white/10 px-2.5 py-1 rounded-full border border-white/15">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    24/7 Dispatch
                  </span>
                </div>
              </div>
            </div>

          </div>

        </div>

        {{-- Floating Badges --}}
        <div class="absolute -top-4 -left-4 sm:-left-6 z-30 hidden sm:flex items-center gap-3 glass-card px-4 py-3 rounded-2xl shadow-xl border border-white/80">
          <div class="w-9 h-9 rounded-xl bg-[#0B332B] flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <div>
            <p class="text-[9px] font-extrabold uppercase tracking-wider text-[#F5850F]">Compliance Guaranteed</p>
            <p class="text-xs font-extrabold text-[#0B332B]">NMDPRA &amp; DPR Licensed</p>
          </div>
        </div>

        <div class="absolute -bottom-5 -right-4 sm:-right-6 z-30 hidden sm:flex items-center gap-3 glass-card px-4 py-3 rounded-2xl shadow-xl border border-white/80">
          <div class="flex -space-x-2 shrink-0">
            <div class="w-7 h-7 rounded-full bg-[#0B332B] border-2 border-white flex items-center justify-center text-white text-[10px] font-bold">A</div>
            <div class="w-7 h-7 rounded-full bg-[#F5850F] border-2 border-white flex items-center justify-center text-white text-[10px] font-bold">O</div>
            <div class="w-7 h-7 rounded-full bg-[#0B332B] border-2 border-white flex items-center justify-center text-white text-[10px] font-bold">N</div>
          </div>
          <div>
            <p class="text-sm font-black text-[#0B332B] leading-none">850M+ Litres</p>
            <p class="text-[9px] font-semibold text-[#2A2A2A]/60 mt-0.5">Traded Across 36 States</p>
          </div>
        </div>

      </div>

    </div>

    {{-- BASE OPERATIONS STRIP --}}
    <div class="mt-10 sm:mt-14 pt-6 sm:pt-8 border-t border-[#0B332B]/10">
      
      <div class="flex items-center justify-between mb-4 sm:mb-5">
        <h2 class="text-[10px] sm:text-xs font-bold tracking-[0.22em] uppercase text-[#0B332B]">
          Core Operational Pillars
        </h2>
        <span class="text-[11px] font-semibold text-[#F5850F]">Nationwide Coverage</span>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
        
        {{-- Pillar 1 — Petroleum Supply --}}
        <a href="{{ route('services.petroleum') }}"
           class="group flex items-center gap-3.5 p-3 sm:p-3.5 rounded-2xl bg-white border border-[#0B332B]/10 hover:border-[#F5850F] hover:shadow-md transition-all duration-200">
          <div class="w-12 h-12 rounded-xl overflow-hidden shrink-0 bg-[#0B332B]">
            {{-- Petroleum storage tanks — universal industrial --}}
            <img src="https://images.pexels.com/photos/247763/pexels-photo-247763.jpeg?auto=compress&cs=tinysrgb&w=120&q=80"
                 alt="Petroleum Supply" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"/>
          </div>
          <div class="min-w-0">
            <h3 class="text-xs font-bold text-[#0B332B] group-hover:text-[#F5850F] transition-colors">Petroleum Supply</h3>
            <p class="text-[11px] text-[#2A2A2A]/60 truncate mt-0.5">AGO · PMS · DPK · ATK</p>
          </div>
        </a>

        {{-- Pillar 2 — Haulage & Logistics --}}
        <a href="{{ route('services.logistics') }}"
           class="group flex items-center gap-3.5 p-3 sm:p-3.5 rounded-2xl bg-white border border-[#0B332B]/10 hover:border-[#F5850F] hover:shadow-md transition-all duration-200">
          <div class="w-12 h-12 rounded-xl overflow-hidden shrink-0 bg-[#0B332B]">
            {{-- Tanker trucks on road — haulage logistics --}}
            <img src="https://images.pexels.com/photos/1117210/pexels-photo-1117210.jpeg?auto=compress&cs=tinysrgb&w=120&q=80"
                 alt="Haulage & Logistics" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"/>
          </div>
          <div class="min-w-0">
            <h3 class="text-xs font-bold text-[#0B332B] group-hover:text-[#F5850F] transition-colors">Haulage &amp; Logistics</h3>
            <p class="text-[11px] text-[#2A2A2A]/60 truncate mt-0.5">GPS-tracked Fleet</p>
          </div>
        </a>

        {{-- Pillar 3 — Infrastructure --}}
        <a href="{{ route('services.infrastructure') }}"
           class="group flex items-center gap-3.5 p-3 sm:p-3.5 rounded-2xl bg-white border border-[#0B332B]/10 hover:border-[#F5850F] hover:shadow-md transition-all duration-200">
          <div class="w-12 h-12 rounded-xl overflow-hidden shrink-0 bg-[#0B332B]">
            {{-- Oil refinery infrastructure / pipework --}}
            <img src="https://images.pexels.com/photos/3850512/pexels-photo-3850512.jpeg?auto=compress&cs=tinysrgb&w=120&q=80"
                 alt="Energy Infrastructure" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"/>
          </div>
          <div class="min-w-0">
            <h3 class="text-xs font-bold text-[#0B332B] group-hover:text-[#F5850F] transition-colors">Infrastructure</h3>
            <p class="text-[11px] text-[#2A2A2A]/60 truncate mt-0.5">Tank Farms &amp; Stations</p>
          </div>
        </a>

        {{-- Pillar 4 — Engineering --}}
        <a href="{{ route('services.engineering') }}"
           class="group flex items-center gap-3.5 p-3 sm:p-3.5 rounded-2xl bg-white border border-[#0B332B]/10 hover:border-[#F5850F] hover:shadow-md transition-all duration-200">
          <div class="w-12 h-12 rounded-xl overflow-hidden shrink-0 bg-[#0B332B]">
            {{-- Black engineer / industrial worker — African context --}}
            <img src="https://images.pexels.com/photos/3862132/pexels-photo-3862132.jpeg?auto=compress&cs=tinysrgb&w=120&q=80"
                 alt="Engineering Services" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"/>
          </div>
          <div class="min-w-0">
            <h3 class="text-xs font-bold text-[#0B332B] group-hover:text-[#F5850F] transition-colors">Engineering</h3>
            <p class="text-[11px] text-[#2A2A2A]/60 truncate mt-0.5">Maintenance &amp; Procurement</p>
          </div>
        </a>

      </div>

    </div>

    {{-- STATS STRIP --}}
    <div class="mt-6 sm:mt-8 pt-6 border-t border-[#0B332B]/8 grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 text-center sm:text-left">
      <div>
        <p class="font-display text-xl sm:text-3xl font-black text-[#0B332B]">850M+</p>
        <p class="text-[10px] sm:text-[11px] font-bold text-[#2A2A2A]/50 uppercase tracking-wider mt-0.5">Litres Traded</p>
      </div>
      <div>
        <p class="font-display text-xl sm:text-3xl font-black text-[#F5850F]">36</p>
        <p class="text-[10px] sm:text-[11px] font-bold text-[#2A2A2A]/50 uppercase tracking-wider mt-0.5">States Covered</p>
      </div>
      <div>
        <p class="font-display text-xl sm:text-3xl font-black text-[#0B332B]">9+</p>
        <p class="text-[10px] sm:text-[11px] font-bold text-[#2A2A2A]/50 uppercase tracking-wider mt-0.5">Product Types</p>
      </div>
      <div>
        <p class="font-display text-xl sm:text-3xl font-black text-[#0B332B]">24/7</p>
        <p class="text-[10px] sm:text-[11px] font-bold text-[#2A2A2A]/50 uppercase tracking-wider mt-0.5">Fleet Dispatch</p>
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
        btn.className = 'hero-tab-btn px-2.5 sm:px-3 py-1 text-[10px] sm:text-[11px] font-bold rounded-full transition-all bg-[#F5850F] text-white shadow-sm';
      } else {
        btn.className = 'hero-tab-btn px-2.5 sm:px-3 py-1 text-[10px] sm:text-[11px] font-bold rounded-full transition-all text-white/80 hover:text-white';
      }
    }
  });
}
</script>
