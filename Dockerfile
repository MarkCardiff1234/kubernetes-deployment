FROM php:7-fpm
COPY www /usr/share/nginx/html
RUN docker-php-ext-install mysqli
