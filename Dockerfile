# Base image PHP
FROM php:8.2-fpm-alpine

# Set working directory
WORKDIR /var/www/html

# Install dependencies yang dibutuhkan Laravel
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql gd zip

# Copy file composer
COPY composer.json composer.lock ./
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy file aplikasi
COPY . .

# Install dependensi composer & generate autoload
RUN composer install --no-dev --optimize-autoloader

# Build aset frontend
COPY --from=node:18-alpine /usr/local/bin/node /usr/local/bin/
COPY --from=node:18-alpine /opt/ /opt/
RUN ln -s /usr/local/bin/node /usr/bin/node && \
    ln -s /opt/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm
RUN npm install && npm run build

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port
EXPOSE 8000

# Jalankan aplikasi
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]