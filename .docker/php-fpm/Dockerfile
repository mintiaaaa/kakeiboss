FROM php:8.1.0-fpm
ENV TZ Asia/Tokyo
RUN apt-get update && apt-get install -y gnupg2
RUN curl -sL https://deb.nodesource.com/setup_15.x | bash -
RUN apt-get update && apt-get install -y \
        libssl-dev \
        zlib1g-dev \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        wget \
        nodejs \
        sendmail \
        libicu-dev \
        make \
        g++ \
        gcc \
        libzip-dev \
        libonig-dev

RUN docker-php-ext-install -j$(nproc) iconv pdo_mysql mysqli intl zip gd
RUN docker-php-ext-configure gd \
    --with-jpeg=/usr/include/ \
    --with-freetype=/usr/include/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x /usr/local/bin/composer

RUN npm install -g npm@latest
RUN npm install -g laravel-mix

COPY ./php.ini /usr/local/etc/php/
