# Docker container made for Shopware development

Designed to use theme and plugins as separate repositories.

## Todo


## Information
add following to /etc/hosts
    172.10.1.1      shopware.dev
    
### Get IP
    docker exec -it dockershopware_apache-php_1 ip addr

database-host: db

## How to start
    docker-compose up -d
(docker-compose 1.8.x is required)

## At first start
    chmod -R 777 repositories/
    
## config.php
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

## Export database dump
    docker exec -it dockershopware_db_1 /usr/local/bin/export/dump.sh

## access container's bash
    docker exec -it dockershopware_db_1 bash
