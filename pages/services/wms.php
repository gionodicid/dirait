<?php

$page = [
    'layout' => 'service',
    'lang' => 'en',
    'title' => 'Custom Warehouse Management System (WMS) | DIRAIT',
    'description' => 'Custom WMS with real-time stock across warehouses, zones and bins, POS and e-commerce integration, reporting, map views and mobile picking.',
    'canonical' => 'https://dirait.com/services/wms',
    'hero' => [
        'eyebrow' => 'SERVICES · WMS',
        'title' => 'Warehouse stock, tracked in *real time*.',
        'lead' => 'Monitor stock live, manage multiple warehouses and zones, and integrate with POS, e-commerce and accounting — in one WMS built around how you work.',
        'image' => 'wms',
        'image_alt' => 'WMS dashboard with a warehouse zone and bin location map, a list of inbound receipts and a stock summary per SKU.',
    ],
    'features' => [
        'eyebrow' => 'FEATURES',
        'title' => 'Core WMS features.',
        'lead' => 'Every module is designed around your warehouse workflow, not the other way around.',
        'items' => [
            ['icon' => 'boxes', 'title' => 'Real-time stock', 'text' => 'Every inbound and outbound inventory movement across all locations is recorded automatically, without delay.'],
            ['icon' => 'warehouse', 'title' => 'Multi-location & zones', 'text' => 'Manage multiple warehouses, zones and bin locations in one interface, with optimized picking routes.'],
            ['icon' => 'plug', 'title' => 'Integration API', 'text' => 'Automatic sync with POS, e-commerce, marketplaces, accounting software and ERP — no duplicate data entry.'],
            ['icon' => 'file-spreadsheet', 'title' => 'Reporting & export', 'text' => 'Stock movement reports, reorder point alerts and inventory analysis, exported to CSV or XLSX.'],
            ['icon' => 'map-pin', 'title' => 'Maps & geolocation', 'text' => 'Warehouses and assets visualized on Leaflet maps to monitor inventory and fleet geographically.'],
            ['icon' => 'smartphone', 'title' => 'Mobile support', 'text' => 'Receiving, picking, packing and stock counts straight from a smartphone for field and floor operations.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'CASE STUDY',
        'title' => 'Spraying Module Reporting Application.',
        'items' => [
            ['tag' => 'Mapping · BLE · Multi-Tenant', 'title' => 'Field reporting app for spraying modules', 'text' => 'Field operators log pesticide and fertilizer spraying data in real time from remote locations through an Android app connected over BLE to the hardware module, while managers monitor locations, routes and coverage on a Leaflet map-based web dashboard. A multi-tenant architecture keeps each client\'s data, settings and branding separate.', 'stack' => ['React', 'React Native', 'Node.js', 'PostgreSQL', 'Leaflet', 'BLE']],
        ],
    ],
    'process' => [
        'eyebrow' => 'PROCESS',
        'title' => 'How we build your WMS.',
        'steps' => [
            ['title' => 'Discovery & mapping', 'text' => 'We study your warehouse flow from receiving to shipping and map integrations with the systems you already use.'],
            ['title' => 'Build & iterate', 'text' => 'Weekly sprints with a demo at the end of each one; your feedback sets the priority of the next features.'],
            ['title' => 'Deploy & optimize', 'text' => 'After UAT, the system goes to production and we keep monitoring performance for further optimization.'],
        ],
    ],
    'stack' => ['React', 'React Native', 'Node.js', 'Laravel', 'PostgreSQL', 'Leaflet', 'BLE', 'REST API'],
    'faq' => [
        ['q' => 'Can the WMS connect to our POS and marketplaces?', 'a' => 'Yes. We integrate the WMS with POS, e-commerce, marketplaces, accounting software and ERP so stock data stays in sync automatically.'],
        ['q' => 'Can warehouse staff work from their phones?', 'a' => 'Yes. Receiving, picking, packing and stock counts can be done from a smartphone, including React Native Android apps with BLE and GPS support.'],
        ['q' => 'Can it manage several warehouses at once?', 'a' => 'Yes. Multiple warehouses, zones and bin locations are managed from one interface, and multi-tenant setups keep each client\'s data separate.'],
        ['q' => 'How long does a custom WMS take?', 'a' => 'Custom web and mobile applications typically take 8–16 weeks depending on scope. We give you a detailed timeline after discovery.'],
        ['q' => 'Is there support after the system goes live?', 'a' => 'Every project includes post-launch support, and we keep monitoring system performance. Extended maintenance is available for updates, bug fixes and new features.'],
    ],
    'cta' => ['title' => 'Ready to run your warehouse in real time?', 'text' => 'Tell us about your warehouse challenges. We\'ll design the right system — no sales pitch, no obligation.'],
];
