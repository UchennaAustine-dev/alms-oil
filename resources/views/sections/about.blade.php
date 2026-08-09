{{-- ══════════════════════════════════════════════════════════════════════════
     WHY US / THE DIFFERENCE WE MAKE SECTION
     · Replicating the exact Bento Grid design reference
     · High-quality Unsplash stock images (oil/energy/industrial — contextual)
     · Fully Mobile Responsive
══════════════════════════════════════════════════════════════════════════ --}}
<section id="about" class="bg-[#FDFDFC] py-16 sm:py-20 lg:py-28 border-b border-[#0B332B]/8">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">

        {{-- SECTION HEADER --}}
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14 lg:mb-20 space-y-3 sm:space-y-4">

            <div
                class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#0B332B]/5 border border-[#0B332B]/10">
                <span class="w-2 h-2 rounded-full bg-[#F5850F]"></span>
                <span class="text-[10px] sm:text-[11px] font-bold tracking-[0.22em] uppercase text-[#0B332B]">
                    THE DIFFERENCE WE MAKE
                </span>
            </div>

            <h2
                class="font-display font-black text-[#0B332B] text-2xl sm:text-4xl lg:text-5xl tracking-tight leading-tight">
                Leading the Way in Petroleum &amp; Energy Supply
            </h2>

            <p class="text-[#2A2A2A]/70 text-sm sm:text-base lg:text-lg leading-relaxed max-w-2xl mx-auto">
                Explore the key reasons industrial clients and filling stations choose Alms Oil as their trusted energy
                supply partner.
            </p>

            <div class="w-20 sm:w-24 h-0.5 bg-[#0B332B]/15 mx-auto pt-2"></div>

        </div>

        {{-- BENTO MOSAIC GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6 lg:gap-8 items-stretch">

            {{-- ── LEFT COLUMN (Top Card + Bottom Photo) ── --}}
            <div class="flex flex-col gap-5 sm:gap-6 lg:gap-8 justify-between">

                {{-- Top-Left Card --}}
                <div
                    class="bg-[#F2ECE4] p-6 sm:p-8 rounded-3xl border border-[#0B332B]/10 shadow-sm flex flex-col justify-between space-y-6">
                    <p class="text-[#2A2A2A]/75 text-xs sm:text-sm lg:text-base leading-relaxed">
                        Our unwavering quality assurance ensures you receive top-purity petroleum products, always
                        meeting your exact industrial standards.
                    </p>
                    <div>
                        <p class="font-display text-3xl sm:text-4xl font-extrabold text-[#0B332B] leading-none">99.8%
                        </p>
                        <p class="text-xs sm:text-sm font-bold text-[#0B332B] mt-1">Product Purity &amp; Spec Guarantee
                        </p>
                    </div>
                </div>

                {{-- Bottom-Left Card: African lab technician / quality testing --}}
                <div
                    class="relative rounded-3xl overflow-hidden shadow-xl border-2 border-white h-[240px] sm:h-[280px]">
                    {{-- Black female scientist in lab — quality assurance --}}
                    <img src="https://images.pexels.com/photos/36423786/pexels-photo-36423786.jpeg?auto=compress&cs=tinysrgb&w=600&q=85"
                        alt="Petroleum Quality Assurance Laboratory Testing"
                        class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-500"
                        loading="lazy" />
                    <div class="absolute inset-0 bg-linear-to-t from-alms-green/85 via-transparent to-transparent">
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <span
                            class="text-[9px] sm:text-[10px] font-bold uppercase tracking-widest text-alms-orange">Quality
                            Assurance</span>
                        <p class="text-xs font-bold mt-0.5">Laboratory Certified Fuel Analysis</p>
                    </div>
                </div>

            </div>

            {{-- ── MIDDLE COLUMN (Tall High-Impact Card) ── --}}
            <div
                class="bg-[#0B332B] text-white rounded-3xl p-6 sm:p-8 shadow-2xl border-2 sm:border-4 border-white flex flex-col justify-between relative overflow-hidden min-h-[460px] sm:min-h-[500px]">

                <div class="absolute top-0 right-0 w-64 h-64 bg-[#F5850F]/15 rounded-full blur-2xl pointer-events-none">
                </div>

                {{-- Top Metric --}}
                <div class="relative z-10 space-y-1">
                    <p class="font-display text-4xl sm:text-5xl font-black text-[#F5850F]">98.5%</p>
                    <p class="text-sm sm:text-base font-bold text-white">On-Time Delivery Rate</p>
                </div>

                {{-- Middle Photo Frame: fleet of trucks on a Nigerian/African road --}}
                <div
                    class="relative my-4 sm:my-6 rounded-2xl overflow-hidden shadow-lg h-[200px] sm:h-[250px] border border-white/20">
                    <img src="https://images.pexels.com/photos/11087837/pexels-photo-11087837.jpeg?auto=compress&cs=tinysrgb&w=600&q=85"
                    "
                        loading="lazy" alt="GPS Tracked Petroleum Tanker Fleet Haulage"
                        class="w-full h-full object-cover object-center" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B332B]/90 via-[#0B332B]/20 to-transparent">
                    </div>
                    <div
                        class="absolute top-3 right-3 bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-[9px] sm:text-[10px] font-bold text-white border border-white/20">
                        GPS Fleet Telemetry
                    </div>
                </div>

                {{-- Bottom Message --}}
                <div class="relative z-10">
                    <p class="text-xs sm:text-sm text-white/80 leading-relaxed">
                        You can rely on us to keep your manufacturing plant, generators, and fleet running smoothly
                        without costly delays.
                    </p>
                </div>

            </div>

            {{-- ── RIGHT COLUMN (Top Photo + Bottom Deliveries Card) ── --}}
            <div class="flex flex-col gap-5 sm:gap-6 lg:gap-8 justify-between">

                {{-- Top-Right Card: Oil refinery / pipeline infrastructure --}}
                <div
                    class="relative rounded-3xl overflow-hidden shadow-xl border-2 border-white h-[240px] sm:h-[280px]">
                    <img src="https://images.pexels.com/photos/18845271/pexels-photo-18845271.jpeg?auto=compress&cs=tinysrgb&w=600&q=85"
                        alt="Oil Infrastructure & Tank Farm Terminals"
                        class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-linear-to-t from-[#0B332B]/85 via-transparent to-transparent">
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <span class="text-[9px] sm:text-[10px] font-bold uppercase tracking-widest text-[#F5850F]">Bulk
                            Storage Infrastructure</span>
                        <p class="text-xs font-bold mt-0.5">Strategic Tank Farm Terminals</p>
                    </div>
                </div>

                {{-- Bottom-Right Card --}}
                <div
                    class="bg-[#EAEAF6] p-6 sm:p-8 rounded-3xl border border-[#0B332B]/10 shadow-sm flex flex-col justify-between space-y-6">
                    <div>
                        <p class="font-display text-3xl sm:text-4xl font-extrabold text-[#0B332B] leading-none">850M+
                        </p>
                        <p class="text-xs sm:text-sm font-bold text-[#0B332B] mt-1">Litres Delivered</p>
                    </div>
                    <p class="text-[#2A2A2A]/75 text-xs sm:text-sm leading-relaxed">
                        Join countless satisfied corporate and industrial customers who have relied on our consistent,
                        expert energy supply nationwide.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>
