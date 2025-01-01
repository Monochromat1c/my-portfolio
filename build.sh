#!/bin/bash

# Exit on error
set -e

echo "Creating directories..."
# Create required directories
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs
mkdir -p bootstrap/cache
mkdir -p public/{build,css,js,images}

echo "Setting permissions..."
# Set proper permissions
chmod -R 777 storage
chmod -R 777 bootstrap/cache
chmod -R 777 public

echo "Installing frontend dependencies..."
# Install frontend dependencies
npm install

echo "Building frontend assets..."
# Build frontend assets
npm run build

echo "Moving build output..."
# Move build output if it exists
if [ -d "dist" ]; then
    cp -r dist/* public/
fi

echo "Build completed successfully!" 