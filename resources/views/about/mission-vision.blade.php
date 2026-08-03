<section class="bg-[#F0F0EF] py-20 sm:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="text-center mb-12 sm:mb-16">
      <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-[#0B332B]/10 mb-4">
        <span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>
        <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-[#0B332B]/60">Purpose & Direction</span>
      </div>
      <h2 class="font-display font-black text-[#0B332B] leading-tight tracking-tight" style="font-size:clamp(1.9rem,4vw,3rem)">What drives us forward</h2>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">
      {{-- MISSION --}}
      <div class="bg-[#0B332B] rounded-[2rem] p-8 sm:p-10 flex flex-col justify-between relative overflow-hidden min-h-[380px]">
        <div class="absolute top-0 left-0 w-64 h-64 bg-[#F5850F]/8 rounded-full blur-3xl -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-white/3 rounded-full blur-2xl pointer-events-none"></div>
        <div class="relative z-10">
          <div class="inline-flex items-center gap-2 bg-[#F5850F]/15 border border-[#F5850F]/20 rounded-full px-3.5 py-1.5 mb-6">
            <svg class="w-3 h-3 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
            <span class="text-[10px] font-bold uppercase tracking-[0.22em] text-[#F5850F]">Mission</span>
          </div>
          <h3 class="font-display font-black text-white leading-tight mb-4" style="font-size:clamp(1.6rem,3vw,2.4rem)">Power the engine of Nigerian industry.</h3>
          <p class="text-white/65 text-sm sm:text-base leading-relaxed">To provide Nigerian businesses with reliable, compliant, and technically superior petroleum products and energy services — eliminating operational downtime and enabling industrial growth at every scale.</p>
        </div>
        <div class="relative z-10 mt-8 pt-6 border-t border-white/10">
          <div class="flex items-center gap-2">
            @foreach(['Safety','Integrity','Precision'] as $pillar)
              <span class="text-[9px] font-bold uppercase tracking-wider text-[#F5850F]/70 bg-[#F5850F]/10 border border-[#F5850F]/15 rounded-full px-2.5 py-1">{{ $pillar }}</span>
            @endforeach
          </div>
        </div>
      </div>
      {{-- VISION --}}
      <div class="bg-white rounded-[2rem] p-8 sm:p-10 flex flex-col justify-between relative overflow-hidden min-h-[380px] border border-[#0B332B]/8">
        <div class="absolute bottom-4 right-4 font-display font-black text-[#0B332B]/4 leading-none pointer-events-none select-none" style="font-size:9rem;line-height:1">2030</div>
        <div class="relative z-10">
          <div class="inline-flex items-center gap-2 bg-[#0B332B]/6 border border-[#0B332B]/10 rounded-full px-3.5 py-1.5 mb-6">
            <svg class="w-3 h-3 text-[#0B332B]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
            </svg>
            <span class="text-[10px] font-bold uppercase tracking-[0.22em] text-[#0B332B]/60">Vision</span>
          </div>
          <h3 class="font-display font-black text-[#0B332B] leading-tight mb-4" style="font-size:clamp(1.6rem,3vw,2.4rem)">West Africa's leading integrated energy services group.</h3>
          <p class="text-[#2A2A2A]/60 text-sm sm:text-base leading-relaxed">By 2030, to be the most trusted downstream petroleum and energy services company in West Africa — recognised for operational excellence, regulatory leadership, and building lasting value for all stakeholders.</p>
        </div>
        <div class="relative z-10 mt-8 pt-6 border-t border-[#0B332B]/8">
          <div class="flex items-center gap-3">
            <div class="flex -space-x-1.5">
              @foreach(['#0B332B','#1a5c4e','#F5850F'] as $col)
                <div class="w-7 h-7 rounded-full border-2 border-white" style="background:{{ $col }}"></div>
              @endforeach
            </div>
            <p class="text-[11px] text-[#2A2A2A]/50 font-medium">Driven by a unified, expert team</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
