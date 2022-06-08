FROM nginx:latest

WORKDIR /./default.conf /etc/nginx/conf.d/default.conf 
COPY /compose/hello-docker/backend /usr/local/bin/backend


