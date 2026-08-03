{{-- ══════════════════════════════════════════════════════
     SECTION: TESTIMONIALS — stats bar removed
══════════════════════════════════════════════════════ --}}
@php
  $testimonialItems = (isset($testimonials) && $testimonials->isNotEmpty())
    ? $testimonials
    : collect([
        (object)['quote' => 'Alms Oil has been our primary AGO supplier for 3 manufacturing facilities across Lagos and Ogun State. Product quality is guaranteed and delivery is always seamless.', 'name' => 'Engr. Babatunde Adeleke', 'role' => 'VP Operations', 'company' => 'Consolidated Manufacturing Ltd', 'initial' => 'B'],
        (object)['quote' => 'Their 24/7 telemetry fleet tracking gives us total transparency. When we needed emergency dispatch during grid outages, Alms Oil delivered within 4 hours.', 'name' => 'Dr. Chidi Nwachukwu', 'role' => 'Logistics Director', 'company' => 'West Coast Telecommunications', 'initial' => 'C'],
        (object)['quote' => 'From tank farm maintenance to fuel station supply, Alms Oil demonstrates true PIA compliance and regulatory professionalism. They are our long-term energy partner.', 'name' => 'Alhaji Farouk Bello', 'role' => 'Managing Director', 'company' => 'Sahara Retail Energy', 'initial' => 'F'],
      ]);
  $first = $testimonialItems->first();
  $rest  = $testimonialItems->skip(1)->values();
@endphp

