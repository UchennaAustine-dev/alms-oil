@extends('layouts.app')
@section('title', 'Insights & Industry News | Alms Oil Nigeria Limited')
@section('description', 'Expert perspectives on petroleum supply, energy logistics, infrastructure development, and Nigeria\'s energy sector from the Alms Oil editorial team.')

@section('content')

{{-- ══════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-[#0B332B]" style="min-height:72vh">
  <div class="absolute inset-0 z-0">
    <img src="https://images.pexels.com/photos/5298215/pexels-photo-5298215.jpeg?auto=compress&cs=tinysrgb&w=1600&q=85"
         alt="Alms Oil industry insights"
         class="w-full h-full object-cover object-center"
         style="filter:saturate(0.65) brightness(0.38) contrast(1.1)" />
    <div class="absolute inset-0"
         style="background:linear-gradient(135deg,rgba(11,51,43,0.88) 0%,rgba(11,51,43,0.48) 55%,rgba(11,51,43,0.75) 100%)"></div>
  </div>
  <div class="absolute inset-0 z-[1] pointer-events-none opacity-[0.15]"
       style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 flex flex-col justify-between" style="min-height:72vh">
    <div class="pt-8 sm:pt-10 flex items-center gap-2 text-[11px] text-white/40 font-medium flex-wrap">
      <a href="{{ route('home') }}" class="hover:text-white/70 transition-colors">Home</a>
      <span>/</span>
      <span class="text-white/65">Insights</span>
    </div>

    <div class="py-12 sm:py-16 lg:py-20">
      <div class="max-w-3xl">
       
        <h1 class="font-display font-bold text-white leading-[0.9] tracking-tight mb-6 sm:mb-8"
            style="font-size:clamp(2.6rem,6vw,5.5rem)">
          Industry<br/><span style="color:#F5850F">Insights.</span>
        </h1>
        <p class="text-white text-sm sm:text-base lg:text-lg leading-relaxed max-w-xl">
          Perspectives on petroleum supply, logistics, energy infrastructure, and Nigeria's energy transition.
        </p>
      </div>
    </div>

    <div class="border-t border-white/8 py-5 flex flex-wrap items-center gap-x-8 gap-y-2">
      @foreach(['Petroleum Supply','Fleet Logistics','Energy Infrastructure','Market Analysis'] as $item)
        <div class="flex items-center gap-2">
          <div class="w-1 h-1 rounded-full bg-[#F5850F]"></div>
          <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40">{{ $item }}</span>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════
     FEATURED POST — Full-bleed editorial card
══════════════════════════════════════════════════ --}}
@if($featured)
<section class="bg-white pt-10 sm:pt-12 pb-2">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex items-center gap-3 mb-6">
      <span class="text-[10px] font-black uppercase tracking-[0.28em] text-[#2A2A2A]/35">Featured</span>
      <div class="flex-1 h-px bg-[#0B332B]/8"></div>
    </div>

    <a href="{{ route('blog.show', $featured->slug) }}"
       class="group relative block rounded-2xl sm:rounded-3xl overflow-hidden bg-[#0B332B] shadow-2xl shadow-[#0B332B]/20">

      {{-- Background image --}}
      <div class="absolute inset-0 z-0">
        @if($featured->cover_image)
          <img src="{{ $featured->cover_image }}" alt="{{ $featured->title }}"
               class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-[1.03]"
               style="filter:brightness(0.45) saturate(0.7)" />
        @else
          <img src="https://images.pexels.com/photos/3888149/pexels-photo-3888149.jpeg?auto=compress&cs=tinysrgb&w=1400&q=85"
               alt="{{ $featured->title }}"
               class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-[1.03]"
               style="filter:brightness(0.45) saturate(0.7)" />
        @endif
        <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(11,51,43,0.95) 0%,rgba(11,51,43,0.4) 60%,transparent 100%)"></div>
      </div>

      {{-- Noise texture --}}
      <div class="absolute inset-0 z-[1] pointer-events-none opacity-[0.12]"
           style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px"></div>

      {{-- Content --}}
      <div class="relative z-10 p-7 sm:p-10 lg:p-14 min-h-[360px] sm:min-h-[440px] lg:min-h-[500px] flex flex-col justify-end">
        <div class="max-w-2xl">
          {{-- Category pill --}}
          <div class="mb-4 sm:mb-5">
            <span class="inline-flex items-center gap-1.5 bg-[#F5850F] text-white text-[10px] font-black uppercase tracking-[0.2em] px-3 py-1.5 rounded-full">
              {{ $featured->category }}
            </span>
          </div>

          <h2 class="font-display font-bold text-white leading-[0.9] tracking-tight mb-4 sm:mb-5 group-hover:text-[#F5850F]/90 transition-colors duration-300"
              style="font-size:clamp(1.6rem,3.5vw,3.2rem)">
            {{ $featured->title }}
          </h2>

          <p class="text-white/65 text-sm sm:text-base leading-relaxed mb-6 sm:mb-8 line-clamp-2">
            {{ $featured->excerpt }}
          </p>

          <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-4 text-white/45 text-xs">
              <span class="font-semibold text-white/65">{{ $featured->author }}</span>
              <span class="w-px h-3 bg-white/20"></span>
              <span>{{ $featured->published_at?->format('M d, Y') ?? $featured->created_at->format('M d, Y') }}</span>
              <span class="w-px h-3 bg-white/20"></span>
              <span>{{ $featured->read_time }}</span>
            </div>
            <span class="inline-flex items-center gap-2 text-[#F5850F] text-xs font-bold uppercase tracking-wider group-hover:gap-3 transition-all duration-200">
              Read Article
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
              </svg>
            </span>
          </div>
        </div>
      </div>
    </a>
  </div>
