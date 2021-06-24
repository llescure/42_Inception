#Precise with what our image will be built
FROM debian:buster

#Install nginx with RUN
RUN apt-get update && apt-get -y install nginx \
openssl \
&& rm -rf /var/lib/apt/lists/*

#Generate a self certificate
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/ssl/llescure.42.fr.pem -keyout /etc/ssl/llescure.42.fr.key -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=llescure/CN=llescure.42.fr"

#Copy the new configuration inside nginx
COPY conf/nginx_config /etc/nginx/sites-available

#Create a symbolic link between sites-available and enabled and remove the default files
RUN ln -s /etc/nginx/sites-available/nginx_config /etc/nginx/sites-enabled \
&& rm -rf /etc/nginx/sites-enabled/default \
&& rm -rf /etc/nginx/sites-available/default

COPY conf/index.html /var/www/html
RUN rm -rf /var/www/html/index.nginx-debian.html \
&& chown -R www-data: /var/www/html

EXPOSE 443

#ENTRYPOINT ["nginx", "-g", "daemon off;"]
