# Laravel Cloudflare Timezone

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alignwebs/laravel-cloudflare-timezone.svg?style=flat-square)](https://packagist.org/packages/alignwebs/laravel-cloudflare-timezone)
[![Build Status](https://img.shields.io/travis/alignwebs/laravel-cloudflare-timezone/master.svg?style=flat-square)](https://travis-ci.org/alignwebs/laravel-cloudflare-timezone)
[![Quality Score](https://img.shields.io/scrutinizer/g/alignwebs/laravel-cloudflare-timezone.svg?style=flat-square)](https://scrutinizer-ci.com/g/alignwebs/laravel-cloudflare-timezone)
[![Total Downloads](https://img.shields.io/packagist/dt/alignwebs/laravel-cloudflare-timezone.svg?style=flat-square)](https://packagist.org/packages/alignwebs/laravel-cloudflare-timezone)

This laravel package helps you to set your app's timezone in runtime according to Header "CF-IPCountry" value of CloudFlare.

## Prerequisite - Cloudflare Setting

Enable "IP Geolocation" from Network tab.

## Installation

You can install the package via composer:

```bash
composer require alignwebs/laravel-cloudflare-timezone
```

## Usage

``` php
php artisan vendor:publish --provider="Alignwebs\LaravelCloudflareTimezone\LaravelCloudflareTimezoneServiceProvider" --tag=config
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email alignwebs@gmail.com instead of using the issue tracker.

## Credits

- [Gulzar Ahmed](https://github.com/alignwebs)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