</section>
@endif

{{-- ══════════════════════════════════════════════════
     ARTICLES GRID
══════════════════════════════════════════════════ --}}
<section class="bg-white py-10 sm:py-14 lg:py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">

    @if($posts->isNotEmpty())
      <div class="flex items-center gap-3 mb-8">
        <span class="text-[10px] font-black uppercase tracking-[0.28em] text-[#2A2A2A]/35">All Articles</span>
        <div class="flex-1 h-px bg-[#0B332B]/8"></div>
        <span class="text-[11px] text-[#2A2A2A]/35 font-semibold">{{ $posts->count() }} {{ $posts->count() === 1 ? 'article' : 'articles' }}</span>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
        @foreach($posts as $post)
          <a href="{{ route('blog.show', $post->slug) }}"
             class="blog-reveal group flex flex-col bg-white rounded-2xl sm:rounded-3xl border border-[#0B332B]/8 overflow-hidden hover:border-[#F5850F]/35 hover:shadow-xl hover:shadow-[#0B332B]/8 transition-all duration-300">

            {{-- Cover image --}}
            <div class="relative overflow-hidden bg-[#0B332B] h-44 sm:h-48 shrink-0">
              @if($post->cover_image)
                <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
                     class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105"
                     style="filter:brightness(0.85) saturate(0.8)" />
              @else
                <img src="https://images.pexels.com/photos/3888149/pexels-photo-3888149.jpeg?auto=compress&cs=tinysrgb&w=600&q=75"
                     alt="{{ $post->title }}"
                     class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105"
                     style="filter:brightness(0.75) saturate(0.65)" />
              @endif
              <div class="absolute inset-0 bg-gradient-to-t from-[#0B332B]/60 to-transparent"></div>

              {{-- Category badge on image --}}
              <div class="absolute bottom-3 left-3">
                <span class="inline-flex items-center bg-white/15 backdrop-blur-sm border border-white/20 text-white text-[9px] font-black uppercase tracking-[0.2em] px-2.5 py-1 rounded-full">
                  {{ $post->category }}
                </span>
              </div>
            </div>

            {{-- Card body --}}
            <div class="flex flex-col flex-1 p-5 sm:p-6">
              <h3 class="font-display font-bold text-[#0B332B] leading-snug text-base sm:text-lg mb-3 group-hover:text-[#F5850F] transition-colors duration-200 line-clamp-3">
                {{ $post->title }}
              </h3>
              <p class="text-[13px] text-[#2A2A2A]/55 leading-relaxed line-clamp-2 mb-4 flex-1">
                {{ $post->excerpt }}
              </p>

              {{-- Footer --}}
              <div class="flex items-center justify-between pt-4 border-t border-[#0B332B]/8 mt-auto">
                <div class="flex items-center gap-2 text-[11px] text-[#2A2A2A]/40">
                  <svg class="w-3 h-3 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                  </svg>
                  <span>{{ $post->published_at?->format('M d, Y') ?? $post->created_at->format('M d, Y') }}</span>
                  <span class="w-px h-3 bg-[#0B332B]/15"></span>
                  <svg class="w-3 h-3 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                  <span>{{ $post->read_time }}</span>
                </div>
                <div class="w-7 h-7 rounded-full bg-[#0B332B]/5 group-hover:bg-[#F5850F] flex items-center justify-center transition-colors duration-200 shrink-0">
                  <svg class="w-3 h-3 text-[#0B332B]/40 group-hover:text-white transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                  </svg>
                </div>
              </div>
            </div>

          </a>
        @endforeach
      </div>

    @elseif(!$featured)
      {{-- Empty state --}}
      <div class="flex flex-col items-center justify-center py-24 text-center">
        <div class="w-14 h-14 rounded-2xl bg-[#0B332B]/5 flex items-center justify-center mb-5">
          <svg class="w-6 h-6 text-[#0B332B]/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
          </svg>
        </div>
        <h3 class="font-display font-bold text-[#0B332B] text-lg mb-2">No articles yet</h3>
        <p class="text-base text-[#2A2A2A]/45">Check back soon for industry insights and updates.</p>
      </div>
    @endif

  </div>
