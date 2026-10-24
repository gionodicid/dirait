<?php

$page = [
    'layout' => 'service',
    'lang' => 'en',
    'title' => 'Custom POS System Development | DIRAIT',
    'description' => 'Custom POS for retail and F&B: checkout, real-time inventory and multi-store management in one dashboard, with MidTrans, Duitku and Mollie payments.',
    'canonical' => 'https://dirait.com/services/pos',
    'hero' => [
        'eyebrow' => 'SERVICES · POS',
        'title' => 'Checkout, stock and branches in *one system*.',
        'lead' => 'A point-of-sale platform that processes payments, manages inventory in real time and connects every store to one dashboard — for retail, F&B and modern commerce.',
        'note' => 'From Rp80 million · 8–12 weeks',
        'image' => 'pos',
        'image_alt' => 'POS checkout screen with a menu catalog, shopping cart, QRIS payment total and a transaction receipt.',
    ],
    'features' => [
        'eyebrow' => 'FEATURES',
        'title' => 'What we build into your POS.',
        'lead' => 'From checkout at the counter to margin reports at head office.',
        'items' => [
            ['icon' => 'scan-barcode', 'title' => 'Checkout & cashier', 'text' => 'Fast checkout with cash, card, QRIS and e-wallets through a responsive, easy-to-use cashier interface.'],
            ['icon' => 'package', 'title' => 'Inventory management', 'text' => 'Real-time stock across all locations, low-stock alerts, product variants and stock counts without disrupting operations.'],
            ['icon' => 'store', 'title' => 'Multi-store', 'text' => 'Run many stores from one dashboard: branch performance, synced prices and promotions, and stock transfers between stores.'],
            ['icon' => 'credit-card', 'title' => 'Payment gateways', 'text' => 'MidTrans, Duitku and Mollie integrations for online and offline payments, installments, refunds and reconciliation.'],
            ['icon' => 'chart-line', 'title' => 'Reports & analytics', 'text' => 'Daily sales, profit margins, best sellers and seasonal trends for data-driven decisions.'],
            ['icon' => 'users', 'title' => 'Multiple roles', 'text' => 'Three access levels — cashier, supervisor and owner — matched to your operations.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'CASE STUDIES',
        'title' => 'Real projects, real results.',
        'items' => [
            ['tag' => 'E-Commerce · Healthcare', 'title' => 'E-commerce platform for a hospital', 'text' => 'A multi-role system with real-time WebSocket notifications, payment processing, and web and mobile apps for hospital logistics transactions.', 'stack' => ['Laravel', 'Next.js', 'React Native', 'PostgreSQL'], 'client' => 'Private hospital', 'location' => 'Jakarta, Indonesia'],
            ['tag' => 'Hospitality · Booking', 'title' => 'Booking system for windmill stays', 'text' => 'Split-day availability booking with session-based scheduling and custom business logic for renting out windmills as holiday accommodation.', 'stack' => ['Laravel', 'SvelteKit', 'PostgreSQL'], 'client' => 'Logeren bij de Molen', 'location' => 'Noord-Holland, Netherlands'],
        ],
    ],
    'process' => [
        'eyebrow' => 'PROCESS',
        'title' => 'Three steps to the right POS.',
        'steps' => [
            ['title' => 'Discovery & mapping', 'text' => 'We study your checkout flow, stock handling and multi-store needs. The result: a technical specification and interactive mockups.'],
            ['title' => 'Development & iteration', 'text' => 'Weekly sprints with progressive builds. You see the result at the end of every sprint and give feedback directly.'],
            ['title' => 'Launch & support', 'text' => 'Production deployment, data migration, team training and 90 days of technical support after launch.'],
        ],
    ],
    'stack' => ['Laravel', 'Next.js', 'React Native', 'SvelteKit', 'PostgreSQL', 'WebSocket', 'MidTrans', 'Duitku', 'Mollie'],
    'faq' => [
        ['q' => 'How much does a POS system cost and how long does it take?', 'a' => 'POS projects start at Rp80 million with an estimated 8–12 weeks, depending on the number of stores, modules and integrations.'],
        ['q' => 'Which payment methods are supported?', 'a' => 'Cash, card, QRIS and e-wallets. For online payments we integrate gateways such as MidTrans, Duitku and Mollie.'],
        ['q' => 'Can the POS run across multiple branches?', 'a' => 'Yes. Every branch connects to one central dashboard with real-time stock, synced prices and promotions, and stock transfers between stores.'],
        ['q' => 'Can it work with our accounting software or existing systems?', 'a' => 'Yes. We have integrated payment gateways, accounting software and ERPs. Small Business includes one external integration; Business includes unlimited.'],
        ['q' => 'What support do we get after launch?', 'a' => 'We handle data migration, train your team and provide 90 days of technical support after launch. Extended maintenance is available for updates and new features.'],
    ],
    'cta' => ['title' => 'Ready to build your POS?', 'text' => 'Tell us about your stores. We\'ll explain our approach — no sales pitch, no obligation.'],
];
