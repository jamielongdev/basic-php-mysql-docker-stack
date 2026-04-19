FROM php:8.5.5-apache

RUN apt-get update \
    && apt-get install -y default-mysql-client default-libmysqlclient-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable mysqli \