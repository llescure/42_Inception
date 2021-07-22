#!/bin/sh

service mysql start

result=$(mysql -s -N -e "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME='wordpress'")
if [ -z "$result" ]
then 
mysql -uroot -proot <<EOF
CREATE DATABASE wordpress;
CREATE USER 'llescure' IDENTIFIED BY 'new1234';
GRANT ALL PRIVILEGES ON wordpress.* TO 'llescure'@'mariadb' IDENTIFIED BY 'new1234';
FLUSH PRIVILEGES;
EOF
else
	echo "Database already exists"
fi
