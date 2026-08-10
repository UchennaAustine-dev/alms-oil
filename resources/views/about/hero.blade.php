<section class="relative overflow-hidden bg-[#0B332B]" style="min-height:92vh">
    <div class="absolute inset-0 z-0">
        <img src="https://images.pexels.com/photos/12377481/pexels-photo-12377481.jpeg?auto=compress&cs=tinysrgb&w=1600"
            alt="Petroleum refinery operations" class="w-full h-full object-cover object-center"
            style="filter:saturate(0.7) brightness(0.45) contrast(1.08)" />
        <div class="absolute inset-0"
            style="background:linear-gradient(135deg,rgba(11,51,43,0.82) 0%,rgba(11,51,43,0.45) 50%,rgba(11,51,43,0.7) 100%)">
        </div>
    </div>
    <div class="absolute inset-0 z-[1] pointer-events-none opacity-20"
        style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px">
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 flex flex-col justify-between"
        style="min-height:92vh">
        <div class="pt-8 sm:pt-10 flex items-center gap-2 text-[11px] text-white/40 font-medium">
            <a href="{{ route('home') }}" class="hover:text-white/70 transition-colors">Home</a>
            <span>/</span>
            <span class="text-white/65">About Us</span>
        </div>
        <div class="py-12 sm:py-16 lg:py-20 grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-end">
            <div>
               
                <h1 class="font-display font-bold text-white leading-[0.88] tracking-tight mb-8"
                    style="font-size:clamp(3rem,6.5vw,6rem)">
                    Nigeria's<br />trusted<br />
                    <em class="not-italic"
                        style="-webkit-text-stroke:1.5px rgba(245,133,15,0.7);color:transparent">petroleum</em><br />
                    <span style="color:#F5850F">partner.</span>
                </h1>
                <a href="{{ route('contact') }}"
                    class="group inline-flex items-center gap-3 bg-[#F5850F] hover:bg-[#e07708] text-white font-bold text-sm uppercase tracking-wide pl-7 pr-5 py-4 rounded-full shadow-xl shadow-[#F5850F]/30 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200">
                    Work with us
                    <span
                        class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                </a>
            </div>
            <div class="space-y-4">
                <div class="backdrop-blur-md bg-white/8 border border-white/15 rounded-3xl p-6 sm:p-7">
                    <p class="text-white/80 text-base sm:text-lg leading-relaxed">We connect businesses to reliable
                        petroleum supply, logistics, and energy infrastructure — built on safety, transparency, and
                        operational excellence across all 36 Nigerian states.</p>
                </div>
                <div class="grid grid-cols-3 gap-3">
                    @foreach ([['850M+', 'Litres Supplied', true], ['36', 'States Covered', false], ['24/7', 'Operations', true]] as [$v, $l, $orange])
                        <div
                            class="backdrop-blur-md {{ $orange ? 'bg-[#F5850F]/15 border-[#F5850F]/25' : 'bg-white/8 border-white/12' }} border rounded-2xl px-4 py-4 text-center">
                            <p class="font-display font-black text-white leading-none mb-1"
                                style="font-size:clamp(1.4rem,2.5vw,1.9rem)">{{ $v }}</p>
                            <p
                                class="text-[9px] font-bold uppercase tracking-[0.18em] {{ $orange ? 'text-[#F5850F]/70' : 'text-white/40' }}">
                                {{ $l }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="border-t border-white/8 py-5 flex flex-wrap items-center gap-x-8 gap-y-2">
            @foreach (['NMDPRA Licensed', 'ISO 9001 Certified', 'PIA Compliant', 'CAC Registered'] as $cert)
                <div class="flex items-center gap-2">
                    <div class="w-1 h-1 rounded-full bg-[#F5850F]"></div>
                    <span
                        class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40">{{ $cert }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
