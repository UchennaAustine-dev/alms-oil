{{-- ══════════════════════════════════════════════════════════════════════════
     CORE SERVICES SUITE SECTION — Alms Oil
     · High-quality Unsplash stock images (contextually matched to each service)
     · Tightly Mobile Responsive
══════════════════════════════════════════════════════════════════════════ --}}
<section id="services" class="bg-[#FDFDFC] py-16 sm:py-20 lg:py-28 border-b border-[#0B332B]/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">

    {{-- SECTION HEADER --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 sm:mb-14 lg:mb-16 gap-6">
      <div class="space-y-3 max-w-2xl">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#0B332B]/5 border border-[#0B332B]/10">
          <span class="w-2 h-2 rounded-full bg-[#F5850F]"></span>
          <span class="text-[10px] sm:text-[11px] font-bold tracking-[0.22em] uppercase text-[#0B332B]">
            OUR CORE CAPABILITIES
          </span>
        </div>
        <h2 class="font-display font-black text-[#0B332B] text-2xl sm:text-4xl lg:text-5xl tracking-tight leading-tight">
          Integrated Energy &amp; Infrastructure Services
        </h2>
        <p class="text-[#2A2A2A]/70 text-sm sm:text-base leading-relaxed">
          From bulk fuel trading and nationwide fleet haulage to facility maintenance and tank farm engineering.
        </p>
      </div>

      <a href="{{ route('services.petroleum') }}"
         class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-full border border-[#0B332B]/20 bg-white text-[#0B332B] font-bold text-xs uppercase tracking-wider hover:bg-[#0B332B] hover:text-white transition-all shrink-0 w-full sm:w-auto text-center">
        <span>Explore All Services</span>
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
        </svg>
      </a>
    </div>

    {{-- 4 SERVICES CARDS GRID --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6">

      {{-- Card 1 — Petroleum Supply & Trading --}}
      <div class="group bg-white rounded-3xl p-5 sm:p-6 border border-[#0B332B]/10 hover:border-[#F5850F] shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <div class="space-y-2">
          <div class="relative h-44 sm:h-48 rounded-2xl overflow-hidden bg-[#0B332B]">
            {{-- Petroleum storage tanks / depot --}}
            <img src="https://images.pexels.com/photos/247763/pexels-photo-247763.jpeg?auto=compress&cs=tinysrgb&w=600&q=85"
                 alt="Petroleum Supply & Trading" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
            <span class="absolute top-3 left-3 bg-[#0B332B]/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-[#F5850F]">
              01 · Petroleum Supply
            </span>
          </div>

          <h3 class="font-display font-bold text-[#0B332B] text-lg sm:text-xl group-hover:text-[#F5850F] transition-colors">
            Petroleum Supply &amp; Trading
          </h3>

          <p class="text-xs text-[#2A2A2A]/70 leading-relaxed">
            Bulk sourcing and nationwide supply of certified AGO, PMS, DPK, ATK, and Heavy Fuel Oils.
          </p>

          <ul class="space-y-1.5 pt-2 text-[11px] font-semibold text-[#0B332B]/80">
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>AGO (Diesel) &amp; PMS (Petrol)</li>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>Aviation Jet A-1 &amp; DPK</li>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>Unadulterated Quality Specs</li>
          </ul>
        </div>

        <div class="pt-5 sm:pt-6 mt-5 sm:mt-6 border-t border-[#0B332B]/8 flex items-center justify-between">
          <a href="{{ route('services.petroleum') }}" class="text-xs font-bold text-[#0B332B] hover:text-[#F5850F] transition-colors">
            Details →
          </a>
          <button data-open-quote="Petroleum Supply & Trading" class="px-3.5 py-1.5 rounded-full bg-[#F5850F]/10 hover:bg-[#F5850F] text-[#F5850F] hover:text-white text-[11px] font-bold transition-all cursor-pointer">
            Get Quote
          </button>
        </div>
      </div>

      {{-- Card 2 — Logistics & Fleet Haulage --}}
      <div class="group bg-white rounded-3xl p-5 sm:p-6 border border-[#0B332B]/10 hover:border-[#F5850F] shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <div class="space-y-2">
          <div class="relative h-44 sm:h-48 rounded-2xl overflow-hidden bg-[#0B332B]">
            {{-- Tanker trucks on African road --}}
            <img src="https://images.pexels.com/photos/1117210/pexels-photo-1117210.jpeg?auto=compress&cs=tinysrgb&w=600&q=85"
                 alt="Logistics & Fleet Haulage" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
            <span class="absolute top-3 left-3 bg-[#0B332B]/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-[#F5850F]">
              02 · Logistics
            </span>
          </div>

          <h3 class="font-display font-bold text-[#0B332B] text-lg sm:text-xl group-hover:text-[#F5850F] transition-colors">
            Logistics &amp; Fleet Haulage
          </h3>

          <p class="text-xs text-[#2A2A2A]/70 leading-relaxed">
            36-state haulage distribution network backed by GPS-tracked 33,000L - 60,000L petroleum tankers.
          </p>

          <ul class="space-y-1.5 pt-2 text-[11px] font-semibold text-[#0B332B]/80">
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>Real-time Telemetry Tracking</li>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>36-State Delivery Fleet</li>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>24/7 Emergency Dispatch</li>
          </ul>
        </div>

        <div class="pt-5 sm:pt-6 mt-5 sm:mt-6 border-t border-[#0B332B]/8 flex items-center justify-between">
          <a href="{{ route('services.logistics') }}" class="text-xs font-bold text-[#0B332B] hover:text-[#F5850F] transition-colors">
            Details →
          </a>
          <button data-open-quote="Logistics & Distribution" class="px-3.5 py-1.5 rounded-full bg-[#F5850F]/10 hover:bg-[#F5850F] text-[#F5850F] hover:text-white text-[11px] font-bold transition-all cursor-pointer">
            Get Quote
          </button>
        </div>
      </div>

      {{-- Card 3 — Engineering & Industrial --}}
      <div class="group bg-white rounded-3xl p-5 sm:p-6 border border-[#0B332B]/10 hover:border-[#F5850F] shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <div class="space-y-2">
          <div class="relative h-44 sm:h-48 rounded-2xl overflow-hidden bg-[#0B332B]">
            {{-- Black engineer in hard hat at industrial site --}}
            <img src="https://images.pexels.com/photos/3862132/pexels-photo-3862132.jpeg?auto=compress&cs=tinysrgb&w=600&q=85"
                 alt="Engineering Services" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
            <span class="absolute top-3 left-3 bg-[#0B332B]/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-[#F5850F]">
              03 · Engineering
            </span>
          </div>

          <h3 class="font-display font-bold text-[#0B332B] text-lg sm:text-xl group-hover:text-[#F5850F] transition-colors">
            Engineering &amp; Industrial
          </h3>

          <p class="text-xs text-[#2A2A2A]/70 leading-relaxed">
            Depot maintenance, dispensing equipment calibration, pipeline integrity, and engineering procurement.
          </p>

          <ul class="space-y-1.5 pt-2 text-[11px] font-semibold text-[#0B332B]/80">
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>Depot &amp; Pump Calibration</li>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>Asset Integrity Inspections</li>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>Technical Equipment Supply</li>
          </ul>
        </div>

        <div class="pt-5 sm:pt-6 mt-5 sm:mt-6 border-t border-[#0B332B]/8 flex items-center justify-between">
          <a href="{{ route('services.engineering') }}" class="text-xs font-bold text-[#0B332B] hover:text-[#F5850F] transition-colors">
            Details →
          </a>
          <button data-open-quote="Engineering & Industrial" class="px-3.5 py-1.5 rounded-full bg-[#F5850F]/10 hover:bg-[#F5850F] text-[#F5850F] hover:text-white text-[11px] font-bold transition-all cursor-pointer">
            Get Quote
          </button>
        </div>
      </div>

      {{-- Card 4 — Energy Infrastructure --}}
      <div class="group bg-white rounded-3xl p-5 sm:p-6 border border-[#0B332B]/10 hover:border-[#F5850F] shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <div class="space-y-2">
          <div class="relative h-44 sm:h-48 rounded-2xl overflow-hidden bg-[#0B332B]">
            {{-- Oil refinery / pipeline infrastructure --}}
            <img src="https://images.pexels.com/photos/3850512/pexels-photo-3850512.jpeg?auto=compress&cs=tinysrgb&w=600&q=85"
                 alt="Energy Infrastructure" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
            <span class="absolute top-3 left-3 bg-[#0B332B]/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-[#F5850F]">
              04 · Infrastructure
            </span>
          </div>

          <h3 class="font-display font-bold text-[#0B332B] text-lg sm:text-xl group-hover:text-[#F5850F] transition-colors">
            Energy Infrastructure
          </h3>

          <p class="text-xs text-[#2A2A2A]/70 leading-relaxed">
            Tank farms, filling stations, and LPG skid plant development — from initial design to commissioning.
          </p>

          <ul class="space-y-1.5 pt-2 text-[11px] font-semibold text-[#0B332B]/80">
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>Tank Farm Development</li>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>Retail Fuel Station Setup</li>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>LPG Depot &amp; Skid Plants</li>
          </ul>
        </div>

        <div class="pt-5 sm:pt-6 mt-5 sm:mt-6 border-t border-[#0B332B]/8 flex items-center justify-between">
          <a href="{{ route('services.infrastructure') }}" class="text-xs font-bold text-[#0B332B] hover:text-[#F5850F] transition-colors">
            Details →
          </a>
          <button data-open-quote="Energy Infrastructure" class="px-3.5 py-1.5 rounded-full bg-[#F5850F]/10 hover:bg-[#F5850F] text-[#F5850F] hover:text-white text-[11px] font-bold transition-all cursor-pointer">
            Get Quote
          </button>
        </div>
      </div>

    </div>

  </div>
</section>
