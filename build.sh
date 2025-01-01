#!/bin/bash

# Create required directories
mkdir -p storage/framework/{sessions,views,cache}
chmod -R 777 storage
mkdir -p bootstrap/cache
chmod -R 777 bootstrap/cache
mkdir -p public/build
chmod -R 777 public

# Install frontend dependencies and build
npm install
npm run build

# Move build output if needed
if [ -d "dist" ]; then
    cp -r dist/* public/
fi 