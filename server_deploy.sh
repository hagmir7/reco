#!/bin/sh
set -e

echo "Deploying application ..."

# Enter maintenance mode
(php81 artisan down --message 'The app is being (quickly!) updated. Please try again in a minute.') || true
    # Update codebase
    git fetch origin deploy
    git reset --hard origin/deploy

    # Install dependencies based on lock file
    php81 ~/composer.phar install --no-interaction --prefer-dist --optimize-autoloader

    # Migrate database
    php81 artisan migrate --force

    # Note: If you're using queue workers, this is the place to restart them.
    # ...

    # Clear cache
    php81 artisan optimize

    # Reload PHP to update opcache
    # echo "" | sudo -S service php8.1-fpm reload
# Exit maintenance mode
php81 artisan up

echo "Application deployed!"
