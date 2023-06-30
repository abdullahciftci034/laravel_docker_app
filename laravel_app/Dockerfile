FROM ubuntu:latest
RUN apt-get update
RUN apt-get upgrade -yq
ENV TZ=Europe/Istanbul
RUN apt-get install -yq tzdata
RUN apt-get install -yq php composer 
RUN apt-get install -yq libzip-dev 
RUN apt-get install -yq zip 
RUN apt-get install -yq php-mysql 
RUN apt-get install -yq unzip  
RUN apt-get install -yq curl 
RUN apt-get install -yq php-cli  
RUN apt-get install -yq php-mbstring 
RUN apt-get install -yq php-xml 
RUN apt-get install -yq php-curl
WORKDIR /home/laravel_app
CMD composer install && php artisan serve --host=0.0.0.0 --port=80