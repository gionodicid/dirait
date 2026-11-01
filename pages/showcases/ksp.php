<?php

$page = [
    'slug' => 'ksp',
    'title' => 'KSP Software — Cooperative Savings & Loan App Case Study | DIRAIT',
    'description' => 'How DIRAIT built KSP Software, a member app for savings and loan cooperatives: online loan applications, savings, repayment schedules and board review in real time.',
    'canonical' => 'https://dirait.com/showcases/ksp',
    'url' => 'https://www.samapunyarasa.com',
    'hero' => [
        'eyebrow' => 'SHOWCASE · FINTECH',
        'title' => 'A cooperative that *lives on the phone*.',
        'lead' => 'A member app for savings and loan cooperatives: apply for loans, pay instalments and deposit savings from a phone, while the board reviews every step.',
        'image' => 'ksp',
        'image_alt' => 'KSP Software homepage with the headline "Urusan koperasi tanpa perlu antre" and a dashboard preview.',
    ],
    'stats' => [['4', 'steps to become a member'], ['3', 'types of savings'], ['0', 'trips to the office'], ['24/7', 'loan status visibility']],
    'brief' => [
        'title' => 'No more queueing at the co-op.',
        'text' => [
            'Members of savings and loan cooperatives had to visit the office to apply for loans, deposit savings or check what they still owed — and then wait for news on their application.',
            'We built a mobile web app that installs to the home screen. Members apply and pay from home, and every change made by the board — survey, analysis, approval, disbursement — appears in the app as it happens.',
        ],
    ],
    'facts' => ['Client' => 'Savings & loan cooperative', 'Industry' => 'Fintech · Cooperative', 'Platform' => 'Installable web app', 'Users' => 'Members · board · collectors', 'Year' => '2026'],
    'features' => [
        'title' => 'From application to paid off.',
        'lead' => 'Everything a member used to queue for, now on their phone.',
        'items' => [
            ['icon' => 'file-plus', 'title' => 'Apply from home', 'text' => 'Amount, purpose and collateral, plus photos of ID and family card — no paperwork brought to the office.'],
            ['icon' => 'git-branch', 'title' => 'Track every stage', 'text' => 'Survey, analysis, approval and disbursement — members always know where their application is.'],
            ['icon' => 'calendar-check', 'title' => 'Clear repayments', 'text' => 'Daily or weekly schedules, remaining balance and paid instalments, always up to date.'],
            ['icon' => 'piggy-bank', 'title' => 'Savings ledger', 'text' => 'Principal, mandatory and voluntary savings with full deposit history and approval status.'],
            ['icon' => 'hand-coins', 'title' => 'Pay your way', 'text' => 'Transfer and upload proof, or hand cash to a collector on a visit; the cashier confirms and status updates.'],
            ['icon' => 'calculator', 'title' => 'Loan calculator', 'text' => 'Members slide the amount and term to see their instalment before they apply.'],
        ],
    ],
    'screens' => [
        ['image' => 'ksp-2', 'title' => 'Loan journey', 'caption' => 'Apply, follow each stage and see a clear repayment schedule.', 'alt' => 'KSP Software section showing loan application, status tracking and repayment schedule screens.'],
        ['image' => 'ksp-3', 'title' => 'Savings', 'caption' => 'Every savings type and deposit, recorded with its status.', 'alt' => 'KSP Software savings screen with balances for principal, mandatory and voluntary savings.'],
    ],
    'stack' => ['React', 'Vite', 'Tailwind CSS', 'PWA', 'Laravel', 'PostgreSQL'],
];
