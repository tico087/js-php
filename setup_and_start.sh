#!/bin/bash

if [ "$#" -eq 0 ]; then
    services="mariadb nginx laravel"
else
    services="$@"
fi

# chmod +x ./wait-for-it.sh

docker compose down --remove-orphans
docker-compose build --no-cache
docker-compose up -d $services

