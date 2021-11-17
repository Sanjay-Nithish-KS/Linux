FROM php:7.2-apache

RUN apt-get update && apt-get install -y

RUN apt-get install mysqli

ADD index.php /var/www/html
