FROM debian:buster

RUN apt-get update && apt-get -y install \
wget \
php \
php-mysql \
php-fpm \
php-pdo \
php-gd php-cli \
php-mbstring \
&& rm -rf /var/lib/apt/lists/*

COPY ./conf /var/www/html
COPY ./tools /var/www/html

RUN mkdir /run/php \
&& chown -R www-data: /run/php

WORKDIR /var/www/html

RUN sh create_wordpress.sh

EXPOSE 9000

CMD ["/usr/sbin/php-fpm7.3", "-F"]
