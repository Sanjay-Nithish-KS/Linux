FROM php:7.2-apache

RUN apt-get update && apt-get install -y

RUN docker-php-ext-install mysqli

ADD index.php /var/www/html

EXPOSE 80
