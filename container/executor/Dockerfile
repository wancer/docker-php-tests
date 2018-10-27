FROM php:7.0-cli-alpine

RUN apk add --no-cache curl
RUN curl --silent --show-error https://getcomposer.org/installer | php
RUN mv composer.phar /usr/bin/composer && chmod a+x /usr/bin/composer
WORKDIR /home/app

CMD composer install && composer run-script run
