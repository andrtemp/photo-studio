Requirements:

- apache (XAMP)
- mysql


Install:

- clone this repo
- move to apache root folder
- run `cp .env/example .env`
- set in `.env` mysql credentials
- run `composer update`
- run `php artisan key:generate`
- run `php artisan migrate`
- open `http://localhost`