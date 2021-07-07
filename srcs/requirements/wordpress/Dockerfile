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

WORKDIR /var/www

#Download phpmyadmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-english.tar.gz \
&& tar -xzvf phpMyAdmin-4.9.2-english.tar.gz \
&& rm -rf phpMyAdmin-4.9.2-english.tar.gz \
&& mv phpMyAdmin-4.9.2-english phpmyadmin
COPY conf/config.inc.php /var/www/phpmyadmin
RUN chown -R www-data: /var/www/phpmyadmin

#Download wordpress
RUN wget https://wordpress.org/latest.tar.gz \
&& tar -xzvf latest.tar.gz \
&& rm -rf latest.tar.gz
COPY conf/wp-config.php /var/www/wordpress
RUN chown -R www-data: /var/www/wordpress

#Change the rights in php-fpm

RUN rm -rf /etc/php/7.3/fpm/pool.d/www.conf
COPY conf/www.conf /etc/php/7.3/fpm/pool.d/
RUN chown -R www-data: /etc/php/7.3/fpm/pool.d/www.conf

RUN mkdir /run/php \
&& chown -R www-data: /run/php

EXPOSE 9000

CMD ["/usr/sbin/php-fpm7.3", "-F"]
