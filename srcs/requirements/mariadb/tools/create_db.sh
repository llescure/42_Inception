#!/bin/sh

service mysql start

#Check if the database exists

result=$(mysql -s -N -e "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME='wordpress'")
if [ -z "$result" ]
then 

# Otherwise create the database

mysql -uroot -proot <<EOF
CREATE DATABASE wordpress;
GRANT ALL PRIVILEGES ON wordpress.* TO 'llescure'@'%' IDENTIFIED BY 'new1234';
FLUSH PRIVILEGES;
EXIT
EOF
else
	echo "Database already exists"
fi

service mysql stop
