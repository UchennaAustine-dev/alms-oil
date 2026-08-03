// ── Scroll animation observer ─────────────────────────────────────────────
const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('is-visible');
            io.unobserve(e.target);
        }
    });
}, { threshold: 0.08 });

document.querySelectorAll(
    '.scroll-animate, .scroll-animate-left, .scroll-animate-right'
).forEach(el => io.observe(el));

// ── FAQ accordion ─────────────────────────────────────────────────────────
document.querySelectorAll('[data-faq-btn]').forEach(btn => {
    btn.addEventListener('click', () => {
        const key   = btn.dataset.faqBtn;
        const body  = document.querySelector(`[data-faq-body="${key}"]`);
        const icon  = btn.querySelector('[data-faq-icon]');
        const isOpen = btn.getAttribute('aria-expanded') === 'true';

        // Close all
        document.querySelectorAll('[data-faq-btn]').forEach(b => {
            const k = b.dataset.faqBtn;
            const bd = document.querySelector(`[data-faq-body="${k}"]`);
            const ic = b.querySelector('[data-faq-icon]');
            b.setAttribute('aria-expanded', 'false');
            b.classList.remove('bg-amber-50/50', 'border-amber-500/30');
            b.closest('[data-faq-item]')?.classList.remove('border-amber-500/30', 'bg-amber-50/50');
            b.closest('[data-faq-item]')?.classList.add('border-slate-200', 'bg-white');
            b.querySelector('span[data-faq-q]')?.classList.remove('text-amber-800');
            b.querySelector('span[data-faq-q]')?.classList.add('text-slate-900');
            if (ic) { ic.textContent = '+'; ic.classList.remove('bg-amber-500','text-white'); ic.classList.add('bg-slate-100','text-slate-500'); }
            if (bd) { bd.style.maxHeight = '0'; bd.style.opacity = '0'; }
        });

        // Open clicked (if was closed)
        if (!isOpen) {
            btn.setAttribute('aria-expanded', 'true');
            const item = btn.closest('[data-faq-item]');
            item?.classList.remove('border-slate-200','bg-white');
            item?.classList.add('border-amber-500/30','bg-amber-50/50');
            btn.querySelector('span[data-faq-q]')?.classList.add('text-amber-800');
            btn.querySelector('span[data-faq-q]')?.classList.remove('text-slate-900');
            if (icon) { icon.textContent = '−'; icon.classList.add('bg-amber-500','text-white'); icon.classList.remove('bg-slate-100','text-slate-500'); }
            if (body) { body.style.maxHeight = body.scrollHeight + 'px'; body.style.opacity = '1'; }
        }
    });
});

// ── Mobile nav toggle ─────────────────────────────────────────────────────
const mobileMenuBtn  = document.getElementById('mobile-menu-btn');
const mobileDrawer   = document.getElementById('mobile-drawer');
const mobileOverlay  = document.getElementById('mobile-overlay');
const mobileClose    = document.getElementById('mobile-close');

function openMobile()  { mobileDrawer?.classList.remove('translate-x-full'); mobileOverlay?.classList.remove('opacity-0','pointer-events-none'); document.body.style.overflow = 'hidden'; }
function closeMobile() { mobileDrawer?.classList.add('translate-x-full');    mobileOverlay?.classList.add('opacity-0','pointer-events-none');    document.body.style.overflow = ''; }

mobileMenuBtn?.addEventListener('click', openMobile);
mobileClose?.addEventListener('click',   closeMobile);
mobileOverlay?.addEventListener('click', closeMobile);

// ── Quote modal ───────────────────────────────────────────────────────────
function openQuoteModal(service) {
    const modal = document.getElementById('quote-modal');
    if (!modal) return;
    if (service) {
        const sel = modal.querySelector('[name="service"]');
        if (sel) {
            for (const opt of sel.options) {
                if (opt.value === service) { sel.value = service; break; }
            }
        }
    }
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeQuoteModal() {
    document.getElementById('quote-modal')?.classList.add('hidden');
    document.body.style.overflow = '';
}

document.querySelectorAll('[data-open-quote]').forEach(btn => {
    btn.addEventListener('click', () => openQuoteModal(btn.dataset.openQuote || null));
});

document.getElementById('quote-modal-close')?.addEventListener('click', closeQuoteModal);
document.getElementById('quote-modal-backdrop')?.addEventListener('click', closeQuoteModal);

// ── Scroll to top ─────────────────────────────────────────────────────────
const scrollBtn = document.getElementById('scroll-top-btn');
if (scrollBtn) {
    window.addEventListener('scroll', () => {
        scrollBtn.classList.toggle('opacity-0', window.scrollY < 400);
        scrollBtn.classList.toggle('pointer-events-none', window.scrollY < 400);
    }, { passive: true });
    scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

// ── Header scroll shadow ──────────────────────────────────────────────────
const siteHeader = document.getElementById('site-header');
if (siteHeader) {
    window.addEventListener('scroll', () => {
        siteHeader.style.boxShadow = window.scrollY > 20 ? '0 1px 0 0 #e5e7eb' : 'none';
    }, { passive: true });
}

// Close mobile nav on link click
document.querySelectorAll('#mobile-drawer a').forEach(a => {
    a.addEventListener('click', closeMobile);
});
