    <script>
      (() => {
        const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (reduced || !('IntersectionObserver' in window)) return;

        const targets = document.querySelectorAll([
          '.hero-copy > *', '.console', '.bento .tile',
          '.work-head > *', '.projects li', '.strip figure',
          '.clients li', '.facts li', '.plans .plan',
          '.faq-list details', '.cta-inner > *',
        ].join(','));
        if (!targets.length) return;

        const observer = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('in');
            observer.unobserve(entry.target);
          });
        }, { rootMargin: '0px 0px -10% 0px', threshold: 0.06 });

        targets.forEach((el, i) => {
          el.classList.add('rv');
          el.style.transitionDelay = `${(i % 5) * 65}ms`;
          observer.observe(el);
        });
      })();
    </script>
