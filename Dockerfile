FROM php:8.2.-fpm-alpine

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy the application code to the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install project dependencies
RUN composer install --no-interaction --no-progress --no-suggest --optimize-autoloader
