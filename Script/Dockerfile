# PHP + Apache base image
FROM php:8.3-apache

# ------------------------------------------------------------
# 1️⃣ Install required libraries (GD, ZIP, MySQL)
# ------------------------------------------------------------
RUN apt-get update && apt-get install -y \
    libwebp-dev libxpm-dev zlib1g-dev \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev libzip-dev unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip mysqli \
    && docker-php-ext-enable gd zip mysqli

# ------------------------------------------------------------
# 2️⃣ Enable Apache modules
# ------------------------------------------------------------
RUN a2enmod rewrite

# ------------------------------------------------------------
# 3️⃣ Set Apache DocumentRoot to Sngine's /Script folder
# ------------------------------------------------------------
ENV APACHE_DOCUMENT_ROOT /var/www/html/Script

# Update Apache configuration to use the new DocumentRoot
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
 && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# ------------------------------------------------------------
# 4️⃣ Working directory (project root)
# ------------------------------------------------------------
WORKDIR /var/www/html

# ------------------------------------------------------------
# 5️⃣ Copy project files
# ------------------------------------------------------------
COPY . .

# ------------------------------------------------------------
# 6️⃣ Set server name and expose port
# ------------------------------------------------------------
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
COPY php-dev.ini /usr/local/etc/php/conf.d/php-dev.ini

EXPOSE 80

# ------------------------------------------------------------
# 7️⃣ Start Apache
# ------------------------------------------------------------
CMD ["apache2-foreground"]
