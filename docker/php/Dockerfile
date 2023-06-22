FROM php:8.2-apache

ENV TZ Asia/Tokyo

RUN apt-get update \
    && apt-get install -y \
        libonig-dev \
        ssh \
        tree \
        wget \
        rsync \
        vim \
    && docker-php-ext-install pdo_mysql mysqli \
    && a2enmod rewrite

RUN pecl install xdebug && \
    docker-php-ext-enable xdebug

COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

