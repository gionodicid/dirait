    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= e($page['title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= e($page['canonical']) ?>" />
<?php require APP_ROOT . '/app/partials/meta.php'; ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: { ikb: "#002FA7", "ikb-dark": "#002080" },
            fontFamily: { sans: ['"Helvetica Neue"', "Helvetica", "Arial", "sans-serif"] },
          },
        },
      };
    </script>
    <style>
      body { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
      .mobile-backdrop { opacity: 0; pointer-events: none; transition: opacity 0.15s ease; }
      .mobile-backdrop.open { opacity: 1; pointer-events: auto; }
      .mobile-panel { transform: translateX(100%); transition: transform 0.2s ease; }
      .mobile-panel.open { transform: translateX(0); }
      *:focus-visible { outline: 2px solid #002FA7; outline-offset: 2px; }
      @media (prefers-reduced-motion: reduce) { .mobile-panel, .mobile-backdrop { transition: none; } }
      .ikb-line { height: 4px; background: #002FA7; width: 3rem; }
      .cta-grid-bg { background-image: linear-gradient(to right, rgba(255,255,255,0.04) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,0.04) 1px, transparent 1px); background-size: 48px 48px; }
    </style>
