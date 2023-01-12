# 42_Inception

# What is it? #

Use docker-compose to create a LEMP stack (L for Linux, E for Nginx, M for Mariadb and P for PHP) with wordpress.

# How to set up your environment in your vm? #

### Edit /etc/hosts to add your server name to the list of host accepted ###

127.0.0.1 login.42.fr

### Create a new user named after your login and assign it to the different groups ###

`sudo adduser login`

`sudo usermod -aG sudo login`

`sudo usermod -aG docker login`

`sudo usermod -aG vboxsf login (if you use shared folders on your vm)`

### Get the latest version of docker-compose to be able to use docker-compose with a makefile ###

* Delete previous version

`sudo apt-get remove docker-compose`

`sudo rm -f /usr/local/bin/docker-compose`

* Install newest version

`sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-Darwin-x86_64" -o /usr/local/bin/docker-compose
(version 29.2 at the time of this readme)`

`sudo chmod +x /usr/local/bin/docker-compose`

### Stop the nginx and mysql service which are set by default on 42 vm ###

`sudo service nginx stop`

`sudo service mysql stop`

### If you get the following error message : Docker compose up : error while fetching server API version ###

`sudo gpasswd -a $USER docker`

`newgrp docker`

# How to build your docker-compose.yml? #

Use official images to begin and see how each service can communicate with each other

* Understanding environment variables

https://betterprogramming.pub/using-variables-in-docker-compose-265a604c2006

* Understanding network

https://medium.com/edureka/docker-networking-1a7d65e89013
https://faun.pub/docker-networks-part-1-of-2-15a986a48d0a

# How to build your own Dockerfile? #

### Nginx ###

You need to edit a file and move it to /etc/nginx/conf.d/

You can use a script or no but you need to launch the service using the command nginx -g daemon off

Make sure that you don't enable connexion on port 80:80. :warning::warning:**Connexion with http must not be allowed**:warning::warning:

* Understanding location block

https://www.digitalocean.com/community/tutorials/understanding-nginx-server-and-location-block-selection-algorithms

* Understanding the implementation of fastcgi

https://www.digitalocean.com/community/tutorials/understanding-and-implementing-fastcgi-proxying-in-nginx

* Example of configuration

https://www.digitalocean.com/community/tools/nginx?domains.0.php.wordPressRules=true&global.app.lang=fr

### Wordpress and php ###
You need to edit www.conf and place it to /etc/php/7.3(the usual version of php on 42 vm)/fpm/pool.d and wp-content.php to disable access wordpress installation page when you access your site at https://login.42.fr

You can launch the service with /usr/sbin/php-fpm7.3 (or another version if you don't use 42 vm) -F

### Mariadb ###
Once you have successfully enable the connexion with wordpress and can launch the installation via the installation page you can create your 2 users (admin will be the first user you enter via the installation page
and the second will be created via the dashbord and have the role of editor for example). You can add articles, change the color of the background, ... etc

You can then import it via a file.sql : https://www.interserver.net/tips/kb/import-export-databases-mysql-command-line/

You can launch the service with mysqld

* Setting up mariadb

https://www.digitalocean.com/community/tutorials/comment-installer-mysql-sur-ubuntu-18-04-fr

* Understand how to let mariadb communicate with the outside world and be able to communicate with wordpress

https://www.digitalocean.com/community/tutorials/how-to-allow-remote-access-to-mysql

**Overall tutorial well explained:**

- https://tech.osteel.me/posts/docker-for-local-web-development-part-1-a-basic-lemp-stack
- https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-docker-compose
- https://medium.com/rate-engineering/using-docker-containers-to-run-a-distributed-application-locally-eeabd360bca3

# How to connect to mysql remotely? #

* To connect to mysql remotely and force root to enter a password you can type in your VM shell :

`mysql -h 127.0.0.1 -u root (the connexion will be refused)`

`mysql -h 127.0.0.1 -u root -p (you will need to enter your password)`

* To connect to mysql remotely using your database user:

`mysql -h 127.0.0.1 -u llescure -p (you will need to enter your password)`

* To show that the database is not empty:

`show databases;`

`use wordpress (name of your dabatabse);`

`show tables;`

* Why 127.0.0.1 ?

Because you set your server on 127.0.0.1 on /etc/hosts if your remember correctly 

# How to answer correctly to the questions for the evaluation? #

https://www.educative.io/blog/docker-compose-tutorial

https://cloud.google.com/architecture/best-practices-for-building-containers

Overall the documentation provided by digital ocean is well documented and available in french
