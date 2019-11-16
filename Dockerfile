FROM php:7.3-cli
ADD . /usr/src/movierater
#RUN sudo apt-get update && sudo apt-get install -y zip
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

WORKDIR /usr/src/movierater

RUN composer install

CMD [ "php", "./public/index.php" ]