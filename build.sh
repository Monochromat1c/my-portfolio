#!/bin/bash

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Create storage directory structure
mkdir -p storage/framework/{sessions,views,cache}
chmod -R 777 storage
mkdir -p bootstrap/cache
chmod -R 777 bootstrap/cache

# Install and build frontend assets
npm ci
npm run build

# Ensure public directory exists with proper permissions
mkdir -p public/build
chmod -R 777 public

# Laravel caching
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link 