# Test Email

A simple artisan command to test yout Laravel mail configuration.

## Requirements

- PHP 5.6+
- Laravel 5.0+

## Installing

Use Composer to install it:

```
composer require filippo-toso/test-email
```

## Using It

For a small site you just need to add the following command to your crontab (once every minute).

```
php artisan test:email --to=info@example.com
```

For larger sites you may want to publish the configuration and add multiple commands to run different queues:

```
php artisan vendor:publish --provider="FilippoToso\LaravelSupervisor\SupervisorServiceProvider"
```

In the configuration file you can find useful details.
