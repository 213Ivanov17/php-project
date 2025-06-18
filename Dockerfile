# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy your PHP application into the container
COPY . /var/www/html/

# Enable Apache mod_rewrite (optional, useful for frameworks like Laravel or Symfony)
RUN a2enmod rewrite

# Set recommended permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80
