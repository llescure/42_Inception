#!/bin/sh

#Check if a wordpress folder exists otherwise create it by downloading wordpress file

if [ -d "/var/www/html/wordpress" ]
then
	rm -rf www.conf
	echo "wordpress already downloaded"
else
	#Download wordpress
	wget https://wordpress.org/latest.tar.gz
	tar -xzvf latest.tar.gz
	rm -rf latest.tar.gz

	#Update configuration file
	rm -rf /etc/php/7.3/fpm/pool.d/www.conf
	mv ./www.conf /etc/php/7.3/fpm/pool.d/
	chown -R www-data: /etc/php/7.3/fpm/pool.d/www.conf

	sed -i "s/username_here/$MYSQL_USER/g" /var/www/html/wordpress/wp-config-sample.php
	sed -i "s/password_here/$MYSQL_PASSWORD/g" /var/www/html/wordpress/wp-config-sample.php
	sed -i "s/localhost/$MYSQL_HOSTNAME/g" /var/www/html/wordpress/wp-config-sample.php
	sed -i "s/database_name_here/$MYSQL_DATABASE/g" /var/www/html/wordpress/wp-config-sample.php
	cd /var/www/html/wordpress
	mv wp-config-sample.php wp-config.php
fi
