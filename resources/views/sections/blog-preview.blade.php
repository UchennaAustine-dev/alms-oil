{{-- ══════════════════════════════════════════════════════════════════════════
     INDUSTRY INSIGHTS & MARKET INTELLIGENCE SECTION
     · High-quality Unsplash stock images contextually matching each article
══════════════════════════════════════════════════════════════════════════ --}}
@php
  // Fallback posts if database table is unseeded
  $postsList = (isset($recentPosts) && $recentPosts->isNotEmpty()) ? $recentPosts : collect([
    (object)[
      'title' => 'Petroleum Industry Act (PIA): Key Operational Impacts on Downstream Sourcing',
      'slug' => 'pia-operational-impacts-downstream',
      'category' => 'Regulatory & Policy',
      'published_at' => now()->subDays(3),
      'read_time' => '5 min read',
      // Nigerian business/legal — professional desk setting
      'image' => 'https://images.pexels.com/photos/5668882/pexels-photo-5668882.jpeg?auto=compress&cs=tinysrgb&w=700&q=85'
    ],
    (object)[
      'title' => 'Optimizing Commercial Fleet Fuel Logistics Across All 36 Nigerian States',
      'slug' => 'optimizing-commercial-fleet-fuel-logistics',
      'category' => 'Logistics & Fleet',
      'published_at' => now()->subDays(7),
      'read_time' => '4 min read',
      // Trucks on road — universal haulage / fleet
      'image' => 'https://images.pexels.com/photos/1117210/pexels-photo-1117210.jpeg?auto=compress&cs=tinysrgb&w=700&q=85'
    ],
    (object)[
      'title' => 'Bulk Fuel Quality Assurance: Preventing Contamination in Generator Supplies',
      'slug' => 'bulk-fuel-quality-assurance-guide',
      'category' => 'Quality Assurance',
      'published_at' => now()->subDays(12),
      'read_time' => '6 min read',
      // Black scientist / lab technician — quality testing
      'image' => 'https://images.pexels.com/photos/3862130/pexels-photo-3862130.jpeg?auto=compress&cs=tinysrgb&w=700&q=85'
    ],
  ]);
@endphp

<section class="bg-[#FDFDFC] py-16 sm:py-20 lg:py-28 border-b border-[#0B332B]/8">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">

    {{-- SECTION HEADER --}}
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-10 sm:mb-14">
      <div class="space-y-3 max-w-2xl">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#0B332B]/5 border border-[#0B332B]/10">
          <span class="w-2 h-2 rounded-full bg-[#F5850F]"></span>
          <span class="text-[10px] sm:text-[11px] font-bold tracking-[0.22em] uppercase text-[#0B332B]">
            INDUSTRY INSIGHTS
          </span>
        </div>
        <h2 class="font-display font-black text-[#0B332B] text-2xl sm:text-4xl lg:text-5xl tracking-tight leading-tight">
          Petroleum Market Intelligence
        </h2>
        <p class="text-[#2A2A2A]/70 text-xs sm:text-base leading-relaxed">
          Expert analysis on downstream oil &amp; gas trends, PIA regulations, fleet logistics, and fuel pricing across Nigeria.
        </p>
      </div>

      <a href="{{ route('blog.index') }}"
         class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full border border-[#0B332B]/20 bg-white text-[#0B332B] font-bold text-xs uppercase tracking-wider hover:bg-[#0B332B] hover:text-white transition-all shrink-0 w-full sm:w-auto text-center">
        <span>View All Insights</span>
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
        </svg>
      </a>
    </div>

    {{-- POSTS GRID --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach($postsList as $post)
        <a href="{{ isset($post->id) ? route('blog.show', $post->slug) : route('blog.index') }}"
           class="group bg-white rounded-3xl overflow-hidden border border-[#0B332B]/10 shadow-sm hover:shadow-xl hover:border-[#F5850F]/50 transition-all duration-300 flex flex-col justify-between">
          
          <div>
            {{-- Stock Image Thumbnail --}}
            <div class="relative h-48 overflow-hidden bg-[#0B332B]">
              <img src="{{ $post->image ?? 'https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?w=700&q=85&auto=format&fit=crop' }}"
                   alt="{{ $post->title }}"
                   class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
              <span class="absolute top-3 left-3 bg-[#0B332B]/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-[#F5850F] border border-white/10">
                {{ $post->category }}
              </span>
            </div>

            <div class="p-6 space-y-3">
              <h3 class="font-display font-bold text-[#0B332B] text-lg sm:text-xl group-hover:text-[#F5850F] transition-colors leading-snug">
                {{ $post->title }}
              </h3>
            </div>
          </div>

          <div class="px-6 pb-6 pt-4 border-t border-[#0B332B]/8 flex items-center justify-between text-[11px] text-[#2A2A2A]/60 font-medium">
            <div>
              <span>{{ is_string($post->published_at) ? $post->published_at : ($post->published_at?->format('M d, Y') ?? 'Recent') }}</span>
              <span class="mx-1.5">·</span>
              <span>{{ $post->read_time }}</span>
            </div>
            <span class="text-xs font-bold text-[#0B332B] group-hover:text-[#F5850F] transition-colors">Read Article →</span>
          </div>

        </a>
      @endforeach
    </div>

  </div>
</section>
