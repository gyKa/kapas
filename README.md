# kapas

A web-based tool for bookmarks management.

## Requirements

* PHP >= 7.0.0
* database

## Production setup

There are few variables must be set at web server level:

* `APP_KEY` - get a key by running a command `php artisan key:generate`
* `DB_CONNECTION`
* `DB_HOST`
* `DB_PORT`
* `DB_DATABASE`
* `DB_USERNAME`
* `DB_PASSWORD`
