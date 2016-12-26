#!/bin/bash
mysqldump -uroot -p123456 shopware > /docker-entrypoint-initdb.d/shopware.sql
