<?php

$page = [
    'layout' => 'service',
    'lang' => 'en',
    'title' => 'CRM & ERP Solutions | DIRAIT',
    'description' => 'Multi-tenant systems with RBAC, Kanban workflows, SSO, 2FA, and real-time notifications. We build complex sales and operational pipelines for businesses that need robust, scalable back-office solutions.',
    'canonical' => 'https://dirait.com/services-swiss/crm-erp',
    'hero' => [
        'eyebrow' => 'SERVICES · 05 · CRM & ERP',
        'title' => 'Back-office systems *that scale.*',
        'lead' => 'Multi-tenant CRM and ERP with RBAC, Kanban workflows, SSO, 2FA and real-time notifications — for complex sales and operational pipelines.',
        'image' => 'en-crm-erp',
        'image_alt' => 'Multi-tenant ERP with a Kanban sales pipeline and a role-based access control panel',
    ],
    'features' => [
        'eyebrow' => 'WHAT WE BUILD',
        'title' => 'Pipelines, permissions and people',
        'lead' => 'Robust back-office tools shaped around how your teams actually sell and operate.',
        'items' => [
            ['icon' => 'kanban', 'title' => 'Kanban pipelines', 'text' => 'Drag-and-drop sales pipelines with lead, opportunity and deal tracking.'],
            ['icon' => 'key-round', 'title' => 'RBAC, SSO & 2FA', 'text' => 'Fine-grained roles such as admin, teller and member, with JWT, SSO and two-factor authentication.'],
            ['icon' => 'users', 'title' => 'Contact management', 'text' => 'Contacts with full interaction history in one place.'],
            ['icon' => 'message-circle', 'title' => 'WhatsApp follow-ups', 'text' => 'Message customers on WhatsApp and automate follow-ups from the CRM.'],
            ['icon' => 'landmark', 'title' => 'Loans & savings', 'text' => 'Loan origination and approval, savings and installment tracking for cooperatives.'],
            ['icon' => 'chart-column', 'title' => 'Analytics & alerts', 'text' => 'Sales performance analytics and real-time PWA push notifications.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'SELECTED WORK',
        'title' => 'What we have built in CRM & ERP',
        'items' => [
            ['tag' => 'Sales', 'title' => 'Sales force application', 'text' => 'Sales force automation with a Kanban pipeline, lead tracking and performance analytics, secured with JWT and fine-grained RBAC.', 'stack' => ['Next.js', 'TypeScript', 'PostgreSQL', 'JWT', 'RBAC']],
            ['tag' => 'CRM', 'title' => 'CRM WhatsApp integration', 'text' => 'A full CRM for contacts, interaction history, WhatsApp messaging, automated follow-ups and deal tracking.', 'stack' => ['Next.js', 'TypeScript', 'MySQL', 'WhatsApp API']],
            ['tag' => 'Finance', 'title' => 'Credit management for a cooperative', 'text' => 'A multi-role system for a Koperasi covering member loans, savings and installments, with 2FA and PWA push notifications.', 'stack' => ['Next.js', 'TypeScript', 'PostgreSQL', 'RBAC', 'PWA']],
        ],
    ],
    'process' => [
        'eyebrow' => 'HOW WE WORK',
        'title' => 'Built for quality, delivered on time',
        'steps' => [
            ['title' => 'Discovery', 'text' => 'We map your pipelines, roles and approval flows.'],
            ['title' => 'Design', 'text' => 'Screens and permission models agreed before development.'],
            ['title' => 'Iterative development', 'text' => 'Modules delivered in increments with transparent progress.'],
            ['title' => 'Deploy & support', 'text' => 'Production rollout and post-launch support as your teams adopt it.'],
        ],
    ],
    'stack' => ['Next.js', 'TypeScript', 'Tailwind', 'PostgreSQL', 'MySQL', 'JWT', 'RBAC', 'PWA', 'WhatsApp API'],
    'faq' => [
        ['q' => 'Can the system serve multiple companies or branches?', 'a' => 'Yes. We build multi-tenant systems with RBAC so each tenant and role sees only what it should.'],
        ['q' => 'How do you secure access?', 'a' => 'With JWT authentication, role-based access control, SSO and 2FA.'],
        ['q' => 'Can it connect to WhatsApp or our other tools?', 'a' => 'Yes — we have integrated WhatsApp APIs, payment gateways, accounting software and ERPs. Small Business includes one external integration; Business includes unlimited.'],
        ['q' => 'How long does a CRM or ERP project take?', 'a' => 'Custom applications typically take 8–16 weeks depending on scope, with a detailed timeline after discovery.'],
    ],
    'cta' => ['title' => 'Ready to build something great?', 'text' => 'Tell us about your project. We\'ll share how we\'d approach it, what it would take, and what you can expect — no pressure, no obligation.'],
];
