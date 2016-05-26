Sempro intervju oppgave
===================

Dette prosjektet er laget som en klone av **[getv.no](http://www.getv.no)** basert på oppgaven gitt på intervju.

Her er en gjennomgang av installasjon og til sist noen tanker rundt koden.

----------


Installasjon
-------------

Systemet kjører på Laravel 5.2 ([se her for installasjon og systemkrav](https://laravel.com/docs/5.2) ) med følgende tillegg.

> **Tillegg:**  
> - **SQLite** for søkemotorfunksjonalitet (krever php5-sqlite/php7.0-sqlite3)  
> - **Composer** brukes for installasjon av ekstra pakker til systemet. Påse at Composer er installert enten globalt eller lokalt i mappen. Se [getcomposer.org](http://www.getcomposer.org) for installasjon og oppsett. Dersom du kjører Composer lokalt skal du skrive `php composer.phar` istedet for `composer` slik denne veiledningen viser.


#### <i class="icon-hdd"></i> Hente koden

Koden hentes fra GitHub-repository [egerstudio/sempro-eger](https://github.com/egerstudio/sempro-eger).

#### <i class="icon-file"></i> Forberedelse til installasjon

Systemet krever en database med UTF-8 enkoding.

Døp om filen .env.example til .env og fyll inn følgende info:

 1. `APP_URL` = lokalt domenenavn (eksempelvis `'localhost'` eller `'sempro.dev'`)
 2. `DB_DATABASE` = databasenavn
 3. `DB_USERNAME` = brukernavn med tilgang til databasen
 4. `DB_PASSWORD` = passord
 5. `MAILGUN_DOMAIN` = gyldig domene på mailgun (bruk gjerne sandbox)
 6. `MAILGUN_SECRET` = api-nøkkel fra mailgun

#### <i class="icon-pencil"></i> Konfigurasjon av virtuell tjener / tjener

På Apache/Nginx skal `document root` i virtuell-host eller host konfigurasjon settes til `public` mappen. Sett også `Allow override all` direktivet i Apache-konfig for at systemet skal fungere.

#### <i class="icon-cog"></i> Få systemet opp og gå

1. Kjør `composer install`. Composer vil laste ned en drøss med ekstra pakker og generere autoload-filer, dette tar litt tid.
2. Kjør `php artisan key:generate` som genererer en lokal nøkkel til sessions i systemet.
3. Sett opp databasen ved å kjøre `php artisan migrate`. Tabeller blir klargjort.
4. Fyll databasen ved å kjøre `php artisan db:seed`.
5. Kjør indeksering på databasen for å gjøre klar søkemotoren `php artisan videos:index`. Dersom du får feilmelding her, sjekk punktet [Rettigheter](#rettigheter) nedenfor.

Hvis du vil kjøre systemet uten voldsomme feilmeldinger (dersom de oppstår), endrer du `.env`filens `APP_ENV` til `production`og `APP_DEBUG` settes til `false`.

Systemet skal nå være klart til å kjøres.

#### Rettigheter
Dersom du får hvit skjerm eller en 500-feilmelding første gang du kjører systemet, er det sannsynligvis feil rettigheter på `boostrap/cache`og `storage` mappene.  

Kjør følgende kommando på *nix systemer for å fikse dette, fra prosjektets rotmappe.  

`sudo chgrp -R www-data storage bootstrap/cache` (www-data er lokal brukergruppe, tilpass om nødvendig)  
`sudo chmod -R ug+rwx storage bootstrap/cache`.  

Systemet skal nå fungere.

#### <i class="icon-search"></i> Om søkemotoren

Søkemotoren i systemet bruker en SQLite database som krever skrive- og lesetilgang. Denne filen ligger ferdig indeksert (baser på database-seed filene) i mappen `storage`. 

Avhengig av konfigurasjon vil du kanskje måtte endre filrettighetene for at søkemotoren skal kunne skrive til filen. Filen oppdateres hver gang en video legges til, slettes eller endres i systemet.

## Admin bruker
For å kunne bruke systemet fullt ut må du opprette en admin-bruker. Du kan enten bruke systemets standardbruker eller lage din egen bruker.  

Logg inn med **admin@localhost** og passord **admin**.  

For å bruke funksjonaliteten for glemt passord må du opprette en egen bruker, og det gjør du ved å gå til **http://localhost/register** og fylle inn feltene der. Etter at du har gjort det blir du automatisk logget inn med din nye bruker.

I admin-delen av prosjektet kan du legge til, endre og fjerne videoer og kategorier disse er sortert i.

Systemet tar høyde for blant annet at du ikke kan slette alle kategorier i systemet, at dersom du ønsker å slette en kategori som har videoer i seg, må du først flytte disse videoene over i en annen kategori.




----------