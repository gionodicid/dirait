    <script>
      let mobileNavOpen = false;

      function openMobileNav() {
        mobileNavOpen = true;
        document.getElementById('mobile-nav').style.display = 'block';
        document.getElementById('mobile-menu-btn').setAttribute('aria-expanded', 'true');
        requestAnimationFrame(() => {
          document.getElementById('mobile-backdrop').classList.add('open');
          document.getElementById('mobile-panel').classList.add('open');
        });
        document.body.style.overflow = 'hidden';
      }

      function closeMobileNav() {
        mobileNavOpen = false;
        document.getElementById('mobile-backdrop').classList.remove('open');
        document.getElementById('mobile-panel').classList.remove('open');
        document.getElementById('mobile-menu-btn').setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        setTimeout(() => {
          if (!mobileNavOpen) document.getElementById('mobile-nav').style.display = 'none';
        }, 300);
      }

      function bindEvents() {
        document.getElementById('mobile-menu-btn').addEventListener('click', openMobileNav);
        document.getElementById('mobile-close-btn').addEventListener('click', closeMobileNav);
        document.getElementById('mobile-backdrop').addEventListener('click', closeMobileNav);
        document.querySelectorAll('.mobile-link').forEach((l) => l.addEventListener('click', closeMobileNav));
        document.addEventListener('keydown', (e) => {
          if (e.key === 'Escape' && mobileNavOpen) closeMobileNav();
        });
      }

      if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', bindEvents);
      else bindEvents();
    </script>
