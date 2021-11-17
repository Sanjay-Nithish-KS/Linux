FROM ubuntu
RUN apt-get update -y
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get install -y apache2 php php-mysqli
WORKDIR var/www/html
RUN rm index.html
COPY index.php index.php
EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"]

