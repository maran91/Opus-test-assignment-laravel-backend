# Laravel backend

## Setup

Run composer install.
Next copy the .env.example file to .env. Next ./vendor/bin/sail artisan key:generate. Next run ./vendor/bin/sail up.

## API routes

**Importing wordbase**

get /api/import

**Get anagrams**

get /api/word/{word}

**Sign up a new user**

post /signup

**Login**

post /login

**Logout**

post /logout
