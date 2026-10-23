    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= e($page['title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= e($page['canonical']) ?>" />
<?php require APP_ROOT . '/app/partials/meta.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#0C1B2E",
              brand: "#2D6BFF",
              "brand-hover": "#1B5AE0",
              "brand-soft": "#E8F0FF",
              background: "#F6F8FB",
              surface: "#FFFFFF",
              muted: "#5A6B80",
              "muted-fg": "#7B8CA0",
              border: "#DCE3EB",
              foreground: "#0C1B2E",
              "brand-fg": "#FFFFFF",
            },
            fontFamily: {
              heading: ['"Space Grotesk"', "system-ui", "sans-serif"],
              body: ['"DM Sans"', "system-ui", "sans-serif"],
            },
          },
        },
      };
    </script>
    <style>
      html { scroll-behavior: smooth; }
      body { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
      .network-grid { background-image: radial-gradient(circle, rgba(45,107,255,0.22) 1.2px, transparent 1.2px), linear-gradient(to right, rgba(45,107,255,0.05) 1px, transparent 1px), linear-gradient(to bottom, rgba(45,107,255,0.05) 1px, transparent 1px); background-size: 48px 48px, 48px 48px, 48px 48px; }
      .network-grid-light { background-image: radial-gradient(circle, rgba(45,107,255,0.1) 1px, transparent 1px); background-size: 32px 32px; }
      .reveal { opacity: 0; transform: translateY(20px); transition: opacity 0.6s cubic-bezier(0.22,1,0.36,1), transform 0.6s cubic-bezier(0.22,1,0.36,1); }
      .reveal.visible { opacity: 1; transform: translateY(0); }
      .mobile-backdrop { opacity: 0; transition: opacity 0.25s ease; pointer-events: none; }
      .mobile-backdrop.open { opacity: 1; pointer-events: auto; }
      .mobile-panel { transform: translateX(100%); transition: transform 0.3s cubic-bezier(0.22,1,0.36,1); }
      .mobile-panel.open { transform: translateX(0); }
      *:focus-visible { outline: 2px solid #2d6bff; outline-offset: 2px; }
      @media (prefers-reduced-motion: reduce) { .reveal { opacity: 1; transform: none; transition: none; } .mobile-panel, .mobile-backdrop { transition: none; } html { scroll-behavior: auto; } }
      @keyframes wa-pulse { 0%,100% { box-shadow: 0 4px 14px rgba(37,211,102,0.4); } 50% { box-shadow: 0 4px 24px rgba(37,211,102,0.6); } }
      .wa-float { animation: wa-pulse 2.5s ease-in-out infinite; }
      .wa-float:hover { animation: none; }
      .brand-line { position: absolute; left: 0; top: 0; bottom: 0; width: 3px; background: #2d6bff; }
<?= isset($page['styles']) ? $page['styles'] : '' ?>
    </style>
