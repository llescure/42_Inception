FROM debian:buster

#Install necessary package from php

RUN apt-get update && apt-get -y install \
wget \
php \
php-mysql \
php-fpm \
php-pdo \
php-gd php-cli \
php-mbstring \
&& rm -rf /var/lib/apt/lists/*

#Copy the necessary tools to download wordpress

COPY ./conf /var/www/html
COPY ./tools/create_wordpress.sh /usr/local/bin/

#Create the folder to enable php start

RUN mkdir /run/php \
&& chown -R www-data: /run/php

WORKDIR /var/www/html

#Launch script

RUN sh /usr/local/bin/create_wordpress.sh \
&& chown -R www-data: /var/www/html/

EXPOSE 9000

CMD ["/usr/sbin/php-fpm7.3", "-F"]
