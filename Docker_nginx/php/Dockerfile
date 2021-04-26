FROM php:7.4-fpm

ENV DEBIAN_FRONTEND noninteractive

COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update \
  && apt-get install -y build-essential \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libmcrypt-dev libzip-dev zlib1g-dev \
  && apt-get install -y libicu-dev git vim libc-client-dev libkrb5-dev libbz2-dev zip unzip sendmail procps libonig-dev \
  && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
  && pecl install mcrypt \
  && pecl install redis \
  && pecl install xdebug \
  && docker-php-ext-configure intl \
  && docker-php-ext-install mysqli pdo_mysql gd zip imap bz2 intl \
  && docker-php-ext-enable mcrypt \
  && docker-php-ext-enable redis \
  && docker-php-ext-enable xdebug

COPY ./xdebug.ini $PHP_INI_DIR/conf.d/

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Node.js
RUN curl -sL https://deb.nodesource.com/setup_12.x -o nodesource_setup.sh
RUN bash nodesource_setup.sh
RUN apt-get install nodejs -y
RUN npm install npm@6.13.0 -g
RUN command -v node
RUN command -v npm

COPY mail_config.sh /tmp/
RUN chmod +x /tmp/mail_config.sh
#CMD /tmp/mail_config.sh
