FROM php:8.3-cli

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /app
COPY . .

RUN apt-get update && apt-get install -y unzip git
RUN curl -sS https://getcomposer.org/installer | php
RUN php composer.phar install

CMD php artisan serve --host=0.0.0.0 --port=$PORT