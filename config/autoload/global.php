<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return [
    'apigility' => [
        'config' => [
            'url' => 'http://diedds.com/ws/died_ws3/public/',
            'grant_type' => 'password',
            'client_id' => 'testclient',
            'client_secret' => 'testpass',
            'debug' => true
//            'auth_url' => 'auth',
        ],
        'acl' => 1,
    ],
    'auth' => [
        'mode' => 'oauth', // oauth => 'Apigility' -/- local => 'en su propia bd'
        'x' => 'x',
    ],
    'module_layouts' => [
        'Application' => 'layout/layout.phtml',
        'Usuario' => 'layout/layout_usuario.phtml',
//        'Admin' => 'layout/layout_admin.phtml'
    ],
    'view_manager' => [
        'strategies' => [
            'ViewJsonStrategy',
        ]
    ]
];
