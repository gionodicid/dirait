<?php

$page = [
    'slug' => 'mooc-pogi',
    'title' => 'MOOC POGI — Ultrasound E-Learning Platform Case Study | DIRAIT',
    'description' => 'How DIRAIT built MOOC POGI: 48 accredited ultrasound modules, case quizzes, SKP certificates with public verification and institution dashboards for 5,000+ OB-GYNs.',
    'canonical' => 'https://dirait.com/showcases/mooc-pogi',
    'hero' => [
        'eyebrow' => 'SHOWCASE · E-LEARNING',
        'title' => 'Ultrasound training for *5,000+ doctors*.',
        'lead' => 'The official learning platform of the Indonesian Society of Obstetrics and Gynecology: 48 accredited modules, case quizzes and certificates anyone can verify.',
        'image' => 'mooc-pogi',
        'image_alt' => 'MOOC POGI homepage with the headline "Belajar USG untuk Indonesia" and a product tour video.',
    ],
    'stats' => [['48', 'accredited modules'], ['6', 'learning tracks'], ['33 h', 'of recorded lessons'], ['850+', 'certificates issued']],
    'brief' => [
        'title' => 'One competency standard for a whole country.',
        'text' => [
            'POGI sets the national ultrasound competency standard for OB-GYNs, but training depended on in-person classes in a few cities. Doctors from Aceh to Papua needed a way to learn on their own schedule and still earn SKP credits recognised by the Ministry of Health.',
            'We built one platform for the whole journey: sign in with a POGI account, pay per module, watch and read, pass case quizzes, and receive a numbered certificate that anyone can check publicly.',
        ],
    ],
    'facts' => ['Client' => 'PP POGI', 'Industry' => 'Medical education', 'Platform' => 'Web, mobile-first', 'Payments' => 'QRIS · transfer · VA', 'Year' => '2026'],
    'features' => [
        'title' => 'From sign-up to certificate.',
        'lead' => 'Every step is saved to the doctor\'s account, with no mandatory classroom sessions.',
        'items' => [
            ['icon' => 'layers', 'title' => 'Six learning tracks', 'text' => 'Basic ultrasound, obstetrics, gynecology, oncology, maternal-fetal medicine and reproductive endocrinology — 48 modules in all.'],
            ['icon' => 'play-circle', 'title' => 'Lessons any time', 'text' => 'Recorded lectures, reading material and transcripts per module, available for 12 months after purchase.'],
            ['icon' => 'list-checks', 'title' => 'Case quizzes', 'text' => 'Ten case questions per module with feedback; a certificate is issued once every quiz in the track is passed.'],
            ['icon' => 'badge-check', 'title' => 'Verifiable certificates', 'text' => 'Every SKP certificate carries a unique number. Anyone can enter it to confirm the name, module and issue status.'],
            ['icon' => 'building-2', 'title' => 'Institution programme', 'text' => 'Hospitals and clinics enrol whole teams on one invoice and follow progress and certificates in one dashboard.'],
            ['icon' => 'wallet', 'title' => 'Simple pricing', 'text' => 'Rp250,000 per module with QRIS, bank transfer or virtual account, plus scheduled cohorts with limited seats.'],
        ],
    ],
    'screens' => [
        ['image' => 'mooc-pogi-2', 'title' => 'Course catalogue', 'caption' => '48 modules grouped into six tracks, with quiz, recording and certificate counts.', 'alt' => 'MOOC POGI catalogue listing six ultrasound tracks with module counts.'],
        ['image' => 'mooc-pogi-3', 'title' => 'Certificate check', 'caption' => 'Public verification by certificate number, next to a sample SKP certificate.', 'alt' => 'Certificate verification form beside a sample MOOC POGI certificate.'],
    ],
    'stack' => ['React', 'Vite', 'Tailwind CSS', 'Laravel', 'PostgreSQL', 'TanStack Query'],
];
