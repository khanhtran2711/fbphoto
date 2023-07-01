FROM php:8-fpm
COPY php.ini /usr/local/etc/php/
WORKDIR /var/www