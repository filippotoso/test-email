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

Just execute the following command and you'll receive an email to the "from" address defined in config/mail.php.

```
php artisan test:email
```

You can also specify another destination using the "to" parameter:

```
php artisan test:email --to=support@filippotoso.com
```
