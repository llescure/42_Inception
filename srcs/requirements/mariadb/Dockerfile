#Containers are built using Debian buster

FROM debian:buster

#Install necessary package

RUN apt-get update && apt-get -y install mariadb-server \
&& rm -rf /var/lib/apt/lists/*

EXPOSE 3306

#Command to launch mariadb

CMD ["mysqld"]
