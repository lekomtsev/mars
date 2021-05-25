FROM php:7.4-fpm

LABEL maintainer="Lekomtsev Mikhail (jsmaster.ru)"

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libzip-dev
RUN docker-php-ext-install -j$(nproc) iconv mysqli pdo_mysql bcmath zip calendar exif
RUN docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

RUN chown -R www-data:www-data /var/www
