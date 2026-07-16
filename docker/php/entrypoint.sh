#!/bin/sh
set -e

if [ ! -f vendor/autoload.php ]; then
    composer install --no-interaction --prefer-dist
fi

if [ "$1" = "php-fpm" ] && [ "$AUTO_MIGRATE" = "true" ]; then
    php artisan migrate --force
fi

exec "$@"
