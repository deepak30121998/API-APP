$PathBase = Split-Path -Parent $PSScriptRoot

Write-Host "`nSetting up project ...`n"
Write-Host "`nClearing cache ...`n"

php artisan clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

Write-Host "`nInstalling dependencies ...`n"

# Install dependencies
composer install --no-interaction

# Create .env if not exists
if (Test-Path "$PathBase\.env") {
    Write-Host "`n.env file already exists`n"
} else {
    Write-Host "`nCreating .env file.`n"
    Copy-Item ".env.example" ".env"
}

# Run migrations
php artisan migrate --seed


echo "\nDone!\n"
