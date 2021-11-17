FROM php:7.4

COPY ./sample.php .

CMD ["php", "./sample.php"]

EXPOSE 80
