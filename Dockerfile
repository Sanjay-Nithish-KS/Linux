FROM php:7.4

COPY ./index.php .

CMD ["php", "./index.php"]

EXPOSE 80
