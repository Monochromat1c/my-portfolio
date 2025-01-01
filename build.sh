#!/bin/bash

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Install NPM dependencies and build assets
npm install
npm run build

# Create required directories
mkdir -p /tmp/storage/framework/{sessions,views,cache}
chmod -R 777 /tmp/storage

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache 