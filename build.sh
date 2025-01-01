#!/bin/bash

# Install dependencies
composer install --no-dev --optimize-autoloader
npm install

# Create required directories
mkdir -p storage/framework/{sessions,views,cache}
chmod -R 777 storage
mkdir -p bootstrap/cache
chmod -R 777 bootstrap/cache
mkdir -p public/build
chmod -R 777 public

# Build frontend assets
npm run build

# Move build output to public directory
if [ -d "dist" ]; then
    cp -r dist/* public/
fi

# Laravel caching
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link 