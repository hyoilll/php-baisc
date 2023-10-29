FROM php:8.1.12-apache

RUN apt update \
 && docker-php-ext-install pdo_mysql

COPY src/basic.php /var/www/html/index.php