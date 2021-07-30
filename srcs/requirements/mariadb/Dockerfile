#Containers are built using Debian buster

FROM debian:buster

#Install necessary package

RUN apt-get update && apt-get -y install mariadb-server mariadb-client \
&& rm -rf /var/lib/apt/lists/*

EXPOSE 3306

COPY ./tools/create_db.sh /usr/local/bin/
ENTRYPOINT ["create_db.sh"]

#Command to launch mariadb and enable the database to listen globally

CMD ["mysqld_safe", "--bind-address=0.0.0.0", "--user=llescure"]
