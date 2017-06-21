#!/bin/bash
mysqldump -uroot -p$MYSQL_ROOT_PASSWORD $MYSQL_DATABASE > /docker-entrypoint-initdb.d/shopware.sql
