<style>
/* ── Legal prose typography ── */
.legal-prose {
  color: #2A2A2A;
  font-size: 0.9375rem;
  line-height: 1.8;
}
.legal-prose .lead {
  font-size: 1rem;
  color: rgba(42,42,42,0.75);
  line-height: 1.75;
  margin-bottom: 2rem;
  padding-bottom: 1.5rem;
  border-bottom: 1px solid rgba(11,51,43,0.08);
}
.legal-prose h2 {
  font-family: var(--font-display, inherit);
  font-size: clamp(1.1rem, 2vw, 1.35rem);
  font-weight: 800;
  color: #0B332B;
  letter-spacing: -0.01em;
  margin-top: 2.5rem;
  margin-bottom: 0.875rem;
  padding-top: 2rem;
  border-top: 1px solid rgba(11,51,43,0.07);
  scroll-margin-top: 6rem;
}
.legal-prose h2:first-of-type {
  border-top: none;
  padding-top: 0;
  margin-top: 0;
}
.legal-prose h3 {
  font-size: 1rem;
  font-weight: 700;
  color: #0B332B;
  margin-top: 1.75rem;
  margin-bottom: 0.625rem;
  scroll-margin-top: 6rem;
}
.legal-prose p {
  margin-bottom: 1.25rem;
  color: rgba(42,42,42,0.72);
}
.legal-prose a {
  color: #F5850F;
  font-weight: 600;
  text-decoration: underline;
  text-underline-offset: 3px;
  text-decoration-color: rgba(245,133,15,0.4);
}
.legal-prose a:hover {
  color: #e07708;
  text-decoration-color: #e07708;
}
.legal-prose strong { color: #0B332B; font-weight: 700; }
.legal-prose ul, .legal-prose ol {
  margin: 0.75rem 0 1.25rem 0;
  padding-left: 0;
  list-style: none;
}
.legal-prose li {
  display: flex;
  align-items: flex-start;
  gap: 0.625rem;
  margin-bottom: 0.625rem;
  color: rgba(42,42,42,0.72);
  font-size: 0.9375rem;
}
.legal-prose li::before {
  content: '';
  display: block;
  width: 5px;
  height: 5px;
  min-width: 5px;
  border-radius: 50%;
  background: #F5850F;
  margin-top: 0.55rem;
}
.legal-prose ol { counter-reset: legal-counter; }
.legal-prose ol li { counter-increment: legal-counter; }
.legal-prose ol li::before {
  content: counter(legal-counter) '.';
  background: none;
  color: #F5850F;
  font-weight: 700;
  font-size: 0.8rem;
  width: auto;
  height: auto;
  border-radius: 0;
  margin-top: 0;
  min-width: 1.25rem;
}

/* Active TOC link */
.toc-link.active {
  color: #F5850F;
  background: rgba(245,133,15,0.08);
  font-weight: 700;
}
.toc-link.active span {
  background: #F5850F;
}
</style>
