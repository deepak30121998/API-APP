#!/bin/bash
#chmod +x scripts/reset.sh
echo "\nResetting project ...\n"
echo "\nClearing cache ...\n"

php artisan clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "\nResetting migrations ...\n"
php artisan migrate:fresh

echo "\nSeeding database ...\n"
php artisan db:seed


echo "\nDone!\n"
