## Implementing global search assesment task

### Setting up project

- Setup laravel project

```php
composer create-project laravel/laravel search
```
- Install node
```
sudo apt update
sudo apt install nodejs
```
- Install Vue
```
npm install vue@next
```
- Installing Inertia
```
composer require inertiajs/inertia-laravel
```

### Run Server

- Start Xampp
```
npm run dev
php artisan serve
```

### Navigating the app

- Register and Login
- Navigate to /data

#### Migrate Database 

```
php artisan migrate:refresh --seed
```

#### Database Configuration

* Database Name - laravel