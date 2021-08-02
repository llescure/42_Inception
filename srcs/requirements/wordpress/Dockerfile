FROM debian:buster

#Install necessary package from php

RUN apt-get update && apt-get -y install \
wget \
php \
php-cgi \
php-mysql \
php-fpm \
php-pdo \
php-gd php-cli \
php-mbstring \
&& rm -rf /var/lib/apt/lists/*

#Copy the necessary tools to download wordpress

COPY ./conf/www.conf /var/www/html/

#Create the folder to enable php start

RUN mkdir /run/php

#Launch script

COPY ./tools/create_wordpress.sh /usr/local/bin/
ENTRYPOINT ["create_wordpress.sh"]

WORKDIR /var/www/html/

EXPOSE 9000

CMD ["/usr/sbin/php-fpm7.3", "-F"]
