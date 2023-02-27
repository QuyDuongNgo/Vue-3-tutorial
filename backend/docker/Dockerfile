# FROM php:8.1.5-fpm-alpine3.14

# RUN apk update && apk upgrade

# RUN apk add --no-cache zip unzip curl sqlite nginx supervisor

# RUN apk add bash

# RUN apk add --no-cache mysql-client

# RUN rm -rf /var/lib/apt

# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer 

# RUN apk update

# RUN apk add autoconf

# RUN docker-php-ext-install soap bcmath gmp pdo pdo_mysql intl opcache gd json mbstring gmp \
#     && docker-php-ext-enable soap bcmath gmp pdo pdo_mysql intl opcache gd json mbstring gmp \
#     && pecl install xdebug \
#     && docker-php-ext-enable xdebug

# RUN docker-php-ext-enable xdebug

# # RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \ 
# #   && pecl install xdebug \
# #   && docker-php-ext-enable xdebug \
# #   && apk del pcre-dev ${PHPIZE_DEPS}

# RUN apk add --update npm

FROM ubuntu:23.04

RUN apt-get update
RUN apt-get install -y software-properties-common
RUN add-apt-repository -y ppa:ondrej/php
RUN apt-get install -y php8.1-fpm
RUN apt-get install -y php8.1-cli php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath

RUN apt-get install -y curl
RUN apt-get install -y php-cli unzip

RUN curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
RUN php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN apt-get install -y default-mysql-client

RUN apt-get install -y php-xdebug
RUN apt-get install -y php-codecoverage
RUN apt-get install -y curl
RUN curl -sL https://deb.nodesource.com/setup_19.x

RUN apt-get install -y nodejs

# FROM amberz/gitlab-ci-pipeline-php:fpm
