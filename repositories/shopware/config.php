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
        'throwExceptions' => false,
        'showException' => false,
    ],
    'phpsettings' => [
    'error_reporting' => E_ALL & ~E_USER_DEPRECATED,
    'display_errors' => 0,
    'date.timezone' => 'Europe/Berlin',
],
);