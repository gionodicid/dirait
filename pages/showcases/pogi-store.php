<?php

$page = [
    'slug' => 'pogi-store',
    'title' => 'POGI Store — Marketplace & E-Book Store Case Study | DIRAIT',
    'description' => 'How DIRAIT built POGI Store, the official PP POGI marketplace: guest checkout, VA and QRIS payments, automatic e-book delivery and seller storefronts for every branch.',
    'canonical' => 'https://dirait.com/showcases/pogi-store',
    'url' => 'https://ecomm.pogi.or.id',
    'hero' => [
        'eyebrow' => 'SHOWCASE · E-COMMERCE',
        'title' => 'From cart to paid in *three screens*.',
        'lead' => 'The official PP POGI store for congress merchandise and clinical e-books — built for doctors who shop between shifts.',
        'image' => 'pogi-store',
        'image_alt' => 'POGI Store homepage with the headline "Toko resmi PP POGI, kini lebih mudah" and a product catalogue preview.',
    ],
    'stats' => [['3', 'screens from cart to paid'], ['0', 'accounts required to buy'], ['2', 'payment gateways'], ['1', 'catalogue for every branch']],
    'brief' => [
        'title' => 'Two stores, one checkout.',
        'text' => [
            'PP POGI sells physical merchandise at congresses and digital books written by its committees. Orders came in through chats and manual transfers, and someone had to check every payment by hand.',
            'We combined both into one marketplace: a single catalogue, guest checkout, automatic payment confirmation, and e-books that arrive by email the moment an order is paid. Every branch runs its own storefront under admin approval.',
        ],
    ],
    'facts' => ['Client' => 'PP POGI', 'Industry' => 'Healthcare · Retail', 'Platform' => 'Web marketplace', 'Payments' => 'Duitku · iPaymu', 'Year' => '2026'],
    'features' => [
        'title' => 'Everything between browsing and delivery.',
        'lead' => 'Designed so a doctor can finish an order in the time between two patients.',
        'items' => [
            ['icon' => 'search', 'title' => 'Search and filters', 'text' => 'Instant search with three filter layers — type, clinical category and price range — plus wishlists and buyer reviews.'],
            ['icon' => 'shopping-cart', 'title' => 'Guest checkout', 'text' => 'Name, email, WhatsApp and courier. Vouchers apply before checkout, and an account can be created later.'],
            ['icon' => 'qr-code', 'title' => 'Automatic payments', 'text' => 'Virtual account and QRIS through Duitku and iPaymu; order status updates itself the moment payment lands.'],
            ['icon' => 'book-open', 'title' => 'E-books by email', 'text' => 'Guidelines and pocket books are delivered as a PDF download link as soon as the order is marked paid.'],
            ['icon' => 'truck', 'title' => 'Order tracking', 'text' => 'Guests track orders with email and order number — status, waybill and arrival date, with email updates on every change.'],
            ['icon' => 'store', 'title' => 'Seller storefronts', 'text' => 'Each branch manages products, orders and stock; price or photo changes go through PP POGI admin approval first.'],
        ],
    ],
    'screens' => [
        ['image' => 'pogi-store-2', 'title' => 'Catalogue and filters', 'caption' => 'One catalogue for merchandise and e-books, with fast search, filters and wishlists.', 'alt' => 'POGI Store section describing search, filters, wishlist and reviews beside a phone mockup.'],
        ['image' => 'pogi-store-3', 'title' => 'Seller dashboard', 'caption' => 'Revenue, orders and low-stock alerts for every branch storefront.', 'alt' => 'POGI Store seller dashboard with sales charts and order counts.'],
    ],
    'stack' => ['React', 'Laravel', 'PostgreSQL', 'TanStack Query', 'Duitku', 'iPaymu'],
];
