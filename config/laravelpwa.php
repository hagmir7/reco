<?php

return [
    'name' => 'LaravelPWA',
    'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => 'Diasmart',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
                'path' => '/assets/pwa/icons/icon-72x72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/assets/pwa/icons/icon-96x96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/assets/pwa/icons/icon-128x128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/assets/pwa/icons/icon-144x144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/assets/pwa/icons/icon-152x152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/assets/pwa/icons/icon-192x192.png',
                'purpose' => 'any'
            ],
            '256x256' => [
                'path' => '/assets/pwa/icons/icon-256x256.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/assets/pwa/icons/icon-512x512.png',
                'purpose' => 'any'
            ],
            '1024x1024' => [
                'path' => '/assets/pwa/icons/icon-1024x1024.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/assets/pwa/splashes/splash-640x1136.png',
            '750x1334' => '/assets/pwa/splashes/splash-750x1334.png',
            '828x1792' => '/assets/pwa/splashes/splash-828x1792.png',
            '1125x2436' => '/assets/pwa/splashes/splash-1125x2436.png',
            '1242x2208' => '/assets/pwa/splashes/splash-1242x2208.png',
            '1242x2688' => '/assets/pwa/splashes/splash-1242x2688.png',
            '1536x2048' => '/assets/pwa/splashes/splash-1536x2048.png',
            '1668x2224' => '/assets/pwa/splashes/splash-1668x2224.png',
            '1668x2388' => '/assets/pwa/splashes/splash-1668x2388.png',
            '2048x2732' => '/assets/pwa/splashes/splash-2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Accueil',
                'description' => "Page d'accueil",
                'url' => '/',
                'icons' => [
                    "src" => "/assets/pwa/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Contact',
                'description' => 'Contacter un technicien',
                'url' => '/contact',
                'icons' => [
                    "src" => "/assets/pwa/icons/icon-72x72.png",
                    "purpose" => "any"
                ],
            ]
        ],
        'custom' => []
    ]
];
