<?php

return [
    'contact' => [
        'minimal' => [
            'address' => 'Cibubur, Jawa Barat — Indonesia',
            'email' => 'giofadhil.ahmad@gmail.com',
            'phone' => '+62 813-8493-4615',
            'whatsapp' => 'https://wa.me/6281384934615',
        ],
        'brand' => [
            'address' => 'Jl. Sudirman No. 53, Senayan, Jakarta Selatan 12190',
            'email' => 'hello@dirait.id',
            'phone' => '+62 812-3456-7890',
            'whatsapp' => 'https://wa.me/6281234567890',
        ],
    ],

    'services' => [
        ['slug' => 'web-apps', 'number' => '01', 'title' => 'Web Applications', 'description' => 'React, Next.js, Laravel — pixel-perfect UI from Figma, monorepo architecture, and production-ready deployments with Docker and Nginx.'],
        ['slug' => 'mobile', 'number' => '02', 'title' => 'Mobile Apps', 'description' => 'React Native for iOS and Android — multiplatform codebases with consistent gestures, PWA capabilities, and BLE hardware integration.'],
        ['slug' => 'iot', 'number' => '03', 'title' => 'IoT Platforms', 'description' => 'Real-time dashboards with MQTT (Mosquitto) and WebSocket. Custom widgets, tenant-based data, and hardware engineer collaboration.'],
        ['slug' => 'ai-api', 'number' => '04', 'title' => 'AI & API Integration', 'description' => 'Third-party AI services, payment gateways (MidTrans, Duitku, Mollie), WhatsApp APIs, and GraphQL/RESTful integration across platforms.'],
        ['slug' => 'crm-erp', 'number' => '05', 'title' => 'CRM & ERP Solutions', 'description' => 'Multi-tenant systems with RBAC, Kanban workflows, SSO, 2FA, and real-time notifications — built for complex sales and operational pipelines.'],
        ['slug' => 'devops', 'number' => '06', 'title' => 'DevOps & Infrastructure', 'description' => 'Docker, Nginx, Cloudflare — automated deploys, cron jobs, uptime monitoring, Fail2ban security, and Telegram-based alerting.'],
    ],

    'brand_services' => [
        ['slug' => 'company-profile', 'label' => 'Company Profile'],
        ['slug' => 'crm', 'label' => 'CRM'],
        ['slug' => 'hris', 'label' => 'HRIS'],
        ['slug' => 'pos', 'label' => 'POS'],
        ['slug' => 'wms', 'label' => 'WMS'],
        ['slug' => 'iot', 'label' => 'Platform IoT'],
    ],

    'testimonials' => [
        ['quote' => 'Fast work, quick response, friendly, met expectations, expert in their field, highly recommended, top freelancer.', 'name' => 'nazz_com', 'role' => 'Client, Freelance Platform', 'initials' => 'N'],
        ['quote' => 'Mastered their field, results met expectations, very fast delivery. Revisions were also done quickly. Highly recommended.', 'name' => 'Anonymous Client', 'role' => 'Client, Freelance Platform', 'initials' => 'AC'],
        ['quote' => 'Fast response, neat work, good code quality. Thank you, will reorder!', 'name' => 'exzword', 'role' => 'Client, Freelance Platform', 'initials' => 'E'],
    ],

    'pricing' => [
        ['name' => 'Basic', 'popular' => false, 'price' => 'Rp4M', 'priceNote' => 'per project', 'features' => ['CDN worldwide support', 'SSL encryption', 'Free server & domain for a year', '3 months support', 'Up to 20 product uploads', 'Multi-pages', 'Web-based application', 'SEO/Google Search'], 'cta' => 'Get Started'],
        ['name' => 'Small Business', 'popular' => true, 'price' => 'Rp8M', 'priceNote' => 'per project', 'features' => ['Everything in Basic plus…', '6 months support', 'Unlimited product uploads'], 'cta' => 'Get Started'],
        ['name' => 'Business', 'popular' => false, 'price' => 'Contact for', 'priceNote' => 'info', 'features' => ['Everything in Small Business plus…', 'Free server & domain for 3 years', 'Lifetime support', 'Multi-platform application', 'Enhanced SEO/Google Search'], 'cta' => 'Contact Us'],
    ],

    'faq' => [
        ['id' => 'tech-stack', 'question' => 'What technologies do you use?', 'answer' => 'We select the stack per project. Common choices include React (Vite), Next.js, Laravel, SvelteKit for web; React Native for mobile; PostgreSQL, MySQL, MongoDB for data; and Docker, Nginx, Cloudflare for deployment. We also integrate real-time systems via WebSocket and MQTT.'],
        ['id' => 'timeline', 'question' => 'How long does a typical project take?', 'answer' => 'A company profile website with CMS takes 2–4 weeks. Custom web or mobile applications typically take 8–16 weeks depending on scope. IoT and AI-integrated projects vary based on hardware and third-party complexity — we\'ll provide a detailed timeline after discovery.'],
        ['id' => 'maintenance', 'question' => 'Do you provide maintenance after launch?', 'answer' => 'Every project includes post-launch support — 3 months for Basic, 6 months for Small Business, and 12 months for Business plans. Extended maintenance is available for updates, bug fixes, security patches, and feature additions.'],
        ['id' => 'integrations', 'question' => 'Can you integrate with our existing systems?', 'answer' => 'Yes. We\'ve integrated payment gateways (MidTrans, Duitku, Mollie), WhatsApp APIs, AI services, accounting software, and ERPs. Small Business includes one external system integration; Business includes unlimited.'],
        ['id' => 'multi-platform', 'question' => 'Do you support web, mobile, and PWA?', 'answer' => 'Yes. We build React Native apps for iOS and Android alongside web platforms, and can add PWA capabilities for near-native mobile experiences with push notifications, offline support, and hardware access on Android (BLE, GPS).'],
        ['id' => 'security', 'question' => 'How do you handle security and access control?', 'answer' => 'We implement modular role-based access control (RBAC), two-factor authentication (2FA), custom SSO integration, and security hardening with Fail2ban, Cloudflare, and Telegram-based alerting for production environments.'],
    ],
];
