<?php return array (
    'db' =>
        array (
            'host' => 'db',
            'port' => '3306',
            'username' => 'dev',
            'password' => '123456',
            'dbname' => 'shopware',
        ),
    'front' => [
        'throwExceptions' => true,
        'showException' => true,
    ],
    'phpsettings' => [
        'error_reporting' => E_ALL & ~E_USER_DEPRECATED,
        'display_errors' => 1,
        'date.timezone' => 'Europe/Berlin',
    ],
);