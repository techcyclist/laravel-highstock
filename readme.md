# Laravel 5 Highstock Package

[![Total Downloads](https://poser.pugx.org/techcyclist/highstock/downloads)](https://packagist.org/packages/techcyclist/highstock)
[![Latest Stable Version](https://poser.pugx.org/techcyclist/highstock/v/stable)](https://packagist.org/packages/techcyclist/highstock)

Package Highstock for Laravel 5

Forked from Laravel Highcharts (julles/laravel-highcharts) and modified for Highstock.

### Installation

Add Package to composer.json

```sh
composer require techcyclist/highstock:dev-master
```
In Laravel 5.5 the service provider will automatically get registered. In older versions of the framework just add the service provider and facade in config/app.php file:

Provider :
```sh
Techcyclist\Highstock\Provider::class,
```
Facade :
```sh
'Stock' => Techcyclist\Highstock\Facade::class,
```

then publish the config 

``` sh
php artisan vendor:publish

```

## License

https://mit-license.org/

