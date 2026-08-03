<section class="bg-[#0B332B] py-16 sm:py-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none opacity-[0.04]"
       style="background-image:linear-gradient(#fff 1px,transparent 1px),linear-gradient(90deg,#fff 1px,transparent 1px);background-size:60px 60px"></div>
  <div class="absolute top-0 left-0 w-96 h-96 bg-[#F5850F]/8 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
  <div class="absolute bottom-0 right-0 w-64 h-64 bg-white/3 rounded-full blur-2xl pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 relative z-10">
    <div class="text-center mb-10 sm:mb-14">
      <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-[#F5850F]/80">Impact in Numbers</span>
    </div>
    @php
      $aboutStats = [
        ['850','M+','Litres Delivered','Total petroleum products supplied across Nigeria'],
        ['36','','States Covered','Pan-Nigeria distribution reach, every state served'],
        ['98.5','%','On-Time Delivery','GPS-tracked fleet reliability rate since 2019'],
        ['15','+','Years in Operation','Over a decade of uninterrupted energy service'],
      ];
    @endphp
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-px bg-white/8 rounded-3xl overflow-hidden border border-white/8">
      @foreach($aboutStats as [$num,$suffix,$label,$desc])
        <div class="about-counter bg-[#0B332B] px-6 sm:px-8 py-8 sm:py-10 flex flex-col gap-2"
             data-target="{{ $num }}" data-suffix="{{ $suffix }}">
          <div class="flex items-end gap-1 leading-none">
            <span class="font-display font-black text-white about-counter-num" style="font-size:clamp(2.4rem,5vw,4rem)">{{ $num }}</span>
            <span class="font-display font-black text-[#F5850F] mb-1" style="font-size:clamp(1.4rem,2.5vw,2rem)">{{ $suffix }}</span>
          </div>
          <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-white/50 mt-1">{{ $label }}</p>
          <p class="text-[11px] text-white/30 leading-relaxed hidden sm:block">{{ $desc }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
