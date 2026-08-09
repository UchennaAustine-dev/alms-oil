@php
  $milestones = [
    ['2009','Founded','Lagos, Nigeria','Alms Oil Nigeria Limited established with a mandate to improve petroleum supply reliability for industrial customers in South-West Nigeria.','https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=600&q=80','#F5850F'],
    ['2012','Logistics Fleet','Fleet Expansion','Acquired our first GPS-tracked petroleum tanker fleet, enabling door-to-door bulk fuel delivery direct to customer facilities.','https://images.pexels.com/photos/31361166/pexels-photo-31361166.jpeg?auto=compress&cs=tinysrgb&w=600&q=85','#0B332B'],
    ['2015','Tank Farm Access','South-West Nigeria','Secured strategic tank farm storage agreements in Lagos and Ogun states, unlocking bulk petroleum reserves and pricing stability.','https://images.pexels.com/photos/2253595/pexels-photo-2253595.jpeg?auto=compress&cs=tinysrgb&w=600&q=85','#F5850F'],
    ['2018','NMDPRA License','Regulatory','Obtained full NMDPRA downstream petroleum marketing licence, cementing our position as a fully-compliant national operator.','https://images.pexels.com/photos/34690061/pexels-photo-34690061.jpeg?auto=compress&cs=tinysrgb&w=600&q=85','#0B332B'],
    ['2021','National Reach','All 36 States','Completed operations across all 36 Nigerian states — from Lagos to Maiduguri — becoming a truly pan-Nigeria energy services company.','https://images.pexels.com/photos/38214019/pexels-photo-38214019.jpeg?auto=compress&cs=tinysrgb&w=600&q=85','#F5850F'],
    ['2024','ISO Certified','Quality Milestone','Achieved ISO 9001:2015 quality management certification across all product categories and delivery operations.','https://images.pexels.com/photos/8487393/pexels-photo-8487393.jpeg?auto=compress&cs=tinysrgb&w=600&q=85','#0B332B'],
  ];
@endphp
<section class="bg-[#FAFAF8] py-20 sm:py-28 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-14">
      <div>
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#F5850F]/8 border border-[#F5850F]/15 mb-4">
          <span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>
          <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-[#F5850F]">Our Journey</span>
        </div>
        <h2 class="font-display font-black text-[#0B332B] leading-tight tracking-tight" style="font-size:clamp(1.9rem,4vw,3rem)">From founding to<br/>nationwide operations</h2>
      </div>
      <p class="text-[#2A2A2A]/55 text-sm sm:text-base max-w-xs leading-relaxed">Key milestones that shaped who we are today and where we're heading next.</p>
    </div>
    {{-- Mobile --}}
    <div class="lg:hidden relative pl-6">
      <div class="absolute left-2 top-0 bottom-0 w-px" style="background:repeating-linear-gradient(to bottom,#0B332B25 0,#0B332B25 8px,transparent 8px,transparent 16px)"></div>
      @foreach($milestones as [$year,$title,$sub,$desc,$img,$color])
        <div class="relative mb-10 last:mb-0">
          <div class="absolute -left-6 top-4 w-4 h-4 rounded-full border-2 border-[#FAFAF8] shadow-md" style="background:{{ $color }}"></div>
          <div class="bg-white rounded-2xl overflow-hidden border border-[#0B332B]/8 shadow-sm">
            <div class="relative h-36 overflow-hidden">
              <img src="{{ $img }}" alt="{{ $title }}" class="w-full h-full object-cover" />
              <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(11,51,43,0.7) 0%,transparent 60%)"></div>
              <div class="absolute bottom-3 left-3"><span class="font-display font-black text-white text-xl leading-none">{{ $year }}</span></div>
            </div>
            <div class="p-4">
              <p class="text-[9px] font-bold uppercase tracking-wider mb-1" style="color:{{ $color }}">{{ $sub }}</p>
              <h3 class="font-display font-bold text-[#0B332B] text-base mb-2">{{ $title }}</h3>
              <p class="text-[#2A2A2A]/60 text-[12px] leading-relaxed">{{ $desc }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Desktop --}}
    <div class="hidden lg:block">
      <div class="relative">
        <div class="absolute top-[5.5rem] left-0 right-0 h-px bg-[#0B332B]/10 z-0"></div>
        <div class="grid grid-cols-6 gap-5 relative z-10">
          @foreach($milestones as $i => [$year,$title,$sub,$desc,$img,$color])
            @php $even = $i % 2 === 0; @endphp
            <div class="flex flex-col {{ $even ? '' : 'flex-col-reverse' }} items-center gap-0">
              <div class="{{ $even ? 'pb-5' : 'pt-5' }} w-full">
                <div class="bg-white rounded-2xl overflow-hidden border border-[#0B332B]/8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                  <div class="relative h-28 overflow-hidden">
                    <img src="{{ $img }}" alt="{{ $title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(11,51,43,0.7) 0%,transparent 55%)"></div>
                  </div>
                  <div class="p-3.5">
                    <p class="text-[9px] font-bold uppercase tracking-wider mb-1" style="color:{{ $color }}">{{ $sub }}</p>
                    <h3 class="font-display font-bold text-[#0B332B] text-sm leading-snug mb-1.5">{{ $title }}</h3>
                    <p class="text-[#2A2A2A]/55 text-[11px] leading-relaxed">{{ $desc }}</p>
                  </div>
                </div>
              </div>
              <div class="flex flex-col items-center shrink-0">
                <div class="{{ $even ? '' : 'order-last' }} w-px h-5 bg-[#0B332B]/15"></div>
                <div class="w-5 h-5 rounded-full border-2 border-[#FAFAF8] shadow-md my-0.5 shrink-0" style="background:{{ $color }}"></div>
                <div class="{{ $even ? 'order-last' : '' }} w-px h-5 bg-[#0B332B]/15"></div>
              </div>
              <div class="{{ $even ? 'pt-2' : 'pb-2' }} text-center">
                <span class="font-display font-black text-sm" style="color:{{ $color }}">{{ $year }}</span>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
