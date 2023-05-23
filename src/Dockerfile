	
FROM php:8-apache

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN docker-php-ext-install pdo pdo_mysql
# COPY src/* /var/www/html/
