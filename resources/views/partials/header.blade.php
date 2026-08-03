{{-- ── Site Header — Alms Oil ────────────────────────────────────────────────── --}}
<header id="site-header"
        class="sticky top-0 z-50 bg-[#F0F0EF]/90 backdrop-blur-lg border-b border-[#0B332B]/10 transition-all duration-300">

  <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12">
    <div class="flex items-center justify-between h-16 sm:h-20">

      {{-- ── Logo ── --}}
      <a href="{{ route('home') }}" class="flex items-center shrink-0 group">
        <img src="/branding/ALMS OIL PNG 01.png"
             alt="Alms Oil Nigeria Limited"
             class="h-5 sm:h-7 lg:h-8 w-auto max-w-[100px] sm:max-w-[140px] lg:max-w-[160px] object-contain object-left transition-transform group-hover:scale-105" />
      </a>

      {{-- ── Desktop Nav Links ── --}}
      <nav class="hidden md:flex items-center gap-8 text-sm font-bold text-[#2A2A2A]">
        
        <a href="{{ route('home') }}"
           class="hover:text-[#F5850F] transition-colors {{ request()->routeIs('home') ? 'text-[#F5850F]' : '' }}">
          Home
        </a>

        <a href="{{ route('about') }}"
           class="hover:text-[#F5850F] transition-colors {{ request()->routeIs('about') ? 'text-[#F5850F]' : '' }}">
          About Us
        </a>

        {{-- Dropdown --}}
        <div class="relative group">
          <button class="flex items-center gap-1.5 hover:text-[#F5850F] transition-colors cursor-pointer py-2 {{ request()->routeIs('services.*') ? 'text-[#F5850F]' : '' }}">
            <span>Services</span>
            <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180 text-[#0B332B]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          
          {{-- Dropdown menu card --}}
          <div class="absolute top-full left-0 mt-1 w-64 bg-white rounded-2xl border border-[#0B332B]/10 shadow-2xl shadow-[#0B332B]/15
                      opacity-0 invisible translate-y-2
                      group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                      transition-all duration-200 z-50 p-2">
            @foreach([
              ['Petroleum Supply & Trading', 'Sourcing & Bulk Trading', route('services.petroleum')],
              ['Logistics & Haulage', 'GPS-tracked Fleet',           route('services.logistics')],
              ['Engineering Services', 'Installation & Maintenance',   route('services.engineering')],
              ['Energy Infrastructure', 'Tank Farms & Stations',     route('services.infrastructure')],
            ] as [$title, $sub, $route])
              <a href="{{ $route }}"
                 class="block px-3.5 py-2.5 rounded-xl hover:bg-[#0B332B]/5 transition-colors group/item">
                <p class="text-xs font-bold text-[#0B332B] group-hover/item:text-[#F5850F] transition-colors">{{ $title }}</p>
                <p class="text-[11px] text-[#2A2A2A]/50 mt-0.5">{{ $sub }}</p>
              </a>
            @endforeach
          </div>
        </div>

        <a href="{{ route('blog.index') }}"
           class="hover:text-[#F5850F] transition-colors {{ request()->routeIs('blog.*') ? 'text-[#F5850F]' : '' }}">
          Insights
        </a>

        <a href="{{ route('contact') }}"
           class="hover:text-[#F5850F] transition-colors {{ request()->routeIs('contact') ? 'text-[#F5850F]' : '' }}">
          Contact
        </a>

      </nav>

      {{-- ── Right Action Group ── --}}
      <div class="hidden md:flex items-center gap-4">
        
        {{-- Direct Phone Link --}}
        <a href="tel:+2348002567645" class="flex items-center gap-2 text-xs font-bold text-[#0B332B] hover:text-[#F5850F] transition-colors">
          <div class="w-8 h-8 rounded-full bg-[#0B332B]/8 flex items-center justify-center">
            <svg class="w-4 h-4 text-[#F5850F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
          </div>
          <span>0700-ALMSOIL</span>
        </a>

        {{-- Quote Button --}}
        <button data-open-quote
                class="inline-flex items-center gap-2 bg-[#0B332B] hover:bg-[#F5850F] text-white
                       font-bold text-xs uppercase tracking-wider
                       px-5 py-3 rounded-full
                       shadow-md hover:shadow-lg hover:shadow-[#F5850F]/20
                       transition-all duration-200 cursor-pointer">
          <span>Request Quote</span>
          <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </button>
      </div>

      {{-- ── Mobile controls ── --}}
      <div class="flex items-center gap-3 md:hidden">
        <button data-open-quote
                class="px-4 py-2 text-xs font-bold uppercase tracking-wider bg-[#F5850F] text-white rounded-full shadow-sm">
          Quote
        </button>
        <button id="nav-toggle"
                aria-label="Toggle navigation"
                class="p-2 rounded-xl text-[#0B332B] hover:bg-[#0B332B]/8 transition-colors">
          <svg id="nav-icon-open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg id="nav-icon-close" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

    </div>
  </div>

</header>

{{-- ── Mobile Drawer Backdrop ── --}}
<div id="nav-backdrop"
     class="fixed inset-0 z-40 bg-black/40 md:hidden opacity-0 pointer-events-none transition-opacity duration-300"
     aria-hidden="true"></div>

{{-- ── Mobile Drawer ── --}}
<aside id="mobile-drawer"
       class="fixed inset-y-0 right-0 z-50 w-[85vw] max-w-[340px] md:hidden bg-white flex flex-col shadow-2xl translate-x-full transition-transform duration-300 ease-out">
  
  <div class="flex items-center justify-between px-6 py-5 border-b border-[#0B332B]/10">
    <img src="/branding/ALMS OIL PNG 01.png" alt="Alms Oil" class="h-7 w-auto object-contain" />
    <button id="drawer-close" aria-label="Close menu" class="p-2 rounded-full bg-[#0B332B]/8 text-[#0B332B]">
      <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </div>

  <nav class="flex-1 overflow-y-auto px-6 py-6 space-y-4">
    <a href="{{ route('home') }}" class="block text-base font-bold text-[#0B332B] hover:text-[#F5850F]">Home</a>
    <a href="{{ route('about') }}" class="block text-base font-bold text-[#0B332B] hover:text-[#F5850F]">About Us</a>
    
    <div class="pt-2 pb-2 border-y border-[#0B332B]/8 space-y-2">
      <p class="text-[11px] font-extrabold uppercase tracking-widest text-[#F5850F]">Our Services</p>
      <a href="{{ route('services.petroleum') }}" class="block text-sm font-semibold text-[#2A2A2A] hover:text-[#F5850F]">Petroleum Supply &amp; Trading</a>
      <a href="{{ route('services.logistics') }}" class="block text-sm font-semibold text-[#2A2A2A] hover:text-[#F5850F]">Logistics &amp; Fleet Haulage</a>
      <a href="{{ route('services.engineering') }}" class="block text-sm font-semibold text-[#2A2A2A] hover:text-[#F5850F]">Engineering &amp; Maintenance</a>
      <a href="{{ route('services.infrastructure') }}" class="block text-sm font-semibold text-[#2A2A2A] hover:text-[#F5850F]">Energy Infrastructure</a>
    </div>

    <a href="{{ route('blog.index') }}" class="block text-base font-bold text-[#0B332B] hover:text-[#F5850F]">Insights</a>
    <a href="{{ route('contact') }}" class="block text-base font-bold text-[#0B332B] hover:text-[#F5850F]">Contact Us</a>
  </nav>

  <div class="p-6 border-t border-[#0B332B]/10 space-y-3">
    <button data-open-quote class="w-full py-3.5 bg-[#F5850F] text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-md text-center">
      Request Supply Quote
    </button>
    <a href="tel:+2348002567645" class="block text-center text-xs font-bold text-[#0B332B]">
      📞 Hotline: 0700-ALMSOIL
    </a>
  </div>

</aside>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.getElementById('nav-toggle');
  var close = document.getElementById('drawer-close');
  var backdrop = document.getElementById('nav-backdrop');
  var drawer = document.getElementById('mobile-drawer');

  function openMenu() {
    drawer.classList.remove('translate-x-full');
    backdrop.classList.remove('opacity-0', 'pointer-events-none');
  }

  function closeMenu() {
    drawer.classList.add('translate-x-full');
    backdrop.classList.add('opacity-0', 'pointer-events-none');
  }

  if (toggle) toggle.addEventListener('click', openMenu);
  if (close) close.addEventListener('click', closeMenu);
  if (backdrop) backdrop.addEventListener('click', closeMenu);
});
</script>
