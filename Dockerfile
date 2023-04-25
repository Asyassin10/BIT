FROM php:8.2.0-apache

RUN apt-get update && \
    apt-get install -y libzip-dev unzip && \
    docker-php-ext-install zip pdo pdo_mysql && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf && \
    sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

COPY . .

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer


RUN composer install --no-interaction --prefer-dist --no-dev && \
    cp .env.example .env && \
    php artisan key:generate && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html/storage

CMD ["apache2-foreground"]
