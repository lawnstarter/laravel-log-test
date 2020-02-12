# Laravel Log Test

This package offers a simple command that lets you test the logging functionality by running an artisan command. 
This is helpful for any environment where interactive commands like ```php artisan tinker``` cannot be used. 
We created this package to ensure our serverless Laravel projects (via Laravel Vapor) correctly sent errors to Rollbar.

## Using Laravel Log Test

Install the package

```
composer require lawnstarter/laravel-log-test
```

You can then try it out by running:

```
php artisan log:test
```

Laravel's auto discovery functionality should automatically enable the command for your application.

---

## Contributing
If you want ot contribute to the package, you are welcome to. Contribution guidelines are still to be determined, but the steps below should help you get started. 

### Development

To start developing, clone down the github repository and install the dependencies:

```
composer install
```

### Testing

To run the tests, clone the package, install dependencies and run:

```
./vendor/bin/phpunit
```

