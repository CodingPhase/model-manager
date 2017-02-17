# Seeder
Model Manager for Laravel Applications

## Installation

### Step 1: Install Through Composer

```
composer require codingphase/model-manager
```

### Step 2: Register Service Provider
Add your new provider to the `providers` array of `config/app.php`:
```php
  'providers' => [
      // ...
      CodingPhase\ModelManager\ModelManagerServiceProvider::class,
      // ...
  ],
```
Publish config
```php
php artisan vendor:publish  --provider="CodingPhase\ModelManager\ModelManagerServiceProvider"
```
## Usage



