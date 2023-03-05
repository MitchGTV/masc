# MASC 2606

Laravel Website for MASC 2606

### How to install masc for development

### Run the commands listed below in the order they are displayed.

```
composer i 

npm i

npm run dev
```
Then you want to copy the .env.example file and rename it to .env

Ensure you have a database created (for ease of access we use same name as repo) & ensure PHP version matches the one required within composer

### Set your app key

``` 
php artisan key:generate
```

### Run your migrations

``` 
php artisan migrate
```

## You should be ready to go!
