#!/bin/sh
set -e

echo "Deploying application ..."

# Enter maintenance mode
(/usr/local/bin/ea-php81 artisan down) || true
    # Update codebase
    git fetch origin master
    git reset --hard origin/master

    # Install dependencies based on lock file
    /usr/local/bin/ea-php81 ~/composer.phar install --no-interaction --prefer-dist --optimize-autoloader

    # Migrate database
    /usr/local/bin/ea-php81 artisan migrate --force

    # Note: If you're using queue workers, this is the place to restart them.
    # ...

    # Clear cache
    /usr/local/bin/ea-php81 artisan optimize

    # Reload PHP to update opcache
    # echo "" | sudo -S service php8.1-fpm reload
# Exit maintenance mode
/usr/local/bin/ea-php81 artisan up

echo "Application deployed!"