</section>

{{-- ══════════════════════════════════════════════════
     NEWSLETTER / CTA STRIP
══════════════════════════════════════════════════ --}}
<section class="bg-[#F8FAFC] border-t border-[#0B332B]/8 py-12 sm:py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="flex flex-col lg:flex-row lg:items-center gap-8 lg:gap-20">

      <div class="lg:flex-1">
        
        <h2 class="font-display font-bold text-[#0B332B] leading-tight mb-2" style="font-size:clamp(1.4rem,2.5vw,2rem)">
          Need petroleum supply, logistics,<br class="hidden sm:block"/>or infrastructure support?
        </h2>
        <p class="text-base text-[#2A2A2A]/55 ">Our commercial team is available Monday to Saturday, 7am–9pm.</p>
      </div>

      <div class="flex flex-col sm:flex-row gap-3 shrink-0">
        <button data-open-quote
                class="group inline-flex items-center justify-center gap-3 bg-[#F5850F] hover:bg-[#e07708] text-white font-bold text-xs uppercase tracking-wider pl-6 pr-5 py-4 rounded-full shadow-lg shadow-[#F5850F]/20 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
          Request a Quote
          <span class="flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors shrink-0">
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </span>
        </button>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-[#0B332B]/15 text-[#0B332B] font-bold text-xs uppercase tracking-wider hover:bg-[#0B332B] hover:text-white hover:border-[#0B332B] transition-all duration-200">
          Contact Us
        </a>
      </div>

    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
(function(){
  var style=document.createElement('style');
  style.textContent='.blog-reveal{opacity:0;transform:translateY(20px);transition:opacity 0.55s cubic-bezier(.22,1,.36,1),transform 0.55s cubic-bezier(.22,1,.36,1)}.blog-reveal.is-visible{opacity:1;transform:translateY(0)}';
  document.head.appendChild(style);
  if('IntersectionObserver' in window){
    var ro=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('is-visible');ro.unobserve(e.target);}});},{threshold:0.08,rootMargin:'0px 0px -20px 0px'});
    document.querySelectorAll('.blog-reveal').forEach(function(el,i){el.style.transitionDelay=(i%3)*0.08+'s';ro.observe(el);});
  } else { document.querySelectorAll('.blog-reveal').forEach(function(el){el.classList.add('is-visible');}); }
}());
</script>
@endpush
