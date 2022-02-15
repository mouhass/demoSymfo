<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/option' => [[['_route' => 'option_index', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/option/new' => [[['_route' => 'option_new', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|option/([^/]++)(?'
                        .'|(*:70)'
                        .'|/edit(*:82)'
                        .'|(*:89)'
                    .')'
                    .'|([^/]++)(*:105)'
                    .'|DeleteElement/([^/]++)(*:135)'
                .')'
                .'|/detailspropery/([a-z0-9\\-]*)\\-([^/]++)(*:183)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'option_show', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'option_edit', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'option_delete', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        105 => [[['_route' => 'AdminPropGereID', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::editer'], ['id'], null, null, false, true, null]],
        135 => [[['_route' => 'deleted', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::delete'], ['id'], null, null, false, true, null]],
        183 => [
            [['_route' => 'property.show', '_controller' => 'App\\Controller\\propertyController::show'], ['slug', 'id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
