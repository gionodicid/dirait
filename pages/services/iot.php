<?php

$page = [
    'layout' => 'service',
    'lang' => 'en',
    'title' => 'IoT Platform & Dashboard Development | DIRAIT',
    'description' => 'Real-time IoT dashboards on MQTT and WebSocket — multi-tenant data isolation, custom widgets, threshold alerts and device control for your sensors.',
    'canonical' => 'https://dirait.com/services/iot',
    'hero' => [
        'eyebrow' => 'SERVICES · IOT',
        'title' => 'Every sensor, *live on screen.*',
        'lead' => 'Real-time IoT platforms on MQTT (Mosquitto) and WebSocket that turn sensor data into operational decisions — custom widgets, multi-tenant data isolation and close collaboration with your hardware engineers.',
        'note' => '30+ projects delivered across Indonesia, Singapore, the Netherlands and the UK',
        'image' => 'iot',
        'image_alt' => 'IoT dashboard with a device fleet map and live MQTT sensor charts',
    ],
    'features' => [
        'eyebrow' => 'WHAT WE BUILD',
        'title' => 'From device to dashboard in real time',
        'lead' => 'We connect your hardware to software operators can trust, watch and control.',
        'items' => [
            ['icon' => 'router', 'title' => 'MQTT integration', 'text' => 'A Mosquitto broker for lightweight device-to-cloud communication, with publish/subscribe topics and tiered QoS.'],
            ['icon' => 'zap', 'title' => 'WebSocket streaming', 'text' => 'Sensor data and notifications pushed to the browser in real time through Laravel Echo Server — no polling, no refresh.'],
            ['icon' => 'layout-dashboard', 'title' => 'Custom widgets', 'text' => 'Drag-and-resize charts, gauges, indicators and tables that operators can arrange to suit how they read the data.'],
            ['icon' => 'sliders-horizontal', 'title' => 'Device control', 'text' => 'Bidirectional communication to control devices, with grouping and management.'],
            ['icon' => 'bell-ring', 'title' => 'Threshold alerts', 'text' => 'Alerts via Telegram, email or WebSocket the moment a sensor value crosses its limit.'],
            ['icon' => 'building-2', 'title' => 'Multi-tenant & playback', 'text' => 'One instance serves many clients with full data isolation — each tenant has its own devices, users and configuration — plus historical playback.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'SELECTED WORK',
        'title' => 'What we have built in IoT',
        'items' => [
            ['tag' => 'Observer', 'title' => 'IoT data observer dashboard', 'text' => 'A real-time dashboard for sensor networks: MQTT topics via Mosquitto, WebSocket streaming, drag-and-resize widgets, tenant isolation and playback, secured with RBAC and 2FA. Built together with hardware engineers for sensor integration.', 'stack' => ['React', 'Vite', 'TypeScript', 'PostgreSQL', 'Mosquitto MQTT', 'WebSocket']],
            ['tag' => 'Control', 'title' => 'IoT realtime interaction & observation', 'text' => 'An operator platform to monitor and control connected devices in real time, with alerts, device grouping and a responsive control panel.', 'stack' => ['React', 'TypeScript', 'Tailwind', 'MQTT', 'WebSocket']],
            ['tag' => 'Monitoring', 'title' => 'Uptime monitoring & alert system', 'text' => 'Scheduled availability checks for services and devices via cron, tracking response times and uptime history, with instant Telegram alerts on downtime or anomalies.', 'stack' => ['React', 'TypeScript', 'Shell scripting', 'Playwright', 'Telegram Bot API', 'Cron']],
        ],
    ],
    'process' => [
        'eyebrow' => 'HOW WE WORK',
        'title' => 'Built for quality, delivered on time',
        'steps' => [
            ['title' => 'Discovery & architecture', 'text' => 'We study your sensors and devices with your hardware engineers, then design everything from the protocol to the tenant database structure.'],
            ['title' => 'Design', 'text' => 'Dashboards and widgets designed around what operators need to see and do.'],
            ['title' => 'Integration & development', 'text' => 'Hardware connected over MQTT, dashboards tested against real device data and alerts tuned to your operating thresholds.'],
            ['title' => 'Deploy & monitoring', 'text' => 'Production deployment with uptime monitoring, full documentation and training for your operations team.'],
        ],
    ],
    'stack' => ['MQTT', 'Mosquitto', 'WebSocket', 'React', 'TypeScript', 'Laravel', 'Laravel Echo', 'PostgreSQL', 'Telegram Bot API', 'Playwright'],
    'faq' => [
        ['q' => 'Which protocols do you use to connect devices?', 'a' => 'MQTT with a Mosquitto broker for device-to-cloud, and WebSocket to push real-time data to browsers and client apps, with REST APIs where needed.'],
        ['q' => 'Can one platform serve several clients?', 'a' => 'Yes. A multi-tenant architecture gives each client its own devices, users and configuration with full data isolation.'],
        ['q' => 'How long does an IoT project take?', 'a' => 'IoT timelines depend on hardware and third-party integration complexity. We provide a detailed timeline after discovery.'],
        ['q' => 'How are security and dashboard access handled?', 'a' => 'We implement role-based access control (RBAC) and two-factor authentication (2FA), plus uptime monitoring with Telegram alerts for production environments.'],
        ['q' => 'Do you work with our hardware team?', 'a' => 'Yes — close collaboration with hardware engineers is part of how we make IoT solutions reliable.'],
    ],
    'cta' => ['title' => 'Ready to build your IoT platform?', 'text' => 'Tell us about the hardware and data you want to monitor. We\'ll design the right solution — no obligation.'],
];
