<?php

$page = [
    'layout' => 'service',
    'lang' => 'en',
    'title' => 'DevOps & Infrastructure | DIRAIT',
    'description' => 'Docker, Nginx, Cloudflare — we automate deploys, set up cron jobs, monitor uptime, harden security with Fail2ban, and set up Telegram-based alerting. From migration to maintenance, we keep your systems online and performant.',
    'canonical' => 'https://dirait.com/services-swiss/devops',
    'hero' => [
        'eyebrow' => 'SERVICES · 06 · DEVOPS',
        'title' => 'Infrastructure that *stays up.*',
        'lead' => 'Docker, Nginx and Cloudflare — automated deploys, cron jobs, uptime monitoring, Fail2ban hardening and Telegram alerts. From migration to maintenance, we keep you online.',
        'image' => 'en-devops',
        'image_alt' => 'DevOps console with container health, a deploy log terminal, an uptime graph and Fail2ban stats',
    ],
    'features' => [
        'eyebrow' => 'WHAT WE BUILD',
        'title' => 'Everything between your code and your users',
        'lead' => 'We set up, harden and maintain the infrastructure your applications run on.',
        'items' => [
            ['icon' => 'container', 'title' => 'Docker setups', 'text' => 'Multi-container Docker deployments on Linux servers.'],
            ['icon' => 'server', 'title' => 'Nginx & SSL', 'text' => 'Reverse proxy configuration with SSL in front of every service.'],
            ['icon' => 'cloud', 'title' => 'Cloudflare', 'text' => 'DNS, CDN and DDoS protection at the edge.'],
            ['icon' => 'git-branch', 'title' => 'CI/CD pipelines', 'text' => 'Automated deploys and cron jobs so releases are repeatable.'],
            ['icon' => 'shield-check', 'title' => 'Hardening', 'text' => 'Server hardening, Fail2ban and security patch management.'],
            ['icon' => 'activity', 'title' => 'Uptime & alerts', 'text' => 'Global HTTP monitoring with instant Telegram alerts when a service goes down.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'SELECTED WORK',
        'title' => 'What we have built in DevOps',
        'items' => [
            ['tag' => 'Deployment', 'title' => 'Dockerized application deployments', 'text' => 'Applications containerized with Docker on Linux behind an Nginx reverse proxy, with Cloudflare DNS and CDN, CI/CD and Fail2ban hardening.', 'stack' => ['Docker', 'Nginx', 'Cloudflare', 'CI/CD', 'Linux']],
            ['tag' => 'Monitoring', 'title' => 'Uptime check monitoring platform', 'text' => 'A monitoring platform we built and self-host: global HTTP checks, performance trends, status pages and instant Telegram alerts.', 'stack' => ['React', 'TypeScript', 'Vite', 'REST API', 'Telegram']],
            ['tag' => 'Migration', 'title' => 'App maintenance & migration', 'text' => 'Ongoing maintenance, security patches and migration to modern infrastructure — database migrations, PHP-to-Node transitions and server upgrades.', 'stack' => ['Docker', 'Nginx', 'Node.js', 'PHP']],
        ],
    ],
    'process' => [
        'eyebrow' => 'HOW WE WORK',
        'title' => 'Built for quality, delivered on time',
        'steps' => [
            ['title' => 'Discovery', 'text' => 'We audit your current servers, deploys and risks.'],
            ['title' => 'Design', 'text' => 'A target setup and migration plan agreed before changes are made.'],
            ['title' => 'Iterative development', 'text' => 'Infrastructure changes rolled out step by step, with transparent communication.'],
            ['title' => 'Deploy & support', 'text' => 'Go-live with monitoring and alerting, then ongoing maintenance.'],
        ],
    ],
    'stack' => ['Docker', 'Nginx', 'Cloudflare', 'Linux', 'CI/CD', 'Fail2ban', 'Telegram', 'Node.js', 'PHP'],
    'faq' => [
        ['q' => 'Can you migrate our existing application?', 'a' => 'Yes. We handle legacy-to-modern migrations, database migrations, PHP-to-Node transitions and server upgrades.'],
        ['q' => 'How will we know if something goes down?', 'a' => 'We set up uptime monitoring with instant Telegram alerts, plus status pages and performance trend tracking.'],
        ['q' => 'How do you secure servers?', 'a' => 'Server hardening, Fail2ban, SSL behind Nginx, Cloudflare DDoS protection and regular security patches.'],
        ['q' => 'Do you offer ongoing maintenance?', 'a' => 'Yes. Every project includes post-launch support — 3, 6 or 12 months depending on the plan — and extended maintenance covers updates, fixes and security patches.'],
    ],
    'cta' => ['title' => 'Ready to keep your systems online?', 'text' => 'Tell us about your project. We\'ll share how we\'d approach it, what it would take, and what you can expect — no pressure, no obligation.'],
];
