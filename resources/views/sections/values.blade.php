{{-- ══════════════════════════════════════════════════════
     SECTION: CORE VALUES
     Design: Staggered pinned cards with SVG curved dashed
     connectors — exactly matching the reference image.
     · Cards alternate right / left
     · Each card has a pushpin dot at its top-leading corner
     · SVG cubic bezier curves connect bottom of one card
       to the pin of the next
     · Mobile: single column timeline
══════════════════════════════════════════════════════ --}}
<section id="values" class="bg-[#F0F0EF] py-16 sm:py-20 lg:py-28 overflow-x-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-8 lg:px-12">

        {{-- ── Section header (left-aligned like the image) ── --}}
        <div class="mb-12 sm:mb-16">

            <h2 class="font-display font-bold text-[#0B332B] leading-[1.05] tracking-tight mb-4"
                style="font-size:clamp(1.8rem,4vw,2.8rem)">
                Five principles that drive<br />every delivery we make
            </h2>
            <p class="text-[#2A2A2A]/55 text-[16px] leading-relaxed max-w-xs">
                Safety, integrity, and operational excellence aren't values we aspire to — they're the standard on every
                consignment.
            </p>
        </div>

        {{-- ═══════════════════════════════════════════════
         DESKTOP LAYOUT  (≥ 768px)
         Cards sit in two columns (right col / left col)
         SVG absolute-positioned curved dashed arcs connect them
    ══════════════════════════════════════════════════ --}}
        @php
            $values = [
                [
                    '01',
                    'Safety First & HSE Compliance',
                    'Strict HSE protocols across every depot terminal, vessel discharge, and customer site. Zero tolerance — no exceptions.',
                    'right',
                ],
                [
                    '02',
                    'Volume & Specification Integrity',
                    'Guaranteed unadulterated product specs, exact volume metering at the gantry, and transparent commercial pricing.',
                    'left',
                ],
                [
                    '03',
                    'Operational Precision',
                    '24/7 GPS telemetry fleet tracking, zero-defect handling, and reliable on-time delivery guarantees.',
                    'right',
                ],
                [
                    '04',
                    'Long-term Partnership',
                    'We build enduring corporate relationships grounded in trust, consistency, and mutual growth.',
                    'left',
                ],
                [
                    '05',
                    'National Energy Reach',
                    'Seamless commercial fuel supply across all 36 Nigerian states and strategic West African trade corridors.',
                    'right',
                ],
            ];
        @endphp

        {{-- ─── DESKTOP ─────────────────────────────────── --}}
        <div class="hidden md:block relative" id="values-desktop">

            {{-- The SVG layer sits absolutely behind everything and is drawn by JS --}}
            <svg id="values-svg" class="absolute inset-0 w-full h-full pointer-events-none overflow-visible"
                style="z-index:1" aria-hidden="true">
            </svg>

            {{-- Card rows --}}
            <div class="relative" style="z-index:2">

                @foreach ($values as $i => [$num, $title, $desc, $side])
                    @php $isRight = $side === 'right'; @endphp

                    {{-- Row: half-width card pushed to the correct side --}}
                    <div class="flex {{ $isRight ? 'justify-end' : 'justify-start' }} mb-8"
                        data-values-row="{{ $i }}" data-side="{{ $side }}">

                        <div class="relative w-[52%] sm:w-[48%]" data-values-card="{{ $i }}">

                            {{-- Pushpin dot — top-left for right cards, top-right for left cards --}}
                            <div class="absolute z-10 {{ $isRight ? '-top-2 left-5' : '-top-2 right-5' }}"
                                data-pin="{{ $i }}">
                                {{-- Outer ring --}}
                                <div
                                    class="w-5 h-5 rounded-full bg-[#1a1a1a] border-[3px] border-[#F0F0EF]
                            shadow-lg shadow-black/30 flex items-center justify-center">
                                    {{-- Inner highlight --}}
                                    <div class="w-2 h-2 rounded-full bg-white/30"></div>
                                </div>
                                {{-- Pin shaft shadow --}}
                                <div
                                    class="absolute top-4 left-1/2 -translate-x-1/2 w-0.5 h-2
                            bg-black/15 rounded-b-full">
                                </div>
                            </div>

                            {{-- Card body — slight rotation alternates --}}
                            <div
                                class="bg-white rounded-3xl p-6
                          shadow-[0_4px_20px_rgba(11,51,43,0.08)]
                          border border-white
                          hover:shadow-[0_8px_32px_rgba(11,51,43,0.13)]
                          transition-all duration-300
                          {{ $isRight ? 'rotate-[-1deg] hover:rotate-0' : 'rotate-[0.8deg] hover:rotate-0' }}">

                                <span
                                    class="block text-[10px] font-bold tracking-[0.22em]
                             text-[#F5850F]/70 mb-2">
                                    {{ $num }}
                                </span>
                                <h3 class="font-display font-bold text-[#0B332B] text-xl leading-snug mb-3">
                                    {{ $title }}
                                </h3>
                                <p class="text-[#2A2A2A]/60 text-[16px]">
                                    {{ $desc }}
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- End tag --}}
            <div
                class="flex items-center justify-end gap-2 -mt-2 pr-4
                  text-[12px] font-semibold italic text-[#0B332B]/40">
                <span class="text-[#F5850F] text-base">✦</span>
                Ready to deliver, every time.
            </div>

        </div>

        {{-- ─── MOBILE LAYOUT (< 768px) — timeline stack ──── --}}
        <div class="md:hidden">
            <div class="relative pl-8">

                {{-- Vertical dashed timeline rail --}}
                <div class="absolute left-2.5 top-2 bottom-8 w-px"
                    style="background:repeating-linear-gradient(to bottom,#0B332B30 0,#0B332B30 7px,transparent 7px,transparent 14px)">
                </div>

                @foreach ($values as $i => [$num, $title, $desc, $side])
                    <div class="relative mb-8 last:mb-0">

                        {{-- Pin dot on rail --}}
                        <div class="absolute -left-8 top-5 z-10">
                            <div
                                class="w-5 h-5 rounded-full bg-[#1a1a1a] border-[3px] border-[#F0F0EF]
                          shadow-md shadow-black/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-white/30"></div>
                            </div>
                        </div>

                        {{-- Card --}}
                        <div
                            class="relative bg-white rounded-3xl p-5
                        shadow-[0_4px_16px_rgba(11,51,43,0.08)]
                        border border-white
                        {{ $i % 2 === 0 ? 'rotate-[-0.6deg]' : 'rotate-[0.5deg]' }}">

                            {{-- Small pin dot on card top --}}
                            <div class="absolute -top-1.5 left-5">
                                <div
                                    class="w-3.5 h-3.5 rounded-full bg-[#1a1a1a] border-2 border-[#F0F0EF]
                            shadow-sm">
                                </div>
                            </div>

                            <span
                                class="block text-[10px] font-bold tracking-[0.2em]
                           text-[#F5850F]/70 mb-2 pt-0.5">{{ $num }}</span>
                            <h3 class="font-display font-bold text-[#0B332B] text-lg leading-snug mb-2">
                                {{ $title }}
                            </h3>
                            <p class="text-[#2A2A2A]/60 text-[16px]">{{ $desc }}</p>

                        </div>
                    </div>
                @endforeach

                <div
                    class="flex items-center gap-2 pl-0 pt-1
                    text-[12px] font-semibold italic text-[#0B332B]/40">
                    <span class="text-[#F5850F]">✦</span>
                    Ready to deliver, every time.
                </div>

            </div>
        </div>

        {{-- ── Leadership quote ── --}}
        <div
            class="mt-14 sm:mt-16 bg-white rounded-3xl p-7 sm:p-8
                border border-[#0B332B]/8 shadow-sm max-w-3xl mx-auto">
            <div class="font-display text-5xl text-[#F5850F]/20 leading-none mb-3 select-none">
                &ldquo;
            </div>
            <p class="font-display text-base sm:text-lg text-[#0B332B]/75 leading-relaxed italic mb-6">
                Lasting energy partnerships are built on consistently delivering what we promise — safely, on time, and
                with uncompromised product integrity.
            </p>
            <div class="flex items-center gap-3">
                <div
                    class="w-9 h-9 rounded-full bg-[#F5850F] flex items-center justify-center
                    text-white font-bold text-[16px] shrink-0">
                    AO</div>
                <div>
                    <p class="text-[14px] font-bold text-[#0B332B]">Alms Oil Executive Leadership</p>
                    <p class="text-[13px] text-[#F5850F]">Nigeria Energy Operations</p>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════
     SVG CURVE DRAWER
     Runs after DOM paint. Reads pin positions, draws
     cubic bezier dashed arcs between each consecutive card.
══════════════════════════════════════════════════════ --}}
<script>
    (function() {
        function drawCurves() {
            var svg = document.getElementById('values-svg');
            var desktop = document.getElementById('values-desktop');
            if (!svg || !desktop || window.innerWidth < 768) return;

            var svgRect = svg.getBoundingClientRect();

            // Collect pin centres in SVG-local coordinates
            var pins = Array.from(document.querySelectorAll('[data-pin]'))
                .sort(function(a, b) {
                    return parseInt(a.dataset.pin) - parseInt(b.dataset.pin);
                })
                .map(function(el) {
                    var r = el.getBoundingClientRect();
                    return {
                        x: r.left + r.width / 2 - svgRect.left,
                        y: r.top + r.height / 2 - svgRect.top,
                        side: el.closest('[data-side]').dataset.side
                    };
                });

            // Clear previous paths
            while (svg.firstChild) svg.removeChild(svg.firstChild);

            // Draw a cubic bezier from each pin to the next
            for (var i = 0; i < pins.length - 1; i++) {
                var p1 = pins[i];
                var p2 = pins[i + 1];

                // Control points — bulge outward horizontally toward the open side
                var dx = Math.abs(p2.x - p1.x) * 0.7;
                var dy = (p2.y - p1.y) * 0.5;

                // From p1: curve away from its card's side
                var cx1 = p1.side === 'right' ? p1.x - dx : p1.x + dx;
                var cy1 = p1.y + dy * 0.4;

                // Into p2: approach from the same lateral direction
                var cx2 = p2.side === 'right' ? p2.x - dx : p2.x + dx;
                var cy2 = p2.y - dy * 0.4;

                var d = 'M ' + p1.x + ' ' + p1.y +
                    ' C ' + cx1 + ' ' + cy1 +
                    ', ' + cx2 + ' ' + cy2 +
                    ', ' + p2.x + ' ' + p2.y;

                var path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                path.setAttribute('d', d);
                path.setAttribute('fill', 'none');
                path.setAttribute('stroke', '#0B332B');
                path.setAttribute('stroke-opacity', '0.22');
                path.setAttribute('stroke-width', '1.5');
                path.setAttribute('stroke-dasharray', '5 7');
                path.setAttribute('stroke-linecap', 'round');
                svg.appendChild(path);
            }
        }

        // Draw on load and resize
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(drawCurves, 80);
            });
        } else {
            setTimeout(drawCurves, 80);
        }

        var resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(drawCurves, 120);
        });
    }());
</script>
