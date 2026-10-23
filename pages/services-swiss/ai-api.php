<?php

$page = [
    'layout' => 'service',
    'lang' => 'en',
    'title' => 'AI & API Integration | DIRAIT',
    'description' => 'We integrate third-party AI services, payment gateways (MidTrans, Duitku, Mollie), WhatsApp APIs, and GraphQL/RESTful APIs into your platform. From AI-powered room design to subscription management, we connect the dots.',
    'canonical' => 'https://dirait.com/services-swiss/ai-api',
    'hero' => [
        'eyebrow' => 'SERVICES · 04 · AI & API',
        'title' => 'AI and APIs, *connected.*',
        'lead' => 'We integrate AI services, payment gateways (MidTrans, Duitku, Mollie), WhatsApp APIs and GraphQL/REST APIs into your platform — from AI room design to subscription billing.',
        'image' => 'en-ai-api',
        'image_alt' => 'Integrations hub with an AI chat panel, payment gateway status and webhook logs',
    ],
    'features' => [
        'eyebrow' => 'WHAT WE BUILD',
        'title' => 'The services your product depends on',
        'lead' => 'We wire third-party AI, payments and messaging into your platform so they work as one.',
        'items' => [
            ['icon' => 'sparkles', 'title' => 'AI pipelines', 'text' => 'AI image generation and processing, such as turning uploaded room photos into design concepts.'],
            ['icon' => 'wallet', 'title' => 'Multi-gateway payments', 'text' => 'MidTrans, Duitku and Mollie for Indonesian, Dutch and European markets, including cross-border payments.'],
            ['icon' => 'repeat', 'title' => 'Subscription billing', 'text' => 'Recurring billing, subscription-based access and automated invoicing.'],
            ['icon' => 'webhook', 'title' => 'Webhooks & APIs', 'text' => 'Webhook integrations and GraphQL or RESTful APIs that keep systems in sync.'],
            ['icon' => 'message-circle', 'title' => 'WhatsApp API', 'text' => 'Send and receive messages, automate responses, templates and broadcasting from your CRM.'],
            ['icon' => 'cloud', 'title' => 'Edge & media', 'text' => 'Fast edge deployment on Cloudflare with R2 object storage for media.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'SELECTED WORK',
        'title' => 'What we have built in AI & API integration',
        'items' => [
            ['tag' => 'AI', 'title' => 'Arch AI — room design with AI', 'text' => 'Users upload photos of their space and AI generates design concepts. Subscription-based, deployed on Cloudflare with R2 storage.', 'stack' => ['Next.js', 'TypeScript', 'Tailwind', 'Cloudflare', 'R2']],
            ['tag' => 'Payments', 'title' => 'Subscription & payment ecosystem', 'text' => 'Multi-gateway payments and subscription management with recurring billing, automated invoicing, webhooks and cross-border payments.', 'stack' => ['Next.js', 'TypeScript', 'MySQL', 'MidTrans', 'Duitku', 'Mollie']],
            ['tag' => 'Messaging', 'title' => 'CRM WhatsApp integration', 'text' => 'A CRM with deep WhatsApp API integration: conversations, automated chatbot replies, templates, broadcasting and pipeline integration.', 'stack' => ['Next.js', 'TypeScript', 'MySQL', 'WhatsApp API']],
        ],
    ],
    'process' => [
        'eyebrow' => 'HOW WE WORK',
        'title' => 'Built for quality, delivered on time',
        'steps' => [
            ['title' => 'Discovery', 'text' => 'We review the services you need and how they fit your existing system.'],
            ['title' => 'Design', 'text' => 'Data flows, webhooks and user journeys planned before integration starts.'],
            ['title' => 'Iterative development', 'text' => 'Integrations built and tested step by step, with transparent communication.'],
            ['title' => 'Deploy & support', 'text' => 'Production deployment and post-launch support when providers change.'],
        ],
    ],
    'stack' => ['Next.js', 'TypeScript', 'GraphQL', 'REST API', 'MidTrans', 'Duitku', 'Mollie', 'WhatsApp API', 'Cloudflare R2', 'MySQL'],
    'faq' => [
        ['q' => 'Which payment gateways do you support?', 'a' => 'We have integrated MidTrans, Duitku and Mollie, covering Indonesian, Dutch and European markets, with recurring billing and webhooks.'],
        ['q' => 'Can you integrate with our existing systems?', 'a' => 'Yes — payment gateways, WhatsApp APIs, AI services, accounting software and ERPs. Small Business includes one external integration; Business includes unlimited.'],
        ['q' => 'How long does an AI integration take?', 'a' => 'AI-integrated projects vary with third-party complexity. We provide a detailed timeline after discovery.'],
        ['q' => 'Do you support the integration after launch?', 'a' => 'Every project includes post-launch support — 3, 6 or 12 months depending on the plan — with extended maintenance available.'],
    ],
    'cta' => ['title' => 'Ready to build something great?', 'text' => 'Tell us about your project. We\'ll share how we\'d approach it, what it would take, and what you can expect — no pressure, no obligation.'],
];
