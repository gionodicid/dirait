<?php

$page = [
    'layout' => 'service',
    'lang' => 'en',
    'title' => 'Custom HRIS Development | DIRAIT',
    'description' => 'Custom HRIS built around your company policies: payroll, attendance, leave and performance in one system, with a mobile PWA and push notifications.',
    'canonical' => 'https://dirait.com/services/hris',
    'hero' => [
        'eyebrow' => 'SERVICES · HRIS',
        'title' => 'An HRIS that follows *your policies*.',
        'lead' => 'Payroll, attendance, leave and performance management in one integrated system — built around your company\'s own policies instead of forcing you to adapt.',
        'image' => 'hris',
        'image_alt' => 'HRIS dashboard with a daily attendance summary, a list of leave requests, a monthly payroll summary and employee check-ins.',
    ],
    'features' => [
        'eyebrow' => 'MODULES',
        'title' => 'What we build into your HRIS.',
        'lead' => 'The whole employee lifecycle — from morning check-in to payslip — on one platform.',
        'items' => [
            ['icon' => 'wallet', 'title' => 'Payroll & compensation', 'text' => 'Salaries calculated automatically from attendance, overtime and allowances, integrated with bank systems and regional minimum wage rules.'],
            ['icon' => 'scan-face', 'title' => 'Attendance', 'text' => 'Check in via QR code, geolocation or biometrics, with late-arrival tolerance configurable per division.'],
            ['icon' => 'calendar-days', 'title' => 'Leave & permits', 'text' => 'Online leave requests with multi-level approval, automatic leave balances and a team calendar.'],
            ['icon' => 'shield-check', 'title' => 'Roles & RBAC', 'text' => 'Different access rights for HR admins, managers and employees, matched to what each one needs.'],
            ['icon' => 'smartphone', 'title' => 'PWA & mobile', 'text' => 'Employees check in, request leave and view payslips from their phone through a Progressive Web App.'],
            ['icon' => 'chart-pie', 'title' => 'Reports & analytics', 'text' => 'Real-time headcount, HR costs, turnover and attendance trends, with export to Excel.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'CASE STUDY',
        'title' => 'A credit cooperative system with a PWA.',
        'items' => [
            ['tag' => 'PWA · Multi-Role · Push Notification', 'title' => 'HRIS and organization management for a credit cooperative', 'text' => 'Manages data for 12,000+ members, savings and loans, surplus (SHU) distribution, and staff attendance and payroll. Built as a PWA that loads in under 2 seconds and works offline, with push notifications for loans, due dates and annual meeting (RAT) announcements, plus a complete audit trail for reporting to the Ministry.', 'stack' => ['React', 'Laravel', 'PostgreSQL']],
        ],
    ],
    'process' => [
        'eyebrow' => 'PROCESS',
        'title' => 'How we build your HRIS.',
        'steps' => [
            ['title' => 'Learn your policies', 'text' => 'We study your HR policies, org structure, payroll rules and workflows, and turn them into a specification.'],
            ['title' => 'Build & test', 'text' => 'Iterative development; every module is tested with your HR team so payroll, leave and approvals work exactly right.'],
            ['title' => 'Deploy & training', 'text' => 'Launch, employee data migration and HR team training, with full support through the transition period.'],
        ],
    ],
    'stack' => ['React', 'Laravel', 'PostgreSQL', 'PWA', 'Push Notification', 'Docker', 'Nginx'],
    'faq' => [
        ['q' => 'Can payroll follow our company\'s own rules?', 'a' => 'Yes. Salary components, overtime, allowances and late-arrival tolerance are configured to your policies and tested with your HR team before go-live.'],
        ['q' => 'Can employees use the HRIS on their phones?', 'a' => 'Yes. The HRIS is built as a PWA, so employees can check in, request leave and view payslips from a smartphone, even on a limited connection.'],
        ['q' => 'How do you control who sees what?', 'a' => 'With role-based access control: HR admins, managers and employees each get their own permissions, and we can add 2FA and SSO.'],
        ['q' => 'How long does a custom HRIS take?', 'a' => 'Custom web applications typically take 8–16 weeks depending on the modules in scope. We give you a detailed timeline after discovery.'],
        ['q' => 'Is there support after launch?', 'a' => 'Every project includes post-launch support. We also offer extended maintenance for updates, bug fixes, security patches and new features.'],
    ],
    'cta' => ['title' => 'Ready to modernize your HR?', 'text' => 'Tell us about your HR policies. We\'ll explain how a custom HRIS can automate the entire employee lifecycle.'],
];
