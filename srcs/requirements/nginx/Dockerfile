#Precise with what our image will be built
FROM debian:buster

#Install nginx with RUN
RUN apt-get update && apt-get -y install nginx \
openssl

#Copy the new configuration inside nginx
#COPY conf/nginx_config_test /etc/nginx/sites-available

#Create a symbolic link between sites-available and enabled and remove the default files
#RUN ln -s /etc/nginx/sites-available/nginx_config /etc/nginx/sites-enabled \
#&& rm -rf /etc/nginx/sites-enabled/default \
#&& rm -rf /etc/nginx/sites-available/default

#EXPOSE 443

RUN service nginx start
