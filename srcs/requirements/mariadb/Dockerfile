#Containers are built using Debian buster

FROM debian:buster

#Install necessary package

RUN apt-get update && apt-get -y install mariadb-server \
&& rm -rf /var/lib/apt/lists/*

EXPOSE 3306

COPY ./tools/create_db.sh /usr/local/bin/
RUN sh /usr/local/bin/create_db.sh 

#Command to launch mariadb

CMD ["mysqld"]
