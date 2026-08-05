@extends('layouts.app')
@section('title', $post->title . ' | Alms Oil Nigeria Limited')
@section('description', $post->excerpt)

@section('content')

{{-- ══════════════════════════════════════════════════
     READING PROGRESS BAR (thin top stripe)
══════════════════════════════════════════════════ --}}
<div id="reading-progress"
     class="fixed top-0 left-0 z-[999] h-[3px] bg-[#F5850F] rounded-r-full pointer-events-none"
     style="width:0%;transition:width 0.1s linear"></div>

{{-- ══════════════════════════════════════════════════
     HERO — Full-bleed banner with dark overlay
══════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-[#0B332B]" style="min-height:70vh">

  {{-- Background --}}
  <div class="absolute inset-0 z-0">
    @if($post->cover_image)
      <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
           class="w-full h-full object-cover object-center"
           style="filter:saturate(0.65) brightness(0.38) contrast(1.08)" />
    @else
      <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1600&q=80&auto=format&fit=crop"
           alt="{{ $post->title }}"
           class="w-full h-full object-cover object-center"
           style="filter:saturate(0.65) brightness(0.38) contrast(1.08)" />
    @endif
    <div class="absolute inset-0"
         style="background:linear-gradient(to top,rgba(11,51,43,1) 0%,rgba(11,51,43,0.75) 40%,rgba(11,51,43,0.45) 70%,rgba(11,51,43,0.3) 100%)"></div>
  </div>

  <div class="absolute inset-0 z-[1] pointer-events-none opacity-[0.12]"
       style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.75%22 numOctaves=%224%22 stitchTiles=%22stitch%22/><feColorMatrix type=%22saturate%22 values=%220%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22 opacity=%220.04%22/></svg>');background-size:200px"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 flex flex-col justify-between" style="min-height:70vh">

    {{-- Top nav --}}
    <div class="pt-8 sm:pt-10 flex items-center justify-between gap-4 flex-wrap">
      <div class="flex items-center gap-2 text-[11px] text-white/40 font-medium flex-wrap">
        <a href="{{ route('home') }}" class="hover:text-white/70 transition-colors">Home</a>
        <span>/</span>
        <a href="{{ route('blog.index') }}" class="hover:text-white/70 transition-colors">Insights</a>
        <span>/</span>
        <span class="text-white/60 truncate max-w-[180px] sm:max-w-xs">{{ $post->title }}</span>
      </div>
      <a href="{{ route('blog.index') }}"
         class="hidden sm:inline-flex items-center gap-2 text-[11px] text-white/45 font-bold uppercase tracking-wider hover:text-white transition-colors">
        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        All Articles
      </a>
    </div>

    {{-- Hero body --}}
    <div class="py-10 sm:py-14 max-w-3xl">
      {{-- Category --}}
      <div class="mb-5">
        <span class="inline-flex items-center bg-[#F5850F] text-white text-[10px] font-black uppercase tracking-[0.2em] px-3 py-1.5 rounded-full">
          {{ $post->category }}
        </span>
      </div>

      {{-- Title --}}
      <h1 class="font-display font-bold text-white leading-[0.88] tracking-tight mb-6"
          style="font-size:clamp(2rem,5vw,4rem)">
        {{ $post->title }}
      </h1>

      {{-- Excerpt --}}
      <p class="text-white/65 text-base sm:text-lg leading-relaxed max-w-2xl mb-8">
        {{ $post->excerpt }}
      </p>

      {{-- Meta row --}}
      <div class="flex flex-wrap items-center gap-x-5 gap-y-3 pt-6 border-t border-white/10">

        {{-- Author --}}
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-full bg-[#F5850F]/20 border border-[#F5850F]/30 flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
          </div>
          <div>
            <p class="text-xs font-bold text-white leading-none">{{ $post->author }}</p>
            @if($post->author_role)
              <p class="text-[10px] text-white/40 mt-0.5">{{ $post->author_role }}</p>
            @endif
          </div>
        </div>

        <div class="w-px h-6 bg-white/10 hidden sm:block"></div>

        {{-- Date --}}
        @if($post->published_at)
          <div class="flex items-center gap-1.5 text-white/45 text-[11px]">
            <svg class="w-3.5 h-3.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span>{{ $post->published_at->format('M d, Y') }}</span>
          </div>
          <div class="w-px h-4 bg-white/10 hidden sm:block"></div>
        @endif

        {{-- Read time --}}
        <div class="flex items-center gap-1.5 text-white/45 text-[11px]">
          <svg class="w-3.5 h-3.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          <span>{{ $post->read_time }}</span>
        </div>

      </div>
    </div>

    {{-- Fade to white --}}
    <div class="h-12 sm:h-16" style="background:linear-gradient(to bottom,transparent,#ffffff)"></div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════
     ARTICLE BODY + SIDEBAR
══════════════════════════════════════════════════ --}}
<section class="bg-white py-10 sm:py-12 lg:py-14">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">

      {{-- ── MAIN ARTICLE ── --}}
      <article id="article-body" class="lg:col-span-8 min-w-0">

        {{-- Mobile back link --}}
        <a href="{{ route('blog.index') }}"
           class="inline-flex items-center gap-2 text-xs font-bold text-[#2A2A2A]/40 hover:text-[#F5850F] uppercase tracking-wider transition-colors mb-8 lg:hidden">
          <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
          </svg>
          All Articles
        </a>

        {{-- Article prose --}}
        <div class="blog-prose">
          {!! $post->body !!}
        </div>

        {{-- Article footer --}}
        <div class="mt-12 pt-8 border-t border-[#0B332B]/8">
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <a href="{{ route('blog.index') }}"
               class="inline-flex items-center gap-2 text-xs font-bold text-[#2A2A2A]/45 hover:text-[#F5850F] uppercase tracking-wider transition-colors">
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
              </svg>
              Back to All Articles
            </a>
            <button data-open-quote
                    class="group inline-flex items-center gap-2 bg-[#F5850F] hover:bg-[#e07708] text-white font-bold text-xs uppercase tracking-wider px-5 py-3 rounded-full shadow-md shadow-[#F5850F]/20 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-200 cursor-pointer">
              Request a Quote
              <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
              </svg>
            </button>
          </div>
        </div>

      </article>

      {{-- ── SIDEBAR ── --}}
      <aside class="lg:col-span-4 space-y-5 lg:sticky lg:top-24">

        {{-- Desktop back link --}}
        <a href="{{ route('blog.index') }}"
           class="hidden lg:inline-flex items-center gap-2 text-xs font-bold text-[#2A2A2A]/40 hover:text-[#F5850F] uppercase tracking-wider transition-colors">
          <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
          </svg>
          All Articles
        </a>

        {{-- Author card --}}
        <div class="rounded-2xl bg-[#F8FAFC] border border-[#0B332B]/8 p-5">
          <p class="text-[10px] font-black uppercase tracking-[0.25em] text-[#0B332B]/35 mb-4">Written By</p>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-[#0B332B] flex items-center justify-center shrink-0">
              <svg class="w-4.5 h-4.5 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
            </div>
            <div>
              <p class="text-sm font-bold text-[#0B332B]">{{ $post->author }}</p>
              @if($post->author_role)
                <p class="text-[11px] text-[#2A2A2A]/45 mt-0.5">{{ $post->author_role }}</p>
              @endif
            </div>
          </div>
        </div>

        {{-- CTA card --}}
        <div class="rounded-2xl bg-[#0B332B] overflow-hidden">
          <div class="h-1 bg-[#F5850F]"></div>
          <div class="p-5 space-y-4">
            <h3 class="font-display font-bold text-white text-base leading-snug">Need Petroleum Supply?</h3>
            <p class="text-white/55 text-[13px] leading-relaxed">
              Talk to our commercial team about supply, logistics, or infrastructure requirements.
            </p>
            <button data-open-quote
                    class="group inline-flex items-center gap-2 bg-[#F5850F] hover:bg-[#e07708] text-white font-bold text-[11px] uppercase tracking-wider px-4 py-3 rounded-full w-full justify-center cursor-pointer transition-all duration-200 hover:-translate-y-0.5">
              Request a Quote
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
              </svg>
            </button>
            <a href="{{ route('contact') }}"
               class="block text-center text-[11px] font-bold text-white/40 hover:text-white/70 transition-colors uppercase tracking-wider">
              or Contact Us
            </a>
          </div>
        </div>

        {{-- Related articles --}}
        @if($related->isNotEmpty())
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.25em] text-[#0B332B]/35 mb-4">More Articles</p>
            <div class="space-y-3">
              @foreach($related as $r)
                <a href="{{ route('blog.show', $r->slug) }}"
                   class="group flex gap-3 p-4 rounded-2xl bg-white border border-[#0B332B]/8 hover:border-[#F5850F]/35 hover:shadow-md transition-all duration-200">

                  {{-- Thumbnail --}}
                  <div class="w-16 h-14 rounded-xl overflow-hidden bg-[#0B332B] shrink-0">
                    @if($r->cover_image)
                      <img src="{{ $r->cover_image }}" alt="{{ $r->title }}"
                           class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300"
                           style="filter:brightness(0.8) saturate(0.7)" />
                    @else
                      <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=160&q=70&auto=format&fit=crop"
                           alt="{{ $r->title }}"
                           class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300"
                           style="filter:brightness(0.7) saturate(0.6)" />
                    @endif
                  </div>

                  <div class="min-w-0 flex flex-col justify-between">
                    <p class="text-[12px] font-bold text-[#0B332B] group-hover:text-[#F5850F] leading-snug transition-colors line-clamp-2">
                      {{ $r->title }}
                    </p>
                    <div class="flex items-center gap-1.5 text-[10px] text-[#2A2A2A]/35 mt-1.5">
                      <svg class="w-3 h-3 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                      </svg>
                      <span>{{ $r->read_time }}</span>
                    </div>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
        @endif

        {{-- Services quick link --}}
        <div class="rounded-2xl bg-[#F8FAFC] border border-[#0B332B]/8 p-5 space-y-3">
          <p class="text-[10px] font-black uppercase tracking-[0.25em] text-[#0B332B]/35">Our Services</p>
          <div class="space-y-2">
            @foreach([
              ['Petroleum Supply', route('services.petroleum')],
              ['Logistics & Haulage', route('services.logistics')],
              ['Energy Infrastructure', route('services.infrastructure')],
              ['Engineering Services', route('services.engineering')],
            ] as [$label,$route])
              <a href="{{ $route }}"
                 class="group flex items-center justify-between gap-2 py-2 border-b border-[#0B332B]/6 last:border-0 hover:text-[#F5850F] transition-colors">
                <span class="text-[12px] font-semibold text-[#2A2A2A]/70 group-hover:text-[#F5850F] transition-colors">{{ $label }}</span>
                <svg class="w-3 h-3 text-[#0B332B]/20 group-hover:text-[#F5850F] group-hover:translate-x-0.5 transition-all shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
              </a>
            @endforeach
          </div>
        </div>

      </aside>
    </div>
  </div>
</section>

@endsection

@push('head')
<style>
/* ── Reading progress bar ── */
#reading-progress { transition: width 0.12s linear; }

/* ── Blog prose typography ── */
.blog-prose {
  color: #2A2A2A;
  font-size: 1rem;
  line-height: 1.85;
}
@media (min-width: 640px) { .blog-prose { font-size: 1.0625rem; } }

.blog-prose h2 {
  font-family: var(--font-display, inherit);
  font-size: clamp(1.35rem, 2.5vw, 1.8rem);
  font-weight: 800;
  color: #0B332B;
  line-height: 1.1;
  letter-spacing: -0.02em;
  margin-top: 2.5rem;
  margin-bottom: 1rem;
}
.blog-prose h3 {
  font-size: 1.1rem;
  font-weight: 700;
  color: #0B332B;
  margin-top: 2rem;
  margin-bottom: 0.75rem;
}
.blog-prose p {
  margin-bottom: 1.5rem;
  color: #2A2A2A;
  opacity: 0.78;
}
.blog-prose a {
  color: #F5850F;
  font-weight: 600;
  text-decoration: underline;
  text-underline-offset: 3px;
}
.blog-prose a:hover { color: #e07708; }
.blog-prose strong { color: #0B332B; font-weight: 700; }
.blog-prose ul, .blog-prose ol {
  margin: 1.25rem 0 1.5rem 0;
  padding-left: 1.5rem;
  opacity: 0.8;
}
.blog-prose ul { list-style-type: disc; }
.blog-prose ol { list-style-type: decimal; }
.blog-prose li { margin-bottom: 0.5rem; }
.blog-prose img {
  width: 100%;
  border-radius: 1rem;
  margin: 2rem 0;
  display: block;
}
.blog-prose blockquote {
  border-left: 3px solid #F5850F;
  padding: 1rem 1.5rem;
  margin: 2rem 0;
  background: #F8FAFC;
  border-radius: 0 0.75rem 0.75rem 0;
  color: #0B332B;
  font-style: italic;
  font-size: 1.05rem;
  line-height: 1.65;
}
.blog-prose blockquote p { opacity: 1; margin-bottom: 0; color: #0B332B; }
.blog-prose code {
  background: #F0F0EF;
  padding: 0.2em 0.45em;
  border-radius: 0.3rem;
  font-size: 0.875em;
  color: #0B332B;
  font-family: monospace;
}
.blog-prose pre {
  background: #0B332B;
  color: #F0F0EF;
  border-radius: 1rem;
  padding: 1.25rem 1.5rem;
  overflow-x: auto;
  margin: 1.5rem 0;
  font-size: 0.875rem;
  line-height: 1.6;
}
.blog-prose pre code { background: none; padding: 0; color: inherit; }
.blog-prose hr {
  border: none;
  border-top: 1px solid rgba(11,51,43,0.1);
  margin: 2.5rem 0;
}
.blog-prose table {
  width: 100%;
  border-collapse: collapse;
  margin: 1.5rem 0;
  font-size: 0.9rem;
}
.blog-prose th {
  background: #0B332B;
  color: white;
  text-align: left;
  padding: 0.65rem 1rem;
  font-weight: 700;
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 0.06em;
}
.blog-prose td {
  padding: 0.65rem 1rem;
  border-bottom: 1px solid rgba(11,51,43,0.08);
  color: rgba(42,42,42,0.75);
}
.blog-prose tr:last-child td { border-bottom: none; }
.blog-prose tr:nth-child(even) td { background: #F8FAFC; }
</style>
@endpush

@push('scripts')
<script>
(function(){
  /* Reading progress bar */
  var bar = document.getElementById('reading-progress');
  var article = document.getElementById('article-body');
  if (bar && article) {
    window.addEventListener('scroll', function() {
      var rect = article.getBoundingClientRect();
      var articleTop = rect.top + window.scrollY;
      var articleHeight = article.offsetHeight;
      var scrolled = window.scrollY - articleTop;
      var progress = Math.min(Math.max(scrolled / (articleHeight - window.innerHeight + 200), 0), 1);
      bar.style.width = (progress * 100) + '%';
    }, { passive: true });
  }
}());
</script>
@endpush
