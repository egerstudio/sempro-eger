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

# Application key
- php artisan key:generate

1. composer install
2. artisan migrate
3. artisan db:seed --class=VideoTableSeeder
4. artisan db:seed --class=CategoryTableSeeder

## Tanker om koden

Tekst

## License
[MIT license](http://opensource.org/licenses/MIT).
