FROM php:8.4-fpm-alpine AS app

ARG APP_ENV=local

RUN apk add --no-cache \
        bash \
        curl \
        freetype-dev \
        icu-dev \
        libjpeg-turbo-dev \
        libpng-dev \
        libwebp-dev \
        libzip-dev \
        mysql-client \
        oniguruma-dev \
        git \
        unzip \
    && apk add --no-cache --virtual .build-deps $PHPIZE_DEPS linux-headers \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j"$(nproc)" \
        bcmath \
        gd \
        intl \
        opcache \
        pcntl \
        pdo_mysql \
        zip \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apk del .build-deps \
    && rm -rf /var/cache/apk/*

COPY docker/php/conf.d/local.ini /usr/local/etc/php/conf.d/zz-local.ini

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Install dependencies against composer.lock only first, so this layer stays
# cached across app-code-only changes. Production skips dev tooling
# (Pest/Pint/Larastan) that the dev image needs for `artisan test` etc.
COPY composer.json composer.lock ./
RUN if [ "$APP_ENV" = "production" ]; then \
        composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction; \
    else \
        composer install --no-scripts --no-autoloader --prefer-dist --no-interaction; \
    fi

COPY . .

# Scripts run here (not --no-scripts) so `composer dump-autoload`'s
# post-autoload-dump hook re-runs `artisan package:discover` against
# whatever vendor/ this build actually produced — dev or --no-dev. Without
# this, the packages.php/services.php baked in from COPY . . (generated on
# whichever machine last ran composer outside Docker) can list providers
# that don't exist in this image's vendor/, which fails at boot, not build.
RUN composer dump-autoload --optimize \
    && chown -R www-data:www-data storage bootstrap/cache

COPY docker/php/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 9000

ENTRYPOINT ["entrypoint.sh"]
CMD ["php-fpm"]

# --- web -------------------------------------------------------------------
# Bakes public/ and the nginx config into a versioned image alongside `app`,
# built from the exact same commit. Only used in production
# (docker-compose.prod.yml) — local dev keeps using a bare nginx image with
# bind mounts for live-reload. This means a production server needs nothing
# checked out from git beyond docker-compose.prod.yml and .env.
FROM nginx:1.27-alpine AS web

COPY --from=app /var/www/html/public /var/www/html/public
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf
