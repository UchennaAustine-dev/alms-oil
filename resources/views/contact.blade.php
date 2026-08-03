@extends('layouts.app')
@section('title', 'Contact Us | Alms Oil Nigeria Limited')

@section('content')

{{-- ── Hero ── --}}
<section class="bg-white border-b border-[#0B332B]/8 pt-10 sm:pt-14 pb-12 sm:pb-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex items-center gap-2.5 mb-5">
      <div class="w-1.5 h-1.5 rounded-full bg-[#F5850F]"></div>
      <span class="text-[10px] font-bold tracking-[0.28em] uppercase text-[#F5850F]">Get In Touch</span>
    </div>
    <h1 class="font-display font-bold text-[#0B332B] leading-[0.9] tracking-tight"
        style="font-size:clamp(2.4rem,5vw,4.5rem)">
      Contact<br/><span style="color:#F5850F">Alms Oil.</span>
    </h1>
  </div>
</section>

{{-- ── Content ── --}}
<section class="bg-[#F0F0EF]/50 py-12 sm:py-16 lg:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">

      {{-- Left: contact info --}}
      <div class="lg:col-span-5 space-y-4">
        <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#0B332B]/40 mb-5">
          Contact Details
        </p>

        @php
          $cards = [
            ['Phone / WhatsApp',   '+234 (0) 800 ALMSOIL',             'Mon–Sat, 7am–9pm',                    'tel:+2348002567645',       true],
            ['Email Desk',         'info@almsoil.com',                  'Response within 2 hours',              'mailto:info@almsoil.com',  true],
            ['Head Office',        'Lagos, Nigeria',                    'Operational Hub & Terminal Network',   null,                       false],
            ['Emergency Dispatch', '24 / 7 Available',                  'Nationwide coverage',                  null,                       false],
            ['Regional Office',    'Abuja, FCT Nigeria',               'Commercial Desk & Advisory',            null,                       false],
          ];
        @endphp

        @foreach($cards as [$label, $value, $sub, $href, $isLink])
          @php $tag = $isLink ? 'a' : 'div'; @endphp
          <{{ $tag }} {{ $isLink ? 'href="'.$href.'"' : '' }}
            class="flex items-start gap-4 p-4 sm:p-5 rounded-2xl bg-white
                   border border-[#0B332B]/8 {{ $isLink ? 'hover:border-[#F5850F]/50 hover:bg-[#F5850F]/[0.02] group' : '' }}
                   transition-all duration-200">
            <div class="w-9 h-9 rounded-xl bg-[#0B332B]/5 flex items-center justify-center shrink-0">
              <div class="w-2 h-2 rounded-full bg-[#F5850F]"></div>
            </div>
            <div class="min-w-0">
              <p class="text-[10px] font-bold uppercase tracking-wider text-[#0B332B]/40 mb-0.5">{{ $label }}</p>
              <p class="text-sm font-bold text-[#0B332B] {{ $isLink ? 'group-hover:text-[#F5850F]' : '' }} transition-colors leading-snug">
                {{ $value }}
              </p>
              <p class="text-[11px] text-[#2A2A2A]/45 mt-0.5">{{ $sub }}</p>
            </div>
          </{{ $tag }}>
        @endforeach

        <div class="flex items-center gap-2 pt-1 text-xs text-[#2A2A2A]/40">
          <svg class="w-3.5 h-3.5 text-[#0B332B]/40 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
          All submissions are encrypted and handled confidentially.
        </div>
      </div>

      {{-- Right: form --}}
      <div class="lg:col-span-7">
        @if(session('success'))
          <div class="bg-white rounded-3xl p-8 sm:p-12 flex flex-col items-center text-center
                      space-y-5 border border-[#0B332B]/8 shadow-sm">
            <div class="w-14 h-14 rounded-full bg-[#0B332B]/8 flex items-center justify-center">
              <svg class="w-7 h-7 text-[#0B332B]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h4 class="text-xl font-bold font-display text-[#0B332B]">Message Received!</h4>
            <p class="text-[#2A2A2A]/55 text-sm max-w-sm">{{ session('success') }}</p>
          </div>
        @else
          @if($errors->any())
            <div class="mb-5 px-4 py-3 rounded-2xl bg-red-50 border border-red-100 text-red-600 text-sm">
              @foreach($errors->all() as $e)<p>{{ $e }}</p>@endforeach
            </div>
          @endif

          <form method="POST" action="{{ route('contact.store') }}"
                class="bg-white rounded-3xl p-6 sm:p-8 space-y-5
                       border border-[#0B332B]/8 shadow-sm">
            @csrf

            <h3 class="text-lg font-bold font-display text-[#0B332B]">Send Us a Message</h3>

            @php
              $ic = 'w-full px-4 py-3 rounded-xl bg-[#F0F0EF] border border-[#0B332B]/10 text-sm text-[#2A2A2A] placeholder:text-[#2A2A2A]/35 focus:outline-none focus:border-[#F5850F] focus:bg-white focus:ring-2 focus:ring-[#F5850F]/15 transition-all';
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
                        placeholder="Tell us about your fuel supply needs or how we can help…"
                        class="{{ $ic }} resize-none">{{ old('message') }}</textarea>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-1">
              <p class="text-[11px] text-[#2A2A2A]/40 leading-relaxed max-w-xs">
                We respond within 2 business hours. Emergency inquiries handled 24/7.
              </p>
              <button type="submit"
                      class="group w-full sm:w-auto flex items-center justify-center gap-3
                             bg-[#F5850F] hover:bg-[#e07708] text-white
                             font-bold text-sm uppercase tracking-wide
                             pl-7 pr-5 py-4 rounded-full shrink-0
                             shadow-lg shadow-[#F5850F]/20
                             hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.98]
                             transition-all duration-200">
                <span>Send Message</span>
                <span class="flex items-center justify-center w-7 h-7 rounded-full
                             bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
                  <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
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

@endsection
