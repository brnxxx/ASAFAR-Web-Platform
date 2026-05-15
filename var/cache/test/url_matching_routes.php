<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/profile' => [[['_route' => 'profile_index', '_controller' => 'App\\Controller\\ProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/profile/modifier' => [[['_route' => 'profile_update', '_controller' => 'App\\Controller\\ProfileController::update'], null, ['POST' => 0], null, false, false, null]],
        '/profile/changer-mot-de-passe' => [[['_route' => 'profile_change_password', '_controller' => 'App\\Controller\\ProfileController::changePassword'], null, ['POST' => 0], null, false, false, null]],
        '/profile/supprimer' => [[['_route' => 'profile_delete', '_controller' => 'App\\Controller\\ProfileController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/profile/upload-photo' => [[['_route' => 'profile_upload_photo', '_controller' => 'App\\Controller\\ProfileController::uploadPhoto'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
