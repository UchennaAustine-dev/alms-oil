@php
  $aboutCerts = [
    ['NMDPRA','Licensed Downstream Operator','Fully licenced by the Nigerian Midstream & Downstream Petroleum Regulatory Authority for petroleum marketing and distribution.','#F5850F','M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
    ['ISO 9001','Quality Management','ISO 9001:2015 certified across all product handling, testing, and delivery operations. Third-party audited annually.','#0B332B','M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z'],
    ['PIA 2021','Petroleum Industry Act','Operations fully structured in compliance with the Petroleum Industry Act 2021 — the most comprehensive reform of Nigeria\'s oil sector.','#F5850F','M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'],
    ['CAC','Corporate Registered','Registered with the Corporate Affairs Commission of Nigeria. Full corporate governance, annual filing, and director disclosure maintained.','#0B332B','M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
  ];
@endphp
<section class="bg-[#F0F0EF] py-14 sm:py-20 border-y border-[#0B332B]/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="text-center mb-10">
      <span class="text-[14px] font-bold tracking-[0.3em] uppercase text-[#0B332B]/40">Accreditations & Compliance</span>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-5">
      @foreach($aboutCerts as [$badge,$title,$desc,$color,$path])
        <div class="bg-white rounded-2xl p-5 border border-[#0B332B]/8 hover:border-[#F5850F]/30 hover:shadow-lg transition-all duration-300">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3 shrink-0" style="background:{{ $color }}15;border:1px solid {{ $color }}20">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="{{ $color }}" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="{{ $path }}"/>
            </svg>
          </div>
          <span class="font-display font-black text-[#0B332B] text-lg leading-none block mb-1">{{ $badge }}</span>
          <p class="text-[13px] font-bold text-[#0B332B]/60 mb-2">{{ $title }}</p>
          <p class="text-base text-[#2A2A2A]/50 hidden sm:block">{{ $desc }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
