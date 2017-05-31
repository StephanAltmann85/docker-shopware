# Docker container made for Shopware development

Designed to use theme and plugins as separate repositories.

## Todo
* integration of host manager
* use of environment vars
* performance optimization

## Information
add following to /etc/hosts
    172.x.x.x      shopware.dev
    
### Get IP
    docker exec -it dockershopware_apache-php_1 bash
    ip addr

database-host: db

## How to start
    docker-compose up -d
(docker-compose 1.8.x is required)

## Export database dump
    docker exec -it dockershopware_db_1 /usr/local/bin/export/dump.sh

## access container's bash
    docker exec -it dockershopware_db_1 bash
