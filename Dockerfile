FROM php:8.5.5-apache

# Install system dependencies
RUN apt-get update \
    && apt-get install -y \
        unzip \
        zip \
        libzip-dev \
        zlib1g-dev \
        default-mysql-client \
        default-libmysqlclient-dev \
    && docker-php-ext-install zip mysqli pdo pdo_mysql \
    && docker-php-ext-enable mysqli

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer