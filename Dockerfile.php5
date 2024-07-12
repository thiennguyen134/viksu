FROM php:5.6.14-apache
# Docs: https://hub.docker.com/_/php

COPY ./viksu-source /var/www/html
RUN docker-php-ext-install mysqli pdo pdo_mysql\
    && docker-php-ext-enable pdo_mysql

EXPOSE 80
