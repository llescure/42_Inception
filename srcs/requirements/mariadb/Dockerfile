#Containers are built using Debian buster

FROM debian:buster

#Install necessary package

RUN apt-get update && apt-get -y install mariadb-server \
&& rm -rf /var/lib/apt/lists/*

EXPOSE 3306

COPY conf/my_50_server_cnf /etc/mysql/mariadb.conf.d/
RUN rm -rf 50-server-cnf \
&& chown -R www-data: /etc/mysql/mariadb.conf.d/my_50_server_cnf

#Command to launch mariadb

CMD ["mysqld"]
