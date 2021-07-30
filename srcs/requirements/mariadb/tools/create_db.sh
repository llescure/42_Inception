#!/bin/sh

mysql_install_db

/etc/init.d/mysql start

#Check if the database exists


if [ -d "/var/lib/mysql/$MYSQL_DATABASE" ]
then 

	echo "Database already exists"
else
# Create the database
	mysql_secure_installation <<_EOF_

Y
n
Y
Y
Y
Y
_EOF_

	echo "UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE user = 'root' AND host = 'localhost'; FLUSH PRIVILEGES;" | mysql -u root
	echo "CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE; GRANT ALL ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD'; FLUSH PRIVILEGES;" | mysql -u root

fi

/etc/init.d/mysql stop

exec "$@"
