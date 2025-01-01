#!/bin/bash

# Install and build frontend assets
npm install
npm run build

# Ensure public directory exists
mkdir -p public
cp -r dist/* public/ 2>/dev/null || true 