#!/bin/bash

# Run React Front-end
gnome-terminal -- npm run watch

# Run Server
# Use this to open in a separate window
#gnome-terminal -- php artisan serve
php artisan serve
