{{-- ══════════════════════════════════════════════════════
     SECTION: FAQ — Smooth animated accordion
══════════════════════════════════════════════════════ --}}
<section id="faq" class="py-16 sm:py-20 lg:py-28 bg-[#F0F0EF]/50 border-b border-[#0B332B]/8">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16">

            {{-- ── Left sticky panel ── --}}
            <div class="lg:col-span-4">
                <div class="lg:sticky lg:top-24 space-y-5">



                    <h2 class="text-2xl sm:text-4xl font-display font-black text-[#0B332B] leading-tight tracking-tight">
                        Frequently Asked Questions
                    </h2>

                    <p class="text-[#2A2A2A]/60 text-base ">
                        Everything you need to know about our petroleum product specs, delivery lead times, PIA
                        compliance, and commercial terms.
                    </p>

                    {{-- <div class="bg-[#0B332B] text-white rounded-3xl p-6 space-y-4 shadow-xl border border-white/10">
                        <div class="w-10 h-10 rounded-2xl bg-[#F5850F]/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white">Have custom order requirements?</p>
                            <p class="text-xs text-white/55 mt-1 leading-relaxed">
                                Our commercial trade desk is on standby to structure bulk contracts.
                            </p>
                        </div>
                        <button data-open-quote
                            class="group inline-flex items-center gap-2 text-xs font-bold text-[#F5850F]
                           hover:text-white transition-colors cursor-pointer">
                            Speak to Trade Desk
                            <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div> --}}

                </div>
            </div>

            {{-- ── Accordion ── --}}
            <div class="lg:col-span-8">
                @php
                    $faqGroups = [
                        [
                            'Supply & Products',
                            [
                                [
                                    'What petroleum products does Alms Oil supply nationwide?',
                                    'We supply certified AGO (Diesel), PMS (Petrol), DPK (Kerosene), Jet A-1 aviation turbine fuel, LPFO, LPG, Base Oils, and Bitumen. Every consignment comes with an accredited NMDPRA Certificate of Analysis.',
                                ],
                                [
                                    'What is the minimum commercial delivery volume?',
                                    'Our fleet accommodates haulage orders from 10,000 litres up to multi-tanker deliveries (33,000L – 60,000L capacity). We also structure ongoing bulk supply contracts for manufacturing plants and telecom towers.',
                                ],
                                [
                                    'How is product quality and purity guaranteed?',
                                    'Every delivery undergoes strict quality testing prior to loading. Independent laboratory analysis certificates and gantry meter receipts are provided upon custody transfer.',
                                ],
                            ],
                        ],
                        [
                            'Licensing & Compliance',
                            [
                                [
                                    'Is Alms Oil fully licensed by the NMDPRA?',
                                    'Yes. Alms Oil Nigeria Limited holds active operating licenses issued by the NMDPRA in strict compliance with the Petroleum Industry Act (PIA) 2021.',
                                ],
                                [
                                    'What delivery documentation is provided?',
                                    'Clients receive complete custody transfer documentation including: Product Waybill, Certificate of Analysis (COA), Pro-Forma Invoice, and meter verification tickets.',
                                ],
                            ],
                        ],
                        [
                            'Logistics & Fleet Dispatch',
                            [
                                [
                                    'What are your typical emergency delivery turnarounds?',
                                    'We operate a 24/7 emergency dispatch centre. Within major industrial corridors, emergency fuel deliveries are typically fulfilled within 4–8 hours.',
                                ],
                                [
                                    'Can clients track fleet movements in real time?',
                                    'Yes. All Alms Oil tankers are equipped with GPS telemetry tracking, providing clients with automated ETA updates from terminal dispatch to offloading.',
                                ],
                            ],
                        ],
                    ];
                @endphp

                <div class="space-y-8">
                    @foreach ($faqGroups as $gi => $group)
                        <div>
                            {{-- Group label --}}
                            <div class="flex items-center gap-3 mb-3">
                                <span class="text-[13px] font-bold uppercase tracking-[0.22em] text-[#F5850F]">
                                    {{ $group[0] }}
                                </span>
                                <div class="flex-1 h-px bg-[#0B332B]/10"></div>
                            </div>

                            <div class="space-y-2.5">
                                @foreach ($group[1] as $fi => $faq)
                                    @php $key = 'faq-' . $gi . '-' . $fi; @endphp
                                    <div class="faq-item rounded-2xl border border-[#0B332B]/10 bg-white
                              overflow-hidden shadow-sm
                              transition-colors duration-200"
                                        id="item-{{ $key }}">

                                        {{-- Question button --}}
                                        <button
                                            class="faq-trigger w-full flex items-center justify-between gap-4
                                   px-5 py-4 sm:px-6 sm:py-4.5 text-left cursor-pointer
                                   hover:bg-[#0B332B]/[0.02] transition-colors"
                                            data-target="{{ $key }}" aria-expanded="false">
                                            <span class="text-base font-bold text-[#0B332B] leading-snug">
                                                {{ $faq[0] }}
                                            </span>
                                            {{-- +/− icon --}}
                                            <span
                                                class="faq-icon w-7 h-7 rounded-full bg-[#0B332B]/5
                                   flex items-center justify-center shrink-0
                                   text-[#0B332B] font-bold text-base leading-none
                                   transition-all duration-200">
                                                +
                                            </span>
                                        </button>

                                        {{-- Answer — CSS height transition --}}
                                        <div class="faq-body overflow-hidden" id="body-{{ $key }}"
                                            style="max-height:0;transition:max-height 0.35s cubic-bezier(0.16,1,0.3,1)">
                                            <p
                                                class="px-5 pb-5 sm:px-6 sm:pb-6
                                text-base text-[#2A2A2A]/65 leading-relaxed
                                border-t border-[#0B332B]/8 pt-3">
                                                {{ $faq[1] }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    (function() {
        var triggers = document.querySelectorAll('.faq-trigger');

        triggers.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var target = this.getAttribute('data-target');
                var body = document.getElementById('body-' + target);
                var icon = this.querySelector('.faq-icon');
                var item = document.getElementById('item-' + target);
                var isOpen = this.getAttribute('aria-expanded') === 'true';

                /* close all others */
                triggers.forEach(function(other) {
                    if (other === btn) return;
                    var otherTarget = other.getAttribute('data-target');
                    var otherBody = document.getElementById('body-' + otherTarget);
                    var otherIcon = other.querySelector('.faq-icon');
                    var otherItem = document.getElementById('item-' + otherTarget);
                    other.setAttribute('aria-expanded', 'false');
                    if (otherBody) otherBody.style.maxHeight = '0';
                    if (otherIcon) {
                        otherIcon.textContent = '+';
                        otherIcon.style.background = '';
                        otherIcon.style.color = '';
                    }
                    if (otherItem) otherItem.style.borderColor = '';
                });

                if (isOpen) {
                    /* collapse */
                    this.setAttribute('aria-expanded', 'false');
                    body.style.maxHeight = '0';
                    icon.textContent = '+';
                    icon.style.background = '';
                    icon.style.color = '';
                    item.style.borderColor = '';
                } else {
                    /* expand */
                    this.setAttribute('aria-expanded', 'true');
                    body.style.maxHeight = body.scrollHeight + 48 + 'px';
                    icon.textContent = '−';
                    icon.style.background = '#F5850F';
                    icon.style.color = '#ffffff';
                    item.style.borderColor = 'rgba(245,133,15,0.35)';
                }
            });
        });
    }());
</script>
