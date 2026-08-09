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
      <nav class="hidden md:flex items-center gap-5 text-sm font-bold text-[#2A2A2A]">

        <a href="{{ route('services.petroleum') }}"
           class="hover:text-[#F5850F] transition-colors {{ request()->routeIs('services.petroleum') ? 'text-[#F5850F]' : '' }}">
          Petroleum Supply
        </a>

        <a href="{{ route('services.logistics') }}"
           class="hover:text-[#F5850F] transition-colors {{ request()->routeIs('services.logistics') ? 'text-[#F5850F]' : '' }}">
          Logistics
        </a>

        <a href="{{ route('services.engineering') }}"
           class="hover:text-[#F5850F] transition-colors {{ request()->routeIs('services.engineering') ? 'text-[#F5850F]' : '' }}">
          Engineering Services
        </a>

        <a href="{{ route('services.infrastructure') }}"
           class="hover:text-[#F5850F] transition-colors {{ request()->routeIs('services.infrastructure') ? 'text-[#F5850F]' : '' }}">
          Energy Infrastructure
        </a>

        <a href="{{ route('blog.index') }}"
           class="hover:text-[#F5850F] transition-colors {{ request()->routeIs('blog.*') ? 'text-[#F5850F]' : '' }}">
          Insights
        </a>

      </nav>

      {{-- ── Right Action Group ── --}}
      <div class="hidden md:flex items-center gap-4">
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-[#0B332B] hover:bg-[#F5850F] text-white
                  font-bold text-xs uppercase tracking-wider
                  px-5 py-3 rounded-full
                  shadow-md hover:shadow-lg hover:shadow-[#F5850F]/20
                  transition-all duration-200">
          <span>Contact Us</span>
          <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </a>
      </div>

      {{-- ── Mobile controls ── --}}
      <div class="flex items-center gap-3 md:hidden">
        <a href="{{ route('contact') }}"
           class="px-4 py-2 text-xs font-bold uppercase tracking-wider bg-[#F5850F] text-white rounded-full shadow-sm">
          Contact
        </a>
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
    <a href="{{ route('services.petroleum') }}" class="block text-base font-bold text-[#0B332B] hover:text-[#F5850F]">Petroleum Supply</a>
    <a href="{{ route('services.logistics') }}" class="block text-base font-bold text-[#0B332B] hover:text-[#F5850F]">Logistics</a>
    <a href="{{ route('services.engineering') }}" class="block text-base font-bold text-[#0B332B] hover:text-[#F5850F]">Engineering Services</a>
    <a href="{{ route('services.infrastructure') }}" class="block text-base font-bold text-[#0B332B] hover:text-[#F5850F]">Energy Infrastructure</a>
    <a href="{{ route('blog.index') }}" class="block text-base font-bold text-[#0B332B] hover:text-[#F5850F]">Insights</a>
  </nav>

  <div class="p-6 border-t border-[#0B332B]/10">
    <a href="{{ route('contact') }}" class="block w-full py-3.5 bg-[#F5850F] text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-md text-center">
      Contact Us
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
