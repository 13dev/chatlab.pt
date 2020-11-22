#!/usr/bin/env bash
ACTION=$1
COMMAND=$2


if [ $ACTION = "bash" ]; then
docker-compose run app bash
fi

if [ $ACTION = "exec" ]; then
docker-compose exec -T app $COMMAND
fi

if [ $ACTION = "artisan" ]; then
docker-compose exec -T app php artisan $COMMAND
fi