<section class="bg-[#F0F0EF]/60 border-t border-[#0B332B]/8 overflow-hidden">

  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 py-14 sm:py-20 lg:py-28">

    {{-- ── Header ── --}}
    <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between mb-10 sm:mb-14">

      <div class="min-w-0">
        <div class="flex items-center gap-2.5 mb-4">
          <div class="w-1.5 h-1.5 rounded-full bg-[#F5850F] shrink-0"></div>
          <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-[#F5850F]">
            Client Testimonials
          </span>
        </div>
        <h2 class="font-display font-bold text-[#0B332B] leading-[0.92] tracking-tight"
            style="font-size:clamp(1.9rem,4vw,3.5rem)">
          Here's What Our<br/>Customers Say
        </h2>
      </div>

      {{-- Rating chip --}}
      <div class="flex items-center gap-4 bg-white border border-[#0B332B]/8
                  rounded-2xl px-5 py-4 shadow-sm w-fit shrink-0">
        <div>
          <div class="flex items-center gap-0.5 mb-1">
            @for($i = 0; $i < 5; $i++)
              <svg class="w-3.5 h-3.5 text-[#F5850F] fill-current" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
            @endfor
          </div>
          <p class="text-[12px] font-bold text-[#0B332B] leading-none">5.0 / 5.0</p>
          <p class="text-[10px] text-[#2A2A2A]/45 mt-0.5">Verified Deliveries</p>
        </div>
        <div class="w-px h-9 bg-[#0B332B]/10 shrink-0"></div>
        <div>
          <p class="text-xl font-display font-black text-[#0B332B] leading-none">100%</p>
          <p class="text-[10px] text-[#2A2A2A]/45 mt-0.5">Retention</p>
        </div>
      </div>

    </div>

    {{-- ══════════════════════════
         CARDS LAYOUT
         Mobile:  stack all cards vertically
         lg:      featured (left 5-col) + two cards stacked (right 7-col)
    ══════════════════════════ --}}
    <div class="flex flex-col gap-5 lg:grid lg:grid-cols-12 lg:items-stretch">

      {{-- ── Featured card (dark green) ── --}}
      <div class="lg:col-span-5 bg-[#0B332B] rounded-3xl p-6 sm:p-8
                  flex flex-col justify-between
                  relative overflow-hidden
                  shadow-2xl shadow-[#0B332B]/20 min-h-0">

        <div class="absolute top-0 right-0 w-48 h-48 rounded-full
                    bg-[#F5850F]/12 blur-3xl pointer-events-none
                    -translate-y-1/3 translate-x-1/3"></div>

        <div class="relative z-10 mb-6">
          {{-- Stars --}}
          <div class="flex items-center gap-1 mb-5">
            @for($i = 0; $i < 5; $i++)
              <svg class="w-4 h-4 text-[#F5850F] fill-current" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
            @endfor
          </div>
          {{-- Big quote mark --}}
          <div class="font-display text-5xl sm:text-6xl text-[#F5850F]/35
                      leading-none mb-4 select-none">&ldquo;</div>
          {{-- Quote text --}}
          <p class="text-white/85 text-sm sm:text-base leading-relaxed">
            {{ $first->quote }}
          </p>
        </div>

        {{-- Author --}}
        <div class="relative z-10 flex flex-wrap items-center gap-3
                    pt-6 border-t border-white/10">
          <div class="w-10 h-10 rounded-full bg-[#F5850F]
                      flex items-center justify-center
                      text-white font-bold text-sm shrink-0">
            {{ $first->initial ?? substr($first->name, 0, 1) }}
          </div>
          <div class="min-w-0 flex-1">
            <p class="text-sm font-bold text-white truncate">{{ $first->name }}</p>
            <p class="text-[11px] text-white/50 mt-0.5 truncate">
              {{ $first->role }}, {{ $first->company }}
            </p>
          </div>
          <div class="flex items-center gap-1.5 bg-[#F5850F]/15 border border-[#F5850F]/20
                      px-2.5 py-1.5 rounded-full shrink-0">
            <svg class="w-3 h-3 text-[#F5850F]" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
            <span class="text-[9px] font-bold text-[#F5850F]">Verified</span>
          </div>
        </div>

      </div>

      {{-- ── Secondary cards ── --}}
      <div class="lg:col-span-7 flex flex-col gap-5">

        @foreach($rest as $i => $t)
          <div class="flex-1 bg-white rounded-3xl p-5 sm:p-7
                      border border-[#0B332B]/8
                      hover:border-[#F5850F]/40 hover:shadow-lg
                      transition-all duration-300
                      flex flex-col justify-between">

            {{-- Stars + decorative quote --}}
            <div class="flex items-start justify-between mb-4">
              <div class="flex items-center gap-0.5">
                @for($s = 0; $s < 5; $s++)
                  <svg class="w-3.5 h-3.5 text-[#F5850F] fill-current" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                  </svg>
                @endfor
              </div>
              <div class="font-display text-4xl text-[#F5850F]/18
                          leading-none select-none -mt-1 ml-2">&ldquo;</div>
            </div>

            <p class="text-[#2A2A2A]/70 text-[13px] sm:text-sm leading-relaxed flex-1 mb-5">
              {{ $t->quote }}
            </p>

            {{-- Author row --}}
            <div class="flex flex-wrap items-center justify-between gap-3
                        pt-4 border-t border-[#0B332B]/6">
              <div class="flex items-center gap-3 min-w-0">
                <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-[#0B332B]
                            flex items-center justify-center
                            text-white font-bold text-xs shrink-0">
                  {{ $t->initial ?? substr($t->name, 0, 1) }}
                </div>
                <div class="min-w-0">
                  <p class="text-[13px] font-bold text-[#0B332B] truncate">{{ $t->name }}</p>
                  <p class="text-[11px] text-[#2A2A2A]/45 mt-0.5 truncate">
                    {{ $t->role }}, {{ $t->company }}
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-1.5 bg-[#0B332B]/5
                          border border-[#0B332B]/8
                          px-2.5 py-1.5 rounded-full shrink-0">
                <svg class="w-3 h-3 text-[#0B332B]" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-[9px] font-bold text-[#0B332B]/60">Verified</span>
              </div>
            </div>

          </div>
        @endforeach

      </div>

    </div>

    {{-- Stats bar REMOVED as per design direction --}}

  </div>
</section>
