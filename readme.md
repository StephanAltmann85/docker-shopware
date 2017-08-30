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

##At first start
    chmod -R 777 repositories/shopware/var/

## Export database dump
    docker exec -it dockershopware_db_1 /usr/local/bin/export/dump.sh

## access container's bash
    docker exec -it dockershopware_db_1 bash
