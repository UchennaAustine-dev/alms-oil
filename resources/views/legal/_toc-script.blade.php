<script>
(function(){
  /* Smooth scroll for TOC anchors */
  document.querySelectorAll('.toc-link').forEach(function(link){
    link.addEventListener('click', function(e){
      var href = link.getAttribute('href');
      if(!href || href[0] !== '#') return;
      var target = document.querySelector(href);
      if(!target) return;
      e.preventDefault();
      var offset = 96;
      var y = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top: y, behavior: 'smooth' });
    });
  });

  /* Active state tracking via IntersectionObserver */
  var headings = document.querySelectorAll('.legal-prose h2[id], .legal-prose h3[id]');
  var links = document.querySelectorAll('.toc-link');
  if(!headings.length || !links.length) return;

  var activeId = null;
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if(e.isIntersecting){ activeId = e.target.id; }
    });
    links.forEach(function(l){
      var href = l.getAttribute('href');
      l.classList.toggle('active', href === '#' + activeId);
    });
  }, { rootMargin: '-96px 0px -60% 0px', threshold: 0 });

  headings.forEach(function(h){ io.observe(h); });
}());
</script>
