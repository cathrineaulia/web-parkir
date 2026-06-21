FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libxml2-dev \
    default-mysql-client nginx \
    && docker-php-ext-install \
       pdo pdo_mysql mbstring zip exif pcntl bcmath gd \
   && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY . .
RUN composer install \
    --no-dev --optimize-autoloader --no-interaction
COPY docker/nginx.conf /etc/nginx/sites-available/default
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache
EXPOSE 80
CMD ["service nginx start && php-fpm"]

