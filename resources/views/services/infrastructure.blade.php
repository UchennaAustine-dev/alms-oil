@extends('layouts.app')
@section('title', 'Energy Infrastructure Solutions | Alms Oil Nigeria Limited')
@section('description',
    'Design, build, and management of petroleum storage and distribution infrastructure — tank
    farms, modular filling stations, and private depot construction across Nigeria.')

@section('content')

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-alms-green" style="min-height:82vh">
        <div class="absolute inset-0 z-0">
            <img src="https://images.pexels.com/photos/8824526/pexels-photo-8824526.jpeg?auto=compress&cs=tinysrgb&w=1600&q=85"
                alt="Oil storage tank farm" class="w-full h-full object-cover object-center"
                style="filter:saturate(0.65) brightness(0.38) contrast(1.1)" />
            <div class="absolute inset-0"
                style="background:linear-gradient(135deg,rgba(11,51,43,0.9) 0%,rgba(11,51,43,0.48) 55%,rgba(11,51,43,0.72) 100%)">
            </div>
        </div>
        <div class="absolute inset-0 z-1 pointer-events-none opacity-[0.15]"
            style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 flex flex-col justify-between"
            style="min-height:82vh">
            <div class="pt-8 sm:pt-10 flex items-center gap-2 text-[11px] text-white/40 font-medium flex-wrap">
                <a href="{{ route('home') }}" class="hover:text-white/70 transition-colors">Home</a>
                <span>/</span>
                <a href="{{ route('home') }}#services" class="hover:text-white/70 transition-colors">Services</a>
                <span>/</span>
                <span class="text-white/65">Energy Infrastructure</span>
            </div>

            <div class="py-10 sm:py-14 lg:py-16 grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-end">
                <div>
                    <div class="flex items-center gap-2.5 mb-5 sm:mb-6">
                        <div class="w-5 h-px bg-alms-orange"></div>
                        <span class="text-[10px] font-bold tracking-[0.32em] uppercase text-alms-orange">04 — Our
                            Services</span>
                    </div>
                    <h1 class="font-display font-bold text-white leading-[0.9] tracking-tight mb-6 sm:mb-8"
                        style="font-size:clamp(2.6rem,6vw,5.5rem)">
                        Energy<br />Infrastructure<br /><span style="color:#F5850F">Solutions.</span>
                    </h1>
                    <p class="text-white text-sm sm:text-base lg:text-lg leading-relaxed mb-7 sm:mb-8 max-w-lg">
                        Turnkey design, construction, and management of petroleum storage and distribution infrastructure —
                        from tank farms to modular filling stations across Nigeria.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <button data-open-quote="Energy Infrastructure Solutions"
                            class="group inline-flex items-center justify-center gap-3 bg-alms-orange hover:bg-[#e07708] text-white font-bold text-xs sm:text-sm uppercase tracking-wide pl-6 pr-5 py-4 rounded-full shadow-xl shadow-alms-orange/30 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
                            Start a Conversation
                            <span
                                class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </button>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-white/25 text-white font-bold text-xs sm:text-sm uppercase tracking-wide hover:bg-white/10 transition-all duration-200">
                            Talk to Our Team
                        </a>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="backdrop-blur-md bg-white/8 border border-white/15 rounded-3xl p-5 sm:p-6">
                        <p class="text-white text-sm sm:text-base leading-relaxed">
                            We deliver complete infrastructure solutions for petroleum businesses — whether you're building
                            a new depot, expanding a tank farm, or setting up a retail fuel station from the ground up.
                        </p>
                    </div>
                    <div class="grid grid-cols-3 gap-3">
                        @foreach ([['50KL', 'to 10,000KL', true], ['DPR', 'Certified Builds', false], ['EPC', 'Full Turnkey', true]] as [$v, $l, $orange])
                            <div
                                class="backdrop-blur-md {{ $orange ? 'bg-alms-orange/15 border-alms-orange/25' : 'bg-white/8 border-white/12' }} border rounded-2xl px-3 py-4 text-center">
                                <p class="font-display font-black text-white leading-none mb-1"
                                    style="font-size:clamp(1.2rem,2.2vw,1.75rem)">{{ $v }}</p>
                                <p
                                    class="text-[9px] font-bold uppercase tracking-[0.18em] {{ $orange ? 'text-alms-orange/70' : 'text-white/40' }}">
                                    {{ $l }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="border-t border-white/8 py-5 flex flex-wrap items-center gap-x-8 gap-y-2">
                @foreach (['DPR Licensed Contractor', 'EPC Capability', 'NMDPRA Compliant', 'ISO 9001:2015'] as $cert)
                    <div class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-alms-orange"></div>
                        <span
                            class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40">{{ $cert }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SOLUTIONS GRID --}}
    <section class="bg-[#F8FAFC] py-14 sm:py-20 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-14">
                <div>
                    <div class="flex items-center gap-2.5 mb-3">
                        <div class="w-4 h-px bg-alms-orange"></div>
                        <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-alms-orange">What We
                            Build</span>
                    </div>
                    <h2 class="font-display font-bold text-alms-green leading-tight tracking-tight"
                        style="font-size:clamp(1.8rem,3.5vw,3rem)">Infrastructure We Deliver</h2>
                </div>
                <p class="text-sm text-alms-charcoal/55 max-w-xs sm:text-right leading-relaxed">Engineered to last, built to
                    the highest Nigerian and international standards.</p>
            </div>

            @php
                $solutions = [
                    [
                        'Tank Farm Development',
                        'Above-ground storage tank design and construction for AGO, PMS, and LPG. Capacities from 50KL to 10,000KL with full containment bunding.',
                        '<path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
                        'bg-alms-green',
                    ],
                    [
                        'Filling Station Construction',
                        'Turnkey modular fuel retail stations — canopy, forecourt, underground tanks, dispensers, and complete management systems.',
                        '<path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>',
                        'bg-alms-orange',
                    ],
                    [
                        'Private Depot Build-out',
                        'End-to-end private petroleum depot development from site selection and design to construction and commissioning.',
                        '<path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>',
                        'bg-alms-green',
                    ],
                    [
                        'Depot Management',
                        'Operational management of third-party depots — staffing, inventory control, reconciliation, and safety compliance.',
                        '<path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
                        'bg-alms-orange',
                    ],
                    [
                        'LPG Facilities',
                        'Bottling plant design, storage cylinder parks, and LPG reticulation systems for industrial and commercial sites.',
                        '<path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>',
                        'bg-alms-green',
                    ],
                    [
                        'Pipeline & Flow Systems',
                        'Transfer pipelines, manifold systems, metering skids, and pump stations for depot and terminal operations.',
                        '<path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>',
                        'bg-alms-orange',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
                @foreach ($solutions as [$title, $desc, $svgPath, $bg])
                    <div
                        class="srv-reveal group bg-white rounded-2xl sm:rounded-3xl border border-alms-green/8 p-5 sm:p-6 hover:border-alms-orange/40 hover:shadow-lg hover:shadow-alms-green/8 transition-all duration-300">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="{{ $bg }} w-11 h-11 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.75">{!! $svgPath !!}</svg>
                            </div>
                            <h3 class="text-sm sm:text-base font-bold text-alms-green leading-snug self-center">
                                {{ $title }}</h3>
                        </div>
                        <p class="text-[13px] text-alms-charcoal/60 leading-relaxed">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- PROJECT LIFECYCLE --}}
    <section class="bg-white py-14 sm:py-20 lg:py-24 border-t border-alms-green/8">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
            <div class="text-center mb-10 sm:mb-14">
                <div class="flex items-center justify-center gap-2.5 mb-3">
                    <div class="w-4 h-px bg-alms-orange"></div>
                    <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-alms-orange">Project
                        Lifecycle</span>
                    <div class="w-4 h-px bg-alms-orange"></div>
                </div>
                <h2 class="font-display font-bold text-alms-green tracking-tight"
                    style="font-size:clamp(1.7rem,3vw,2.6rem)">From Concept to Commissioning</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 relative">
                <div class="hidden lg:block absolute top-8 left-[12.5%] right-[12.5%] h-px bg-alms-green/8 z-0"></div>
                @foreach ([['01', 'Feasibility & Design', 'Site assessment, regulatory review, FEED documentation, and engineering design package.'], ['02', 'Approvals & Permits', 'DPR, NMDPRA, local government, and environmental permits — we manage the full approval chain.'], ['03', 'Construction & Build', 'Civil works, steel fabrication, mechanical installation, and instrumentation by certified teams.'], ['04', 'Testing & Handover', 'Pre-commissioning checks, capacity testing, operator training, and as-built documentation.']] as [$num, $title, $desc])
                    <div
                        class="srv-reveal relative z-10 flex flex-col items-center text-center sm:items-start sm:text-left lg:items-center lg:text-center">
                        <div
                            class="w-16 h-16 rounded-2xl bg-alms-green text-white flex flex-col items-center justify-center mb-4 shrink-0 shadow-lg">
                            <span class="text-[9px] font-black uppercase tracking-widest text-alms-orange">Phase</span>
                            <span class="text-xl font-black leading-none">{{ $num }}</span>
                        </div>
                        <h3 class="text-sm sm:text-base font-bold text-alms-green mb-2">{{ $title }}</h3>
                        <p class="text-[13px] text-alms-charcoal/55 leading-relaxed">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FEATURE IMAGE SPLIT --}}
    <section class="bg-[#F8FAFC] py-14 sm:py-20 lg:py-24 border-t border-alms-green/8">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
                <div class="relative srv-reveal">
                    <div
                        class="rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl shadow-alms-green/20 border-4 border-white">
                        <img src="https://images.pexels.com/photos/17377416/pexels-photo-17377416.jpeg?auto=compress&cs=tinysrgb&w=900&q=85"
                            alt="Tank farm construction" class="w-full h-70 sm:h-95 lg:h-115 object-cover object-center" />
                        <div
                            class="absolute inset-0 bg-linear-to-t from-alms-green/40 to-transparent rounded-2xl sm:rounded-3xl">
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-4 -right-2 sm:-right-6 z-10 flex items-center gap-3 bg-white px-4 py-3 rounded-2xl shadow-xl border border-alms-green/10">
                        <div class="flex items-center justify-center w-9 h-9 rounded-xl bg-alms-orange/10">
                            <svg class="w-4 h-4 text-alms-orange" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] font-extrabold uppercase tracking-wider text-alms-orange">Full Turnkey
                            </p>
                            <p class="text-xs font-black text-alms-green">Design to Handover</p>
                        </div>
                    </div>
                </div>

                <div class="srv-reveal">
                    <div class="flex items-center gap-2.5 mb-4">
                        <div class="w-4 h-px bg-alms-orange"></div>
                        <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-alms-orange">Why Choose
                            Us</span>
                    </div>
                    <h2 class="font-display font-bold text-alms-green leading-tight tracking-tight mb-8"
                        style="font-size:clamp(1.7rem,3vw,2.6rem)">
                        Built right the first time,<br />every time.
                    </h2>
                    <div class="space-y-4">
                        @foreach ([['DPR-Licensed Construction', 'All infrastructure projects are designed and executed by DPR-certified contractors under Alms Oil project management.'], ['Regulatory Navigation', 'We manage the entire permits and approvals chain — NMDPRA, DPR, state environmental agencies, and local government.'], ['QHSE Integration', 'Quality, health, safety, and environment standards are embedded at every project phase — not added as an afterthought.'], ['On-Time Delivery', 'Our project management framework tracks milestones in real time. We are transparent about timelines and accountable for delivery.']] as [$title, $desc])
                            <div
                                class="flex gap-4 p-4 sm:p-5 rounded-2xl bg-white border border-alms-green/8 hover:border-alms-orange/30 hover:bg-alms-orange/2 transition-all duration-200">
                                <div class="w-1.5 bg-alms-orange rounded-full shrink-0 self-stretch min-h-10"></div>
                                <div>
                                    <h3 class="text-sm font-bold text-alms-green mb-1">{{ $title }}</h3>
                                    <p class="text-[13px] text-alms-charcoal/60 leading-relaxed">{{ $desc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- OTHER SERVICES --}}
    <section class="bg-white py-12 sm:py-16 border-t border-alms-green/8">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
            <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-alms-green/40 mb-6">Also Explore</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @foreach ([['Petroleum Supply', 'AGO, PMS, DPK & specialty products.', route('services.petroleum')], ['Logistics & Haulage', 'GPS-tracked fleet, nationwide delivery.', route('services.logistics')], ['Engineering Services', 'Installation, maintenance & HSE compliance.', route('services.engineering')]] as [$t, $s, $r])
                    <a href="{{ $r }}"
                        class="group flex items-center justify-between gap-4 p-4 sm:p-5 rounded-2xl bg-[#F8FAFC] border border-alms-green/8 hover:border-alms-orange/40 hover:shadow-md transition-all duration-200">
                        <div>
                            <h3 class="text-sm font-bold text-alms-green group-hover:text-alms-orange transition-colors">
                                {{ $t }}</h3>
                            <p class="text-[12px] text-alms-charcoal/50 mt-0.5">{{ $s }}</p>
                        </div>
                        <svg class="w-4 h-4 text-alms-green/30 group-hover:text-alms-orange group-hover:translate-x-1 transition-all duration-200 shrink-0"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative overflow-hidden bg-alms-green py-14 sm:py-20">
        <div
            class="absolute top-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-alms-orange/10 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-48 sm:w-72 h-48 sm:h-72 bg-white/3 rounded-full blur-3xl pointer-events-none">
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.28em] text-alms-orange mb-3">Planning a Project?
                    </p>
                    <h2 class="font-display font-bold text-white leading-tight"
                        style="font-size:clamp(1.7rem,3.5vw,3rem)">
                        Let's build your energy<br class="hidden sm:block" />infrastructure together.
                    </h2>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 shrink-0">
                    <button data-open-quote="Energy Infrastructure Solutions"
                        class="group inline-flex items-center justify-center gap-3 bg-alms-orange hover:bg-[#e07708] text-white font-bold text-xs sm:text-sm uppercase tracking-wide pl-6 pr-5 py-4 rounded-full shadow-xl shadow-alms-orange/20 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
                        Start a Conversation
                        <span
                            class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </button>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-white/20 text-white font-bold text-xs sm:text-sm uppercase tracking-wide hover:bg-white/10 transition-all duration-200">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function() {
            var style = document.createElement('style');
            style.textContent =
                '.srv-reveal{opacity:0;transform:translateY(24px);transition:opacity 0.6s cubic-bezier(.22,1,.36,1),transform 0.6s cubic-bezier(.22,1,.36,1)}.srv-reveal.is-visible{opacity:1;transform:translateY(0)}';
            document.head.appendChild(style);
            if ('IntersectionObserver' in window) {
                var ro = new IntersectionObserver(function(entries) {
                    entries.forEach(function(e) {
                        if (e.isIntersecting) {
                            e.target.classList.add('is-visible');
                            ro.unobserve(e.target);
                        }
                    });
                }, {
                    threshold: 0.1,
                    rootMargin: '0px 0px -30px 0px'
                });
                document.querySelectorAll('.srv-reveal').forEach(function(el, i) {
                    el.style.transitionDelay = (i % 3) * 0.07 + 's';
                    ro.observe(el);
                });
            } else {
                document.querySelectorAll('.srv-reveal').forEach(function(el) {
                    el.classList.add('is-visible');
                });
            }
        }());
    </script>
@endpush
