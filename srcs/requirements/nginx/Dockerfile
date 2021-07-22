#Precise with what our image will be built
FROM debian:buster

#Install nginx with RUN
RUN apt-get update && apt-get -y install nginx \
openssl \
&& rm -rf /var/lib/apt/lists/*

#Generate a self certificate
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/ssl/llescure.42.fr.pem -keyout /etc/ssl/llescure.42.fr.key -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=llescure/CN=llescure.42.fr"

#Copy the new configuration inside nginx
COPY conf/nginx.conf /etc/nginx/conf.d

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
