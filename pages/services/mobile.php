<?php

$page = [
    'layout' => 'service',
    'lang' => 'en',
    'title' => 'iOS & Android App Development | DIRAIT',
    'description' => 'React Native apps for iOS and Android, plus PWAs — with mobile payments, offline sync, BLE hardware and GPS tracking, built for real-world use.',
    'canonical' => 'https://dirait.com/services/mobile',
    'hero' => [
        'eyebrow' => 'SERVICES · MOBILE',
        'title' => 'Mobile apps that *work in the field.*',
        'lead' => 'React Native apps for iOS and Android, plus PWAs — with consistent gestures and hardware integration like BLE and GPS, built for real-world use.',
        'note' => '30+ projects delivered across Indonesia, Singapore, the Netherlands and the UK',
        'image' => 'mobile',
        'image_alt' => 'Two phone screens: a pharmacy shopping app and a field spraying report with GPS and BLE status',
    ],
    'features' => [
        'eyebrow' => 'WHAT WE BUILD',
        'title' => 'One codebase, every device',
        'lead' => 'From shopping apps to field tools that talk to hardware, we ship mobile products people use every day.',
        'items' => [
            ['icon' => 'smartphone', 'title' => 'iOS & Android', 'text' => 'React Native apps from a shared TypeScript codebase, with monorepo setups for multiplatform products.'],
            ['icon' => 'credit-card', 'title' => 'Mobile payments', 'text' => 'Secure checkout via MidTrans with real-time order status.'],
            ['icon' => 'bluetooth', 'title' => 'BLE hardware', 'text' => 'Connect to Bluetooth-enabled devices and stream readings in real time over WebSocket.'],
            ['icon' => 'map-pin', 'title' => 'GPS tracking', 'text' => 'Location tracking for field teams and operations reporting.'],
            ['icon' => 'wifi-off', 'title' => 'Offline-first', 'text' => 'Collect data and read content without a connection, then sync across devices.'],
            ['icon' => 'bell', 'title' => 'Push & PWA', 'text' => 'Push notifications and installable PWAs for technicians working from a mobile browser.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'SELECTED WORK',
        'title' => 'What we have built in mobile',
        'items' => [
            ['tag' => 'E-commerce', 'title' => 'Hospital e-commerce platform', 'text' => 'A mobile store for a hospital pharmacy and medical supplies, with MidTrans payments, real-time order tracking, push notifications and a Laravel backend.', 'stack' => ['React Native', 'Laravel', 'REST API', 'MidTrans']],
            ['tag' => 'Field reporting', 'title' => 'Spraying module reporting', 'text' => 'A field app for agricultural spraying that connects to BLE sprayer hardware, tracks GPS location, works offline and syncs via WebSocket.', 'stack' => ['React Native', 'Laravel', 'WebSocket', 'BLE']],
            ['tag' => 'Multiplatform', 'title' => 'Multiplatform comic application', 'text' => 'A monorepo-based comic reader with a rich reading experience, digital library management, offline reading and cross-device sync through a Laravel API.', 'stack' => ['React Native', 'TypeScript', 'Laravel', 'REST API']],
            ['tag' => 'PWA', 'title' => 'ATM ticketing support system', 'text' => 'A PWA for field technicians to view ticket queues, update job status and receive push notifications, with offline support.', 'stack' => ['Next.js', 'TypeScript', 'PostgreSQL', 'PWA']],
        ],
    ],
    'process' => [
        'eyebrow' => 'HOW WE WORK',
        'title' => 'Built for quality, delivered on time',
        'steps' => [
            ['title' => 'Discovery', 'text' => 'We learn how and where the app will be used — including any hardware involved.'],
            ['title' => 'Design', 'text' => 'Screens and flows designed for touch and approved before development.'],
            ['title' => 'Iterative development', 'text' => 'Regular builds on real devices with transparent progress updates.'],
            ['title' => 'Deploy & support', 'text' => 'Store or PWA release, then post-launch support and maintenance.'],
        ],
    ],
    'stack' => ['React Native', 'TypeScript', 'Laravel', 'Next.js', 'REST API', 'WebSocket', 'BLE', 'PWA', 'MidTrans'],
    'faq' => [
        ['q' => 'Do you build for both iOS and Android?', 'a' => 'Yes. We use React Native to ship iOS and Android apps from one codebase, and can add PWA capabilities for near-native experiences in the browser.'],
        ['q' => 'Can the app connect to hardware?', 'a' => 'Yes. We have integrated BLE-enabled hardware and GPS tracking, with real-time sync over WebSocket and offline data collection.'],
        ['q' => 'Should we build a native app or a PWA?', 'a' => 'It depends on your users. A PWA adds push notifications, offline support and hardware access on Android (BLE, GPS) from the browser; React Native gives you store apps on iOS and Android.'],
        ['q' => 'How long does a mobile app take?', 'a' => 'Custom mobile applications typically take 8–16 weeks depending on scope. We provide a detailed timeline after discovery.'],
        ['q' => 'Do you provide support after launch?', 'a' => 'Every project includes post-launch support — 3 months for Basic, 6 months for Small Business and 12 months for Business plans. Extended maintenance covers updates, bug fixes, security patches and feature additions.'],
    ],
    'cta' => ['title' => 'Ready to build something great?', 'text' => 'Tell us about your project. We\'ll share how we\'d approach it, what it would take, and what you can expect — no pressure, no obligation.'],
];
