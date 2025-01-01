#!/bin/bash

echo "Running composer install..."
composer install --no-dev --optimize-autoloader

echo "Running npm install..."
npm install

echo "Running npm run build..."
npm run build

echo "Generating application key..."
php artisan key:generate

echo "Caching configuration..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Caching views..."
php artisan view:cache 