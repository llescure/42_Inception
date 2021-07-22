#!/bin/sh

#Check if a wordpress folder exists otherwise create it by downloading wordpress file

if [ ! -d "/var/www/html/wordpress" ];
then
	wget https://wordpress.org/latest.tar.gz;
	tar -xzvf latest.tar.gz;
	rm -rf latest.tar.gz;
	rm -rf /etc/php/7.3/fpm/pool.d/www.conf;
	mv ./www.conf /etc/php/7.3/fpm/pool.d/;
	chown -R www-data: /etc/php/7.3/fpm/pool.d/www.conf;
else
	rm -rf www.conf;
fi
