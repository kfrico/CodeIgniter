FROM php:5.6-fpm

RUN apt-get update \
 && apt-get install -y --no-install-recommends ca-certificates git wget zlib1g-dev libmemcached-dev procps \
 && apt-get clean -y \
 && rm -fr /var/lib/apt/lists/*

RUN docker-php-ext-install bcmath mbstring mysqli pdo pdo_mysql

RUN echo '' | pecl install redis \
 && docker-php-ext-enable redis.so