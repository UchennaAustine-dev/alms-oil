<section class="bg-[#F0F0EF] py-20 sm:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <div
                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-[#0B332B]/10 mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></span>
                <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-[#0B332B]/60">Why Alms Oil</span>
            </div>
            <h2 class="font-display font-black text-[#0B332B] leading-tight tracking-tight mb-3"
                style="font-size:clamp(1.9rem,4vw,3rem)">The standard every delivery is measured against</h2>
            <p class="text-[#2A2A2A]/55 text-sm sm:text-base leading-relaxed">Industrial clients choose us when
                operational continuity is non-negotiable. Here's what sets our service apart.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
            {{-- 1. GPS Fleet photo --}}
            <div class="relative rounded-[1.5rem] overflow-hidden shadow-xl h-64 sm:h-80 group">
                <img src="https://images.pexels.com/photos/5329533/pexels-photo-5329533.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="GPS tracked petroleum tanker fleet"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                <div class="absolute inset-0"
                    style="background:linear-gradient(to top,rgba(11,51,43,0.9) 0%,rgba(11,51,43,0.3) 55%,transparent 100%)">
                </div>
                <div class="absolute inset-x-5 bottom-5">
                    <div
                        class="inline-flex items-center gap-1.5 bg-[#F5850F]/20 border border-[#F5850F]/25 backdrop-blur-sm rounded-full px-3 py-1 mb-2">
                        <div class="w-1.5 h-1.5 rounded-full bg-[#F5850F] animate-pulse"></div>
                        <span class="text-[9px] font-bold uppercase tracking-wider text-[#F5850F]">Live Fleet
                            Tracking</span>
                    </div>
                    <h3 class="font-display font-bold text-white text-lg leading-snug">GPS Telemetry on Every Tanker
                    </h3>
                    <p class="text-white/65 text-[12px] mt-1 leading-relaxed">Real-time location, temperature, and
                        volume telemetry across our entire delivery fleet.</p>
                </div>
            </div>
            {{-- 2. Dark stat card --}}
            <div
                class="bg-[#0B332B] rounded-[1.5rem] p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-[#F5850F]/10 rounded-full blur-2xl pointer-events-none">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-10 h-10 rounded-2xl bg-[#F5850F]/15 border border-[#F5850F]/20 flex items-center justify-center mb-6">
                        <svg class="w-5 h-5 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="font-display font-black text-white leading-none mb-2"
                        style="font-size:clamp(2.5rem,4vw,3.5rem)">99.8%</p>
                    <p class="text-[#F5850F] font-bold text-sm mb-3">Product Specification Accuracy</p>
                    <p class="text-white/55 text-[12px] leading-relaxed">Every batch independently tested against
                        DPR/NMDPRA product specifications before dispatch from our depot.</p>
                </div>
                <div class="relative z-10 mt-6 pt-5 border-t border-white/10 flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-[10px] font-bold text-white/40 uppercase tracking-wider">ISO 9001 Certified
                        Process</span>
                </div>
            </div>
            {{-- 3. Compliance checklist --}}
            <div class="bg-white rounded-[1.5rem] p-7 sm:p-8 border border-[#0B332B]/8 flex flex-col gap-5">
                <div>
                    <div
                        class="w-10 h-10 rounded-2xl bg-[#0B332B]/6 border border-[#0B332B]/10 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-[#0B332B]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-[#0B332B] text-lg leading-snug mb-1">Full Compliance, Zero
                        Shortcuts</h3>
                    <p class="text-[#2A2A2A]/55 text-[12px] leading-relaxed">Every delivery backed by PIA-compliant
                        documentation, NMDPRA reporting, and full waybill trail.</p>
                </div>
                <div class="space-y-2.5">
                    @foreach (['NMDPRA downstream licence', 'PIA 2021 compliant operations', 'Full waybill & delivery documentation', 'HSE site safety protocols', 'CAC registered & audited annually'] as $feat)
                        <div class="flex items-center gap-2.5">
                            <div class="w-4 h-4 rounded-full bg-[#0B332B]/8 flex items-center justify-center shrink-0">
                                <svg class="w-2.5 h-2.5 text-[#0B332B]" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-[12px] text-[#2A2A2A]/65">{{ $feat }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- 4. Tank farm photo --}}
            <div class="relative rounded-3xl overflow-hidden shadow-xl h-56 sm:h-64 group">
                <img src="https://images.pexels.com/photos/2253595/pexels-photo-2253595.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Tank farm petroleum storage"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                <div class="absolute inset-0"
                    style="background:linear-gradient(to top,rgba(11,51,43,0.85) 0%,transparent 60%)"></div>
                <div class="absolute inset-x-5 bottom-5">
                    <span class="text-[9px] font-bold uppercase tracking-wider text-alms-orange block mb-1">Bulk
                        Storage</span>
                    <h3 class="font-display font-bold text-white text-base leading-snug">Strategic Tank Farm Reserves
                    </h3>
                </div>
            </div>
            {{-- 5. Emergency dispatch --}}
            <div
                class="bg-alms-orange rounded-3xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute bottom-0 right-0 w-40 h-40 bg-white/10 rounded-full blur-2xl pointer-events-none">
                </div>
                <div class="relative z-10">
                    <h3 class="font-display font-black text-white leading-tight mb-3"
                        style="font-size:clamp(1.4rem,2.5vw,1.9rem)">24/7 Emergency Dispatch</h3>
                    <p class="text-white/80 text-sm leading-relaxed">Generator failures don't wait for business hours.
                        Our emergency fuel dispatch team operates round-the-clock with guaranteed 4-hour response for
                        critical industrial accounts.</p>
                </div>
                <div class="relative z-10 mt-6">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 bg-white/20 hover:bg-white/30 border border-white/30 text-white text-[11px] font-bold uppercase tracking-wider rounded-full px-4 py-2 transition-all duration-200">
                        Request Emergency Supply
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
            {{-- 6. Testimonial --}}
            <div class="bg-white rounded-[1.5rem] p-7 sm:p-8 border border-[#0B332B]/8 flex flex-col justify-between">
                <div>
                    <div class="flex gap-0.5 mb-4">
                        @for ($s = 0; $s < 5; $s++)
                            <svg class="w-3.5 h-3.5 text-[#F5850F] fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                    <div class="font-display text-4xl text-[#F5850F]/15 leading-none mb-2 select-none">&ldquo;</div>
                    <p class="text-[#2A2A2A]/70 text-[13px] leading-relaxed italic">When our manufacturing plant's AGO
                        reserves ran critically low during a grid outage, Alms Oil dispatched within 3 hours. No other
                        supplier could match that response.</p>
                </div>
                <div class="flex items-center gap-3 mt-5 pt-4 border-t border-[#0B332B]/8">
                    <div
                        class="w-9 h-9 rounded-full bg-[#0B332B] flex items-center justify-center text-white font-bold text-xs shrink-0">
                        KA</div>
                    <div>
                        <p class="text-[12px] font-bold text-[#0B332B]">Kingsley Adeyemi</p>
                        <p class="text-[11px] text-[#2A2A2A]/45 mt-0.5">Plant Operations Manager, Delta Textiles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
