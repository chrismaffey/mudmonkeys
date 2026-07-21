FROM php:8.5-apache

WORKDIR /var/www/html

RUN a2enmod rewrite

COPY docker/apache.conf /etc/apache2/conf-available/mudmonkeys.conf
RUN a2enconf mudmonkeys

COPY public/ /var/www/html/
COPY includes/ /var/www/includes/
COPY controllers/ /var/www/controllers/
COPY assets/ /var/www/html/assets/

EXPOSE 80
