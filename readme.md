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

then publish the config 

``` sh
php artisan vendor:publish

```

### Usage
Your controller could look something like this:

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Techcyclist\Highstock\Highstock;

class HighStockController extends Controller
{
    public function modelReturnsChart($data)
    {

        $stockchart = new Highstock();

        $modelreturnschart = $stockchart->chart([
                'type'     => 'line',
                'renderTo' => 'chartDiv',
            ])
            ->rangeSelector([
                'selected'  => 1,
            ])
            ->series(
                [
                    [
                        'name'  => 'New Chart',
                        'data'  => $data,
                        'tooltip'   => [
                            'valuedecimals' => 2,
                        ],
                    ],
                ]
            )
            ->title([
                'text' => 'New Chart',
            ])

            ->display();

        return $modelreturnschart;

    }

}
```

You could return to a view with the object, or do this in a view:

```
$highstockcontroller = new \App\Http\Controllers\HighStockController();
$modelreturnschart = $highstockcontroller->modelReturnsChart($data);
```

Finally, show the chart in the view:

```
<div id="chartDiv" style="height: 400px; min-width: 310px"></div>

{!! $modelreturnschart !!}
```

And you'll get a chart looking something like this:



## License

https://mit-license.org/

