FROM php:8.2-apache

# Setup the environment variables
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV APP_ENV=prod

# Install the required packages
RUN apt-get update && apt-get install -y \
    git zip unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

# Set the working directory
WORKDIR /var/www/html

# Copy the rest of the files
COPY . .

# Install dependencies
RUN composer install

# Expose the port
EXPOSE 8000
