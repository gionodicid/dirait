    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= e($page['title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="custom software development, web development agency Jakarta, mobile app development, React developer, React Native agency, Laravel development, Next.js development, IoT platform development, AI integration, software agency Indonesia" />
    <link rel="canonical" href="<?= e($page['canonical']) ?>" />
    <link rel="alternate" hreflang="en" href="https://dirait.id/en" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="DIRAIT" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="<?= e($page['title']) ?>" />
    <meta property="og:description" content="<?= e($page['description']) ?>" />
    <meta property="og:url" content="<?= e($page['canonical']) ?>" />
    <meta property="og:image" content="https://dirait.id/images/og-home-en.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= e($page['title']) ?>" />
    <meta name="twitter:description" content="<?= e($page['description']) ?>" />
    <meta name="twitter:image" content="https://dirait.id/images/og-home-en.jpg" />
    <link rel="preconnect" href="https://api.fontshare.com" />
    <link rel="preconnect" href="https://cdn.fontshare.com" crossorigin />
    <link href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@700,800&display=swap" rel="stylesheet" />
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= e(url('/assets/css/home.css')) ?>" />
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "@id": "https://dirait.id/#organization",
        "name": "DIRAIT",
        "url": "https://dirait.id",
        "logo": "https://dirait.id/images/logo.svg",
        "description": "Jakarta-based software house building custom POS, HRIS, CRM, WMS, and IoT platforms.",
        "foundingDate": "2023",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Jakarta",
          "addressCountry": "ID"
        },
        "contactPoint": {
          "@type": "ContactPoint",
          "contactType": "sales",
          "availableLanguage": ["English", "Indonesian"]
        }
      }
    </script>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "@id": "https://dirait.id/#localbusiness",
        "name": "DIRAIT",
        "image": "https://dirait.id/images/og-home-id.jpg",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Jakarta",
          "addressRegion": "DKI Jakarta",
          "addressCountry": "ID"
        },
        "url": "https://dirait.id/id",
        "priceRange": "$$"
      }
    </script>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://dirait.id/en"
          }
        ]
      }
    </script>
    <script id="faq-jsonld" type="application/ld+json">
      <?= json_encode([
          '@context' => 'https://schema.org',
          '@type' => 'FAQPage',
          'mainEntity' => array_map(
              static fn (array $item): array => [
                  '@type' => 'Question',
                  'name' => $item['question'],
                  'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item['answer']],
              ],
              site()['faq'],
          ),
      ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
    </script>
