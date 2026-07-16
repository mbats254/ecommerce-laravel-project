#!/bin/sh
set -e

if [ ! -f vendor/autoload.php ]; then
    composer install --no-interaction --prefer-dist
fi

# Production sets OPTIMIZE_ON_BOOT=true (docker-compose.prod.yml). Caching
# config at build time would bake in whichever env was present during the
# CI build, not the real production values, so this runs at container start
# instead, once the real .env is in place.
if [ "$OPTIMIZE_ON_BOOT" = "true" ]; then
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    php artisan event:cache
fi

if [ "$1" = "php-fpm" ] && [ "$AUTO_MIGRATE" = "true" ]; then
    php artisan migrate --force
fi

exec "$@"
