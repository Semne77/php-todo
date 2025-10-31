# Dockerfile (root)
FROM php:8.2-apache

# Enable PDO_PGSQL
RUN apt-get update && \
    apt-get install -y libpq-dev git unzip && \
    docker-php-ext-install pdo pdo_pgsql && \
    rm -rf /var/lib/apt/lists/*

# Copy web app
COPY web/ /var/www/html/

# Ensure Apache serves index.php
WORKDIR /var/www/html
EXPOSE 80
