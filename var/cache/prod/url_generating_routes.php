<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'listTheme' => [[], ['_controller' => 'App\\Controller\\HomeController::menuNavbar'], [], [['text', '/noRoute/listTheme']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'memoryIndex' => [[], ['_controller' => 'App\\Controller\\MemoryController::index'], [], [['text', '/']], [], [], []],
    'memory' => [['id'], ['_controller' => 'App\\Controller\\MemoryController::memory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/memory']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/register']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegisterController::register'], [], [['text', '/register']], [], [], []],
];
