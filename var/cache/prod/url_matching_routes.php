<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/noRoute/listTheme' => [[['_route' => 'listTheme', '_controller' => 'App\\Controller\\HomeController::menuNavbar'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'memoryIndex', '_controller' => 'App\\Controller\\MemoryController::index'], null, null, null, false, false, null]],
        '/register' => [
            [['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null],
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/memory/([^/]++)(*:23)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [
            [['_route' => 'memory', '_controller' => 'App\\Controller\\MemoryController::memory'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
