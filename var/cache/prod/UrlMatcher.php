<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\InscriptionController::index'], null, null, null, false, false, null]],
        '/Login' => [[['_route' => 'Login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/message' => [[['_route' => 'message', '_controller' => 'App\\Controller\\messageController::new'], null, null, null, false, false, null]],
        '/biens/form' => [[['_route' => 'property.new', '_controller' => 'App\\Controller\\propertyController::new'], null, null, null, false, false, null]],
        '/biens' => [[['_route' => 'property.index', '_controller' => 'App\\Controller\\propertyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'Home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
