<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/user/create' => [[['_route' => 'user-create', '_controller' => 'App\\Controller\\UserController::create'], null, null, null, false, false, null]],
        '/user/delete' => [[['_route' => 'user-delete', '_controller' => 'App\\Controller\\UserController::delete'], null, null, null, false, false, null]],
        '/user/update' => [[['_route' => 'user-update', '_controller' => 'App\\Controller\\UserController::update'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user-read', '_controller' => 'App\\Controller\\UserController::read'], null, null, null, true, false, null]],
        '/product/create' => [[['_route' => 'product-create', '_controller' => 'App\\Controller\\ProductController::create'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product-read', '_controller' => 'App\\Controller\\ProductController::read'], null, null, null, true, false, null]],
        '/product/update' => [[['_route' => 'product-update', '_controller' => 'App\\Controller\\ProductController::update'], null, null, null, false, false, null]],
        '/product/delete' => [[['_route' => 'product-delete', '_controller' => 'App\\Controller\\ProductController::delete'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
