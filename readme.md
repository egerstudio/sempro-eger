## Sempro oppgave til intervju

Tekst

## Installasjon

#Database
Opprett en database med lokal tilgang UTF-8

#.env
Døp om filen .env.example til '.env' og fyll ut
Sett variabler for følgende:
1. APP_URL
2. DB_DATABASE 
3. DB_USERNAME
4. DB_PASSWORD
5. MAILGUN_DOMAIN bla bla
6. MAILGUN_SECRET api key


Apache2 document root should be set to public folder

sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache

for search to work, sqlite for apache/php
includes file that is indexed for seed

1. composer install
# Application key
- php artisan key:generate
2. artisan migrate
3. artisan db:seed --class=VideoTableSeeder
4. artisan db:seed --class=CategoryTableSeeder

Sett .env 
APP_ENV=production
APP_DEBUG=true to avoid nasty errors

## Tanker om koden

Tekst

## License
[MIT license](http://opensource.org/licenses/MIT).
