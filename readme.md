# Docker container made for Shopware development

Designed to use theme and plugins as separate repositories.

## Changes
* Updated to PHP 7.2
* removed ioncube
* added support for grunt
* added .env file
* added support for mac os
* updated readme
* removed obsolete files
* updated gitignore

## Information
add following to /etc/hosts
    172.128.1.1      shopware.test    

database-host: db / 172.128.1.2

### Folders & Files
#### repositories/shopware
Should contain shopware installation

#### .env
defines first 2 bits of ips and theme name

#### db-dump
contains database dump imported at build

## How to start
### Linux
    docker-compose up -d
(docker-compose 1.8.x is required)

### MacOs    
    docker-compose -f docker-compose-mac.yml up -d
    
    add following to /etc/hosts
        localhost     shopware.test


## At first start
    chmod -R 777 repositories/
    
Shopware does require permanent write access to the cache folder. We could map uid/gid. Another option is to use ACL:
    setfacl -d -m g::rwx path/to/cache/folder
    setfacl -d -m u::rwx path/to/cache/folder
    setfacl -d -m o::rwx path/to/cache/folder

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
    docker-compose exec db /usr/local/bin/export/dump.sh
    
## Import database dump  
    docker-compose up --build  

## access container's bash
    docker-compose exec db bash
    
## XDebug
idekey=phpstorm

## Using Grunt
    docker-compose exec apache-php bash
    php bin/console sw:theme:dump:configuration
    cd themes
    grunt
    
## Saving emails using file transporter instead of send
    In the shop backend (Configuration -> Basic settings -> Shop settings -> Mailer) type 'file' in the field 'Sending method'.
    Make sure to create a tmp folder in the main shop directory if there is not one already and set necessary write permissions accordingly.
    Subsequenty, emails will be stored in the tmp folder.
