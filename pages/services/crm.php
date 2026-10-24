<?php

$page = [
    'layout' => 'service',
    'lang' => 'en',
    'title' => 'Custom CRM & ERP Development | DIRAIT',
    'description' => 'Custom CRM and ERP with Kanban pipelines, WhatsApp API, RBAC, SSO, 2FA and real-time dashboards — built for sales teams and multi-branch operations.',
    'canonical' => 'https://dirait.com/services/crm',
    'hero' => [
        'eyebrow' => 'SERVICES · CRM & ERP',
        'title' => 'A CRM that follows your *pipeline*.',
        'lead' => 'Kanban pipelines, WhatsApp API integration, real-time dashboards and multi-tenant access control — CRM and ERP built for sales teams and back-office operations that need to close faster.',
        'note' => 'From Rp80 million · 8–12 weeks',
        'image' => 'crm',
        'image_alt' => 'CRM view with a Kanban sales pipeline board, a deal value summary and a customer WhatsApp chat panel.',
    ],
    'features' => [
        'eyebrow' => 'FEATURES',
        'title' => 'What we build into your CRM & ERP.',
        'lead' => 'Every module follows how your team actually sells and operates — from the first lead to the closed deal.',
        'items' => [
            ['icon' => 'kanban', 'title' => 'Kanban pipelines', 'text' => 'Drag-and-drop boards to move leads, opportunities and deals through each pipeline stage, from prospecting to closing.'],
            ['icon' => 'message-circle', 'title' => 'WhatsApp integration', 'text' => 'Template messages, automated follow-ups and real-time chat bridging from the CRM dashboard to your customers\' numbers.'],
            ['icon' => 'key-round', 'title' => 'RBAC, SSO & 2FA', 'text' => 'Multi-tenant, fine-grained roles — sales, manager, admin — secured with JWT, SSO and two-factor authentication.'],
            ['icon' => 'chart-column', 'title' => 'Dashboards & reports', 'text' => 'Pipeline charts, team scorecards, lead conversion and sales analytics in one interactive dashboard.'],
            ['icon' => 'radio', 'title' => 'Real-time updates', 'text' => 'New leads, stage changes and deal updates appear instantly across the team over WebSocket, with PWA push notifications.'],
            ['icon' => 'plug', 'title' => 'Export & integrations', 'text' => 'Export to CSV/XLSX, sync with accounting or ERP systems via REST API, and send webhooks to external apps.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'CASE STUDIES',
        'title' => 'Real projects, real results.',
        'items' => [
            ['tag' => 'CRM · WhatsApp API', 'title' => 'WhatsApp-integrated CRM for a services company', 'text' => 'WhatsApp API connected directly to the CRM for automated messages, real-time chat bridging via Express.js, contact interaction history and a monitoring dashboard. All data is stored in PostgreSQL.', 'stack' => ['Laravel', 'Express.js', 'PostgreSQL', 'WhatsApp API'], 'client' => 'Financial services company', 'location' => 'Jakarta, Indonesia'],
            ['tag' => 'Sales Force · Kanban', 'title' => 'Sales force app with a Kanban pipeline', 'text' => 'Sales force automation with drag-and-drop Kanban stages, lead tracking and performance analytics — multi-tenant, with multi-role RBAC. The frontend is built with React and shadcn/ui.', 'stack' => ['React', 'Laravel', 'shadcn/ui', 'PostgreSQL', 'RBAC'], 'client' => 'Software house with European clients', 'location' => 'Remote · International team'],
            ['tag' => 'Finance · ERP', 'title' => 'Credit management for a cooperative', 'text' => 'A multi-role system for a Koperasi covering member loans, savings and installments, with 2FA and PWA push notifications.', 'stack' => ['Next.js', 'TypeScript', 'PostgreSQL', 'RBAC', 'PWA']],
        ],
    ],
    'process' => [
        'eyebrow' => 'PROCESS',
        'title' => 'Four steps to the right CRM & ERP.',
        'steps' => [
            ['title' => 'Pipeline mapping', 'text' => 'We map your sales and approval flows from incoming lead to closing, along with the roles that touch each step.'],
            ['title' => 'Design', 'text' => 'Screens, pipeline stages and the permission model are agreed with you before development starts.'],
            ['title' => 'Integration & automation', 'text' => 'Modules ship in increments; WhatsApp API, email and automation rules are wired in so follow-ups run themselves.'],
            ['title' => 'Deploy & adoption', 'text' => 'Production rollout, customer data migration and sales team training, with 90 days of post-launch support.'],
        ],
    ],
    'stack' => ['React', 'Next.js', 'TypeScript', 'Laravel', 'Express.js', 'PostgreSQL', 'MySQL', 'shadcn/ui', 'WhatsApp API', 'WebSocket'],
    'faq' => [
        ['q' => 'How much does a custom CRM cost and how long does it take?', 'a' => 'CRM projects start at Rp80 million with an estimated 8–12 weeks, depending on the number of modules and integrations you need.'],
        ['q' => 'Can the CRM connect to WhatsApp?', 'a' => 'Yes. We integrate the WhatsApp API for template messages, automated follow-ups and real-time chat bridging straight from the CRM dashboard.'],
        ['q' => 'Can the system serve multiple companies or branches?', 'a' => 'Yes. We build multi-tenant systems with RBAC so each tenant and role sees only the data it should.'],
        ['q' => 'Can it integrate with our accounting software or ERP?', 'a' => 'Yes. Data can be synced via REST API and webhooks, and exported to CSV or XLSX. Small Business includes one external integration; Business includes unlimited.'],
        ['q' => 'What happens after the system goes live?', 'a' => 'We migrate your customer data, train your sales team and support you for 90 days after launch. Extended maintenance is available for updates, bug fixes and new features.'],
    ],
    'cta' => ['title' => 'Ready to build your CRM?', 'text' => 'Tell us how your team sells. We\'ll explain how a custom CRM can raise your closing rate — no sales pitch, no obligation.'],
];
