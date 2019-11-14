FROM php:7.2-cli
ADD . /usr/src/movierater
WORKDIR /usr/src/movierater
CMD [ "php", "./public/index.php" ]