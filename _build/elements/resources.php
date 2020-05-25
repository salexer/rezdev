<?php

return [
    'web' => [
        'system' => [
            'pagetitle' => 'system',
            'template' => 0,
            'hidemenu' => true,
            'published' => false,
            'resources' => [
                'error403' => [
                    'pagetitle' => 'Ошибка 403',
                    'longtitle' => 'Доступ запрещен',
                    'template' => 0,
                    'hidemenu' => true,
                    'uri' => 'error403',
                    'uri_override' => true,
                    'content' => "{include 'file:resources/service/error.tpl'}",
                ],
                'error404' => [
                    'pagetitle' => 'Ошибка 404',
                    'longtitle' => 'Страница не найдена',
                    'template' => 0,
                    'hidemenu' => true,
                    'uri' => 'error404',
                    'uri_override' => true,
                    'content' => "{include 'file:resources/service/error.tpl'}",
                ],
                'error503' => [
                    'pagetitle' => 'Ошибка 503',
                    'longtitle' => 'Сайт временно не доступен',
                    'template' => 0,
                    'hidemenu' => true,
                    'uri' => 'error503',
                    'uri_override' => true,
                    'content' => "{include 'file:resources/service/error.tpl'}",
                ],
                'sitemap.xml' => [
                    'pagetitle' => 'sitemap.xml',
                    'template' => 0,
                    'hidemenu' => true,
                    'uri' => 'sitemap.xml',
                    'uri_override' => true,
                    'content' => '[[!pdoSitemap]]',
                ],
                'robots.txt' => [
                    'pagetitle' => 'robots.txt',
                    'content_type' => 3,
                    'template' => 0,
                    'hidemenu' => true,
                    'uri' => 'robots.txt',
                    'uri_override' => true,
                    'content' => "{include 'file:resources/service/robots.tpl'}",
                ],
            ],
        ],
    ],
];