    <script>
      let revealObserver = null;

      function observeRevealElements() {
        if (revealObserver) revealObserver.disconnect();
        revealObserver = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('visible');
              revealObserver.unobserve(entry.target);
            }
          });
        }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });
        document.querySelectorAll('.reveal:not(.visible)').forEach((el) => revealObserver.observe(el));
      }

      if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', observeRevealElements);
      else observeRevealElements();
    </script>
