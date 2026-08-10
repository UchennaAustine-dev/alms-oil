@extends('layouts.app')
@section('title', 'HSE Policy | Alms Oil Nigeria Limited')
@section('description', 'Alms Oil Nigeria Limited\'s commitment to Health, Safety and Environmental performance across
    all operations.')

@section('content')

    {{-- ── Hero ── --}}
    <section class="relative overflow-hidden bg-[#0B332B]" style="min-height:72vh">
        <div class="absolute inset-0 z-0">
            <img src="https://images.pexels.com/photos/8487393/pexels-photo-8487393.jpeg?auto=compress&cs=tinysrgb&w=1600&q=85"
                alt="Alms Oil HSE and safety operations" class="w-full h-full object-cover object-center"
                style="filter:saturate(0.65) brightness(0.38) contrast(1.1)" />
            <div class="absolute inset-0"
                style="background:linear-gradient(135deg,rgba(11,51,43,0.88) 0%,rgba(11,51,43,0.5) 55%,rgba(11,51,43,0.78) 100%)">
            </div>
        </div>
        <div class="absolute inset-0 z-[1] pointer-events-none opacity-[0.15]"
            style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 flex flex-col justify-between"
            style="min-height:72vh">
            <div class="pt-8 sm:pt-10 flex items-center gap-2 text-[11px] text-white/40 font-medium flex-wrap">
                <a href="{{ route('home') }}" class="hover:text-white/70 transition-colors">Home</a>
                <span>/</span>
                <span class="text-white/65">HSE Policy</span>
            </div>

            <div class="py-12 sm:py-16 lg:py-20">
                <div class="max-w-3xl">

                    <h1 class="font-display font-bold text-white leading-[0.9] tracking-tight mb-6 sm:mb-8"
                        style="font-size:clamp(2.4rem,5.5vw,5rem)">
                        Health, Safety &amp;<br /><span style="color:#F5850F">Environment.</span>
                    </h1>
                    <p class="text-white text-sm sm:text-base lg:text-lg leading-relaxed max-w-xl">
                        Our commitment to HSE performance across depot loading, fleet haulage, and infrastructure
                        development — zero tolerance for unsafe practices.
                    </p>
                </div>
            </div>

            <div class="border-t border-white/8 py-5 flex flex-wrap items-center gap-x-8 gap-y-2">
                @foreach (['Reviewed January 2025', 'NMDPRA & NOSDRA Aligned', 'Zero Tolerance Policy', 'Active Site Protocols'] as $item)
                    <div class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-[#F5850F]"></div>
                        <span
                            class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40">{{ $item }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-[#F8FAFC] py-10 sm:py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                <aside class="lg:col-span-3 order-2 lg:order-1 lg:sticky lg:top-24">

                    <div class="bg-white rounded-2xl border border-[#0B332B]/8 p-5 mb-5">
                        <p class="text-[10px] font-black uppercase tracking-[0.25em] text-[#0B332B]/35 mb-4">On This Page
                        </p>
                        <nav class="space-y-1">
                            @foreach ([['commitment', 'Our Commitment'], ['fleet-safety', 'Driver & Fleet Safety'], ['environment', 'Environmental Responsibility'], ['spill-response', 'Spill Response'], ['incident-reporting', 'Incident Reporting'], ['hse-contact', 'HSE Contact']] as [$id, $label])
                                <a href="#{{ $id }}"
                                    class="toc-link flex items-center gap-2 py-1.5 px-2 rounded-xl text-[12px] font-medium text-[#2A2A2A]/55 hover:text-[#F5850F] hover:bg-[#F5850F]/5 transition-all duration-150">
                                    <span class="w-1 h-1 rounded-full bg-[#0B332B]/20 shrink-0"></span>
                                    {{ $label }}
                                </a>
                            @endforeach
                        </nav>
                    </div>

                    {{-- HSE commitment badge --}}
                    {{-- <div class="bg-white rounded-2xl border border-[#0B332B]/8 p-5 mb-5">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-xl bg-[#0B332B] flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.75">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[10px] font-black uppercase tracking-wider text-[#F5850F]">Zero Tolerance</p>
                                <p class="text-[11px] font-bold text-[#0B332B]">Unsafe Practices</p>
                            </div>
                        </div>
                        <p class="text-[11px] text-[#2A2A2A]/50 leading-relaxed">All Alms Oil operations are conducted under
                            active HSE management protocols.</p>
                    </div> --}}

                    <div class="bg-white rounded-2xl border border-[#0B332B]/8 p-5">
                        <p class="text-[10px] font-black uppercase tracking-[0.25em] text-[#0B332B]/35 mb-4">Legal Documents
                        </p>
                        <div class="space-y-1">
                            @foreach ([['Privacy Policy', route('privacy'), false], ['Cookie Policy', route('cookies'), false], ['Terms of Supply', route('terms'), false], ['HSE Policy', route('hse'), true]] as [$label, $route, $active])
                                <a href="{{ $route }}"
                                    class="flex items-center gap-2 py-1.5 px-2 rounded-xl text-[12px] font-medium transition-all duration-150
                        {{ $active ? 'bg-[#0B332B]/5 text-[#0B332B] font-bold' : 'text-[#2A2A2A]/55 hover:text-[#F5850F] hover:bg-[#F5850F]/5' }}">
                                    <span
                                        class="w-1 h-1 rounded-full {{ $active ? 'bg-[#F5850F]' : 'bg-[#0B332B]/15' }} shrink-0"></span>
                                    {{ $label }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </aside>

                <main class="lg:col-span-9 order-1 lg:order-2">
                    <div
                        class="bg-white rounded-2xl sm:rounded-3xl border border-[#0B332B]/8 p-6 sm:p-8 lg:p-10 legal-prose">

                        <p class="lead">Alms Oil Nigeria Limited is committed to maintaining the highest standards of
                            Health, Safety and Environmental (HSE) performance across all our operations — from depot
                            loading to final-mile delivery and infrastructure development.</p>

                        <h2 id="commitment">Our Commitment</h2>
                        <ul>
                            <li>Zero tolerance for unsafe practices across our entire supply chain</li>
                            <li>Full compliance with NMDPRA, NOSDRA, and all applicable Nigerian HSE legislation</li>
                            <li>Continuous training, certification, and competency assessment of all field and operations
                                staff</li>
                            <li>Regular internal and third-party HSE audits across all operational sites</li>
                        </ul>

                        <h2 id="fleet-safety">Driver and Fleet Safety</h2>
                        <p>All Alms Oil transport drivers hold current hazardous materials (HAZMAT) certifications and
                            undergo regular defensive driving assessments. Every vehicle in our fleet carries valid
                            roadworthiness documentation and is fitted with GPS tracking and speed governance systems.</p>

                        <h2 id="environment">Environmental Responsibility</h2>
                        <p>We are committed to minimising the environmental footprint of petroleum operations through spill
                            prevention protocols, proper waste disposal practices, secondary containment at all storage
                            facilities, and responsible route planning to minimise vehicle emissions.</p>

                        <h3 id="spill-response">Spill Response</h3>
                        <p>All operational staff are trained in first-response spill containment. We maintain pre-positioned
                            spill response equipment at key logistics nodes and comply with NOSDRA reporting obligations for
                            all reportable incidents.</p>

                        <h2 id="incident-reporting">Incident Reporting</h2>
                        <p>All incidents, near-misses, and unsafe conditions must be reported immediately to the HSE desk.
                            We operate a non-punitive reporting culture to promote transparency, learning, and continuous
                            improvement in safety performance.</p>

                        <h2 id="hse-contact">HSE Contact</h2>
                        <p>For HSE-related enquiries, incident reports, or compliance documentation requests: <a
                                href="mailto:hse@almsoil.com">hse@almsoil.com</a></p>

                    </div>
                    <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 px-1">
                        <a href="{{ route('home') }}"
                            class="inline-flex items-center gap-2 text-[11px] font-bold text-[#2A2A2A]/40 hover:text-[#F5850F] uppercase tracking-wider transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Back to Home
                        </a>
                        <p class="text-[11px] text-[#2A2A2A]/35">© {{ date('Y') }} Alms Oil Nigeria Limited. All rights
                            reserved.</p>
                    </div>
                </main>

            </div>
        </div>
    </section>

@endsection

@push('head')
    @include('legal._prose-styles')
@endpush

@push('scripts')
    @include('legal._toc-script')
@endpush
