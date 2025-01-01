#!/bin/bash

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Create storage directory structure
mkdir -p storage/framework/{sessions,views,cache}
chmod -R 777 storage

# Install and build frontend assets
npm install
npm run build

# Laravel caching
php artisan config:cache
php artisan route:cache
php artisan view:cache 