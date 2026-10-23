<?php

$page = [
    'layout' => 'service',
    'lang' => 'en',
    'title' => 'IoT Platforms | DIRAIT',
    'description' => 'We build real-time IoT platforms using MQTT (Mosquitto) and WebSocket for live data streaming. Custom widgets, tenant-based data isolation, and close collaboration with hardware engineers ensure your IoT solution is reliable and scalable.',
    'canonical' => 'https://dirait.com/services-swiss/iot',
    'hero' => [
        'eyebrow' => 'SERVICES · 03 · IOT',
        'title' => 'Every sensor, *live on screen.*',
        'lead' => 'Real-time IoT platforms on MQTT (Mosquitto) and WebSocket — custom widgets, tenant-based data isolation and close collaboration with your hardware engineers.',
        'image' => 'en-iot',
        'image_alt' => 'IoT dashboard with a device fleet map and live MQTT sensor charts',
    ],
    'features' => [
        'eyebrow' => 'WHAT WE BUILD',
        'title' => 'From device to dashboard in real time',
        'lead' => 'We connect your hardware to software operators can trust, watch and control.',
        'items' => [
            ['icon' => 'radio', 'title' => 'MQTT subscriptions', 'text' => 'Subscribe to device topics through a Mosquitto broker and route data where it is needed.'],
            ['icon' => 'activity', 'title' => 'WebSocket streaming', 'text' => 'Live sensor data pushed to the browser with no refresh.'],
            ['icon' => 'chart-line', 'title' => 'Custom widgets', 'text' => 'Visualizations designed around your sensors and the way operators read them.'],
            ['icon' => 'sliders-horizontal', 'title' => 'Device control', 'text' => 'Bidirectional communication to control devices, with grouping and management.'],
            ['icon' => 'bell-ring', 'title' => 'Alerts', 'text' => 'Alert and notification rules that flag problems as they happen.'],
            ['icon' => 'history', 'title' => 'Playback & isolation', 'text' => 'Historical data playback and tenant-based data isolation for multi-client platforms.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'SELECTED WORK',
        'title' => 'What we have built in IoT',
        'items' => [
            ['tag' => 'Observer', 'title' => 'IoT data observer dashboard', 'text' => 'A real-time dashboard for sensor networks: subscribes to MQTT topics via Mosquitto, streams over WebSocket and visualizes data with custom widgets, tenant isolation and playback.', 'stack' => ['React', 'Vite', 'TypeScript', 'Mosquitto MQTT', 'WebSocket']],
            ['tag' => 'Control', 'title' => 'IoT realtime interaction & observation', 'text' => 'An operator platform to monitor and control connected devices in real time, with alerts, device grouping and a responsive control panel.', 'stack' => ['React', 'TypeScript', 'Tailwind', 'MQTT', 'WebSocket']],
            ['tag' => 'Monitoring', 'title' => 'Uptime check monitoring', 'text' => 'Checks HTTP endpoints, tracks response times and uptime history, and alerts via Telegram when services go down.', 'stack' => ['React', 'TypeScript', 'Vite', 'REST API']],
        ],
    ],
    'process' => [
        'eyebrow' => 'HOW WE WORK',
        'title' => 'Built for quality, delivered on time',
        'steps' => [
            ['title' => 'Discovery', 'text' => 'We work with your hardware engineers to understand devices, topics and data.'],
            ['title' => 'Design', 'text' => 'Dashboards and widgets designed around what operators need to see and do.'],
            ['title' => 'Iterative development', 'text' => 'Tested against real device data, with transparent progress throughout.'],
            ['title' => 'Deploy & support', 'text' => 'Production deployment and post-launch support as your fleet grows.'],
        ],
    ],
    'stack' => ['MQTT', 'Mosquitto', 'WebSocket', 'React', 'Vite', 'TypeScript', 'Tailwind', 'REST API'],
    'faq' => [
        ['q' => 'Which protocols do you work with?', 'a' => 'We build on MQTT with a Mosquitto broker and stream data to the browser over WebSocket, with REST APIs where needed.'],
        ['q' => 'Can one platform serve several clients?', 'a' => 'Yes. We implement tenant-based data isolation so each client only sees its own devices and data.'],
        ['q' => 'How long does an IoT project take?', 'a' => 'IoT projects vary with hardware and third-party complexity. We provide a detailed timeline after discovery.'],
        ['q' => 'Do you work with our hardware team?', 'a' => 'Yes — close collaboration with hardware engineers is part of how we make IoT solutions reliable.'],
    ],
    'cta' => ['title' => 'Ready to build something great?', 'text' => 'Tell us about your project. We\'ll share how we\'d approach it, what it would take, and what you can expect — no pressure, no obligation.'],
];
