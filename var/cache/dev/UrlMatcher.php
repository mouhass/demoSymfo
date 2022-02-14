<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'AdminPropGere', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::Login'], null, null, null, false, false, null]],
        '/message' => [[['_route' => 'message', '_controller' => 'App\\Controller\\messageController::new'], null, null, null, false, false, null]],
        '/biens' => [[['_route' => 'property.index', '_controller' => 'App\\Controller\\propertyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/createNewProperty' => [[['_route' => 'CreateNewProperty', '_controller' => 'App\\Controller\\propertyController::createNewProperty'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'Home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|([^/]++)(*:60)'
                    .'|DeleteElement/([^/]++)(*:89)'
                .')'
                .'|/detailspropery/([a-z0-9\\-]*)\\-([^/]++)(*:136)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [[['_route' => 'AdminPropGereID', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::editer'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'deleted', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::delete'], ['id'], null, null, false, true, null]],
        136 => [
            [['_route' => 'property.show', '_controller' => 'App\\Controller\\propertyController::show'], ['slug', 'id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
