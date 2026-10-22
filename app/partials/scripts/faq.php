    <script>
      let openFaqId = null;

      function toggleFaq(id) {
        const wasOpen = openFaqId === id;
        document.querySelectorAll('.faq-panel').forEach((p) => p.classList.remove('open'));
        document.querySelectorAll('.faq-trigger').forEach((t) => {
          t.setAttribute('aria-expanded', 'false');
          t.querySelector('.faq-icon').style.transform = '';
        });
        if (!wasOpen) {
          const panel = document.getElementById('faq-panel-' + id);
          const trigger = document.getElementById('faq-trigger-' + id);
          if (panel && trigger) {
            panel.classList.add('open');
            trigger.setAttribute('aria-expanded', 'true');
            trigger.querySelector('.faq-icon').style.transform = 'rotate(45deg)';
            openFaqId = id;
          }
        } else {
          openFaqId = null;
        }
      }

      document.querySelectorAll('.faq-trigger').forEach((trigger) => {
        trigger.addEventListener('click', () => toggleFaq(trigger.dataset.faqId));
      });
    </script>
