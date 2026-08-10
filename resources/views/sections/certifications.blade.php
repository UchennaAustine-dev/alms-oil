{{-- ══════════════════════════════════════════════════════════════════════════
     CERTIFICATIONS & COMPLIANCE MARQUEE
══════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-[#F0F0EF]/80 border-b border-[#0B332B]/8 py-6 overflow-hidden">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 mb-4 flex items-center justify-between">
    <p class="text-[16px] font-extrabold uppercase text-[#0B332B]">
      REGULATORY COMPLIANCE &amp; ACCREDITATIONS
    </p>
    
  </div>

  <div class="relative">
    {{-- Gradient Fades --}}
    <div class="absolute left-0 top-0 bottom-0 w-24 z-10 pointer-events-none bg-gradient-to-r from-[#F0F0EF] to-transparent"></div>
    <div class="absolute right-0 top-0 bottom-0 w-24 z-10 pointer-events-none bg-gradient-to-l from-[#F0F0EF] to-transparent"></div>

    {{-- Marquee Track --}}
    <div class="flex gap-4 animate-marquee w-max py-1">
      @php
        $badges = [
          ['NMDPRA', 'Petroleum Authority'],
          ['NUPRC', 'Upstream Regulatory'],
          ['ISO 9001:2015', 'Quality Standard'],
          ['DPR Licensed', 'Downstream Operations'],
          ['NNPC Partner', 'Direct Terminal Access'],
          ['SON Certified', 'Standard Organization'],
          ['NIMASA Approved', 'Maritime Logistics'],
          ['API Standard', 'American Petroleum Inst.'],
          ['HSE Certified', 'Health & Safety First'],
          ['CAC Registered', 'Incorporated Enterprise']
        ];
      @endphp

      @foreach(array_merge($badges, $badges) as [$title, $sub])
        <div class="flex items-center gap-3 px-5 py-2 rounded-full bg-white border border-[#0B332B]/10 shadow-sm shrink-0 hover:border-[#F5850F] transition-all">
          <div class="w-2 h-2 rounded-full bg-[#F5850F]"></div>
          <div>
            <span class="text-xs font-bold text-[#0B332B] whitespace-nowrap">{{ $title }}</span>
            <span class="text-[10px] text-[#2A2A2A]/50 ml-1.5 font-medium">({{ $sub }})</span>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
