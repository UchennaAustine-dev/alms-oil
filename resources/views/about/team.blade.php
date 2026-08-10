@php
  $aboutTeam = [
    ['Chief Executive Officer','Energy Strategy & Downstream Operations','Leads Alms Oil\'s strategic vision with 20+ years in Nigerian petroleum downstream, including senior roles at NNPC subsidiaries.','https://images.pexels.com/photos/34687890/pexels-photo-34687890.jpeg?auto=compress&cs=tinysrgb&w=600&q=85','AO'],
    ['Director of Operations','Logistics & Fleet Management','Oversees the entire GPS-tracked tanker fleet and depot operations, ensuring every delivery meets our 98.5% on-time benchmark.','https://images.unsplash.com/photo-1522529599102-193c0d76b5b6?auto=format&fit=crop&w=600&q=80','DL'],
    ['Technical Director','HSE & Quality Assurance','Champions our ISO 9001 quality framework and all HSE protocols across tank farm, fleet, and customer site operations.','https://images.pexels.com/photos/8487795/pexels-photo-8487795.jpeg?auto=compress&cs=tinysrgb&w=600&q=85','TD'],
    ['Commercial Director','Business Development & Trade','Manages our national commercial partnerships, bulk trading relationships, and West African market expansion.','https://images.pexels.com/photos/34690061/pexels-photo-34690061.jpeg?auto=compress&cs=tinysrgb&w=600&q=85','CD'],
  ];
@endphp
<section class="bg-[#FAFAF8] py-20 sm:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-14">
      <div>
        
        <h2 class="font-display font-black text-[#0B332B] leading-tight tracking-tight" style="font-size:clamp(1.9rem,4vw,3rem)">Industry experts behind<br/>every delivery</h2>
      </div>
      <p class="text-[#2A2A2A]/55 text-base max-w-xs ">Our leadership team brings combined decades of Nigerian downstream energy operations experience.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6">
      @foreach($aboutTeam as $i => [$role,$dept,$bio,$img,$initials])
        <div class="group relative bg-white rounded-[1.5rem] overflow-hidden border border-[#0B332B]/8 hover:border-[#F5850F]/30 hover:shadow-xl transition-all duration-300 {{ $i % 2 === 1 ? 'sm:mt-8' : '' }}">
          <div class="relative h-56 overflow-hidden bg-[#0B332B]/5">
            <img src="{{ $img }}" alt="{{ $role }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" style="filter:saturate(0.8)" />
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300" style="background:linear-gradient(to top,rgba(11,51,43,0.92) 0%,rgba(11,51,43,0.5) 55%,transparent 100%)"></div>
            <div class="absolute inset-x-4 bottom-4 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0">
              <p class="text-white/85 text-[14px]">{{ $bio }}</p>
            </div>
          </div>
          <div class="p-5">
            <div class="flex items-start justify-between gap-2 mb-1">
              <div>
                <p class="text-[9px] font-bold uppercase tracking-wider text-[#F5850F] mb-1">{{ $dept }}</p>
                <h3 class="font-display font-bold text-[#0B332B] text-base leading-snug">{{ $role }}</h3>
              </div>
              <div class="w-8 h-8 rounded-full bg-[#0B332B] flex items-center justify-center text-white font-bold text-[10px] shrink-0">{{ $initials }}</div>
            </div>
            <div class="flex items-center gap-1.5 mt-3 pt-3 border-t border-[#0B332B]/8">
              <div class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></div>
              <span class="text-[10px] text-[#2A2A2A]/40 font-medium">Alms Oil Nigeria Limited</span>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="mt-10 sm:mt-12 bg-[#0B332B]/4 border border-[#0B332B]/8 rounded-2xl px-6 py-5 flex flex-col sm:flex-row items-center gap-4 max-w-2xl">
      <div class="w-10 h-10 rounded-full bg-[#F5850F] flex items-center justify-center shrink-0">
        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
      </div>
      <div>
        <p class="text-[#0B332B] font-bold text-sm">Join a team that powers Nigeria's industry</p>
        <p class="text-[#2A2A2A]/55 text-[13px] mt-0.5">We're growing. If you're passionate about energy operations, logistics, or engineering, <a href="{{ route('contact') }}" class="text-[#F5850F] hover:underline font-semibold">get in touch</a>.</p>
      </div>
    </div>
  </div>
</section>
