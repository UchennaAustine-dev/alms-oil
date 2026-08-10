@extends('layouts.app')
@section('title', 'Contact Us | Alms Oil Nigeria Limited')
@section('description', 'Speak with the Alms Oil commercial desk about petroleum supply, haulage, engineering, or energy
    infrastructure. Lagos and Abuja coverage, Mon–Sat 7am–9pm.')

@section('content')

    {{-- ── Hero ── --}}
    <section class="relative overflow-hidden bg-[#0B332B]" style="min-height:78vh">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1600&q=85"
                alt="Alms Oil commercial team partnership" class="w-full h-full object-cover object-center"
                style="filter:saturate(0.7) brightness(0.4) contrast(1.08)" />
            <div class="absolute inset-0"
                style="background:linear-gradient(135deg,rgba(11,51,43,0.88) 0%,rgba(11,51,43,0.5) 55%,rgba(11,51,43,0.75) 100%)">
            </div>
        </div>
        <div class="absolute inset-0 z-[1] pointer-events-none opacity-[0.15]"
            style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 flex flex-col justify-between"
            style="min-height:78vh">
            <div class="pt-8 sm:pt-10 flex items-center gap-2 text-[11px] text-white/40 font-medium flex-wrap">
                <a href="{{ route('home') }}" class="hover:text-white/70 transition-colors">Home</a>
                <span>/</span>
                <span class="text-white/65">Contact Us</span>
            </div>

            <div class="py-12 sm:py-16 lg:py-20">
                <div class="max-w-3xl">

                    <h1 class="font-display font-bold text-white leading-[0.9] tracking-tight mb-6 sm:mb-8"
                        style="font-size:clamp(2.6rem,6vw,5.5rem)">
                        Contact<br /><span style="color:#F5850F">Alms Oil.</span>
                    </h1>
                    <p class="text-white text-sm sm:text-base lg:text-lg leading-relaxed mb-8 sm:mb-10 max-w-xl">
                        Speak with our commercial desk about petroleum supply, haulage, engineering, or infrastructure — we
                        respond within two business hours.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="#contact-form"
                            class="group inline-flex items-center justify-center gap-3 bg-[#F5850F] hover:bg-[#e07708] text-white
                    font-bold text-xs sm:text-sm uppercase tracking-wide
                    pl-6 pr-5 py-4 rounded-full shadow-xl shadow-[#F5850F]/30
                    hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200">
                            Send a Message
                            <span
                                class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </a>
                        <a href="tel:+2348002567645"
                            class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-white/25 text-white font-bold text-xs sm:text-sm uppercase tracking-wide hover:bg-white/10 transition-all duration-200">
                            Call the Desk
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/8 py-5 flex flex-wrap items-center gap-x-8 gap-y-2">
                @foreach (['Mon–Sat 7am–9pm', '2-Hour Response', '24/7 Emergency Dispatch', 'Lagos & Abuja Desks'] as $item)
                    <div class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-[#F5850F]"></div>
                        <span
                            class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40">{{ $item }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── Content ── --}}
    <section id="contact-form" class="bg-[#F0F0EF]/50 py-12 sm:py-16 lg:py-20 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">

                {{-- Left: contact info --}}
                <div class="lg:col-span-5 space-y-4">
                    <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#0B332B]/40 mb-5">
                        Contact Details
                    </p>

                    @php
                        $cards = [
                            [
                                'Phone / WhatsApp',
                                '+234 (0) 800 ALMSOIL',
                                'Mon–Sat, 7am–9pm',
                                'tel:+2348002567645',
                                true,
                            ],
                            [
                                'Email Desk',
                                'info@almsoil.com',
                                'Response within 2 hours',
                                'mailto:info@almsoil.com',
                                true,
                            ],
                            ['Head Office', 'Lagos, Nigeria', 'Operational Hub & Terminal Network', null, false],
                            ['Emergency Dispatch', '24 / 7 Available', 'Nationwide coverage', null, false],
                            ['Regional Office', 'Abuja, FCT Nigeria', 'Commercial Desk & Advisory', null, false],
                        ];
                    @endphp

                    @foreach ($cards as [$label, $value, $sub, $href, $isLink])
                        @php $tag = $isLink ? 'a' : 'div'; @endphp
                        <{{ $tag }} {{ $isLink ? 'href="' . $href . '"' : '' }}
                            class="flex items-start gap-4 p-4 sm:p-5 rounded-2xl bg-white
                   border border-[#0B332B]/8 {{ $isLink ? 'hover:border-[#F5850F]/50 hover:bg-[#F5850F]/[0.02] group' : '' }}
                   transition-all duration-200">
                            <div class="w-9 h-9 rounded-xl bg-[#0B332B]/5 flex items-center justify-center shrink-0">
                                <div class="w-2 h-2 rounded-full bg-[#F5850F]"></div>
                            </div>
                            <div class="min-w-0">
                                <p class="text-[10px] font-bold uppercase tracking-wider text-[#0B332B]/40 mb-0.5">
                                    {{ $label }}</p>
                                <p
                                    class="text-sm font-bold text-[#0B332B] {{ $isLink ? 'group-hover:text-[#F5850F]' : '' }} transition-colors leading-snug">
                                    {{ $value }}
                                </p>
                                <p class="text-[11px] text-[#2A2A2A]/45 mt-0.5">{{ $sub }}</p>
                            </div>
                            </{{ $tag }}>
                    @endforeach

                    <div class="flex items-center gap-2 pt-1 text-xs text-[#2A2A2A]/40">
                        <svg class="w-3.5 h-3.5 text-[#0B332B]/40 shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        All submissions are encrypted and handled confidentially.
                    </div>
                </div>

                {{-- Right: form --}}
                <div class="lg:col-span-7">
                    @if (session('success'))
                        <div id="contact-success"
                            class="scroll-mt-24 bg-white rounded-3xl p-8 sm:p-12 flex flex-col items-center text-center
                      space-y-5 border border-[#0B332B]/8 shadow-sm">
                            <div class="w-14 h-14 rounded-full bg-[#0B332B]/8 flex items-center justify-center">
                                <svg class="w-7 h-7 text-[#0B332B]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold font-display text-[#0B332B]">Message Received!</h4>
                            <p class="text-[#2A2A2A]/55 text-sm max-w-sm">{{ session('success') }}</p>
                        </div>
                    @else
                        @if ($errors->any())
                            <div class="mb-5 px-4 py-3 rounded-2xl bg-red-50 border border-red-100 text-red-600 text-sm">
                                @foreach ($errors->all() as $e)
                                    <p>{{ $e }}</p>
                                @endforeach
                            </div>
                        @endif

                        <form id="contact-message-form" method="POST" action="{{ route('contact.store') }}"
                            class="relative bg-white rounded-3xl p-6 sm:p-8 space-y-5
                       border border-[#0B332B]/8 shadow-sm">
                            @csrf

                            <h3 class="text-lg font-bold font-display text-[#0B332B]">Send Us a Message</h3>

                            @php
                                $ic =
                                    'w-full px-4 py-3 rounded-xl bg-[#F0F0EF] border border-[#0B332B]/10 text-sm text-[#2A2A2A] placeholder:text-[#2A2A2A]/35 focus:outline-none focus:border-[#F5850F] focus:bg-white focus:ring-2 focus:ring-[#F5850F]/15 transition-all';
                                $lc = 'text-[10px] font-bold uppercase tracking-[0.2em] text-[#0B332B]/50 block mb-1.5';
                            @endphp

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="{{ $lc }}">Full Name *</label>
                                    <input name="name" type="text" required placeholder="Your full name"
                                        value="{{ old('name') }}" class="{{ $ic }}" />
                                </div>
                                <div>
                                    <label class="{{ $lc }}">Company</label>
                                    <input name="company" type="text" placeholder="Company name"
                                        value="{{ old('company') }}" class="{{ $ic }}" />
                                </div>
                                <div>
                                    <label class="{{ $lc }}">Email Address *</label>
                                    <input name="email" type="email" required placeholder="official@company.com"
                                        value="{{ old('email') }}" class="{{ $ic }}" />
                                </div>
                                <div>
                                    <label class="{{ $lc }}">Phone Number</label>
                                    <input name="phone" type="tel" placeholder="+234 xxx xxxx xxx"
                                        value="{{ old('phone') }}" class="{{ $ic }}" />
                                </div>
                            </div>
                            <div>
                                <label class="{{ $lc }}">Message *</label>
                                <textarea name="message" required rows="5"
                                    placeholder="Tell us about your fuel supply needs or how we can help…" class="{{ $ic }} resize-none">{{ old('message') }}</textarea>
                            </div>
                            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-1">
                                <p class="text-[13px] text-[#2A2A2A]/40 max-w-xs">
                                    We respond within 2 business hours. Emergency inquiries handled 24/7.
                                </p>
                                <button type="submit" id="contact-submit-btn"
                                    class="group w-full sm:w-auto flex items-center justify-center gap-3
                             bg-[#F5850F] hover:bg-[#e07708] text-white
                             font-bold text-sm uppercase tracking-wide
                             pl-7 pr-5 py-4 rounded-full shrink-0
                             shadow-lg shadow-[#F5850F]/20
                             hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.98]
                             transition-all duration-200 disabled:opacity-70 disabled:pointer-events-none disabled:hover:translate-y-0">
                                    <span id="contact-submit-label">Send Message</span>
                                    <span id="contact-submit-icon"
                                        class="flex items-center justify-center w-7 h-7 rounded-full
                             bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </form>
                    @endif
                </div>

            </div>
        </div>
    </section>

    {{-- Loading overlay — shown while contact form submits --}}
    <div id="contact-loading-modal"
        class="fixed inset-0 z-[60] hidden items-center justify-center p-4 bg-[#0B332B]/70 backdrop-blur-sm"
        aria-hidden="true" role="alertdialog" aria-busy="true" aria-labelledby="contact-loading-title">
        <div class="w-full max-w-sm bg-white rounded-3xl border border-[#0B332B]/10 shadow-2xl p-8 text-center">
            <div class="mx-auto mb-5 w-12 h-12 rounded-full border-2 border-[#F5850F]/25 border-t-[#F5850F] animate-spin">
            </div>
            <h3 id="contact-loading-title" class="font-display font-bold text-[#0B332B] text-lg mb-2">Sending your
                message…</h3>
            <p class="text-sm text-[#2A2A2A]/55 leading-relaxed">Please wait while we securely deliver your enquiry to our
                commercial desk.</p>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        (function() {
            var form = document.getElementById('contact-message-form');
            var modal = document.getElementById('contact-loading-modal');
            var submitBtn = document.getElementById('contact-submit-btn');
            var submitLabel = document.getElementById('contact-submit-label');
            var submitIcon = document.getElementById('contact-submit-icon');
            var locked = false;

            if (form && modal && submitBtn) {
                form.addEventListener('submit', function() {
                    if (locked) return;
                    locked = true;

                    form.querySelectorAll('input, textarea').forEach(function(el) {
                        el.setAttribute('readonly', 'readonly');
                        el.classList.add('opacity-60', 'pointer-events-none');
                    });

                    submitBtn.disabled = true;
                    if (submitLabel) submitLabel.textContent = 'Sending…';
                    if (submitIcon) {
                        submitIcon.innerHTML =
                            '<svg class="w-3.5 h-3.5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3"></circle><path class="opacity-90" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>';
                    }

                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    modal.setAttribute('aria-hidden', 'false');
                    document.body.style.overflow = 'hidden';
                });
            }

            var success = document.getElementById('contact-success');
            if (success) {
                requestAnimationFrame(function() {
                    success.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            }
        })();
    </script>
@endpush
