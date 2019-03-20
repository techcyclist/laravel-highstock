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

### Basic Usage

In Controller or Other Class

```sh
Coming soon
```
In Blade

```sh

<div id="chart1"></div>

{!! $chart1 !!}

```
Output :

![alt tag](https://preview.ibb.co/mKrfSy/chart2.png)


the package will generate this code in yout view : 

``` sh 

<script src="//code.highcharts.com/highcharts.js"></script>
<script src="//code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript">
    Highcharts.chart( {
    title: {
        "text": "Voting ballon d`or 2018"
    }
    , subtitle: {
        "text": "This Subtitle"
    }
    , yAxis: {
        "text": "This Y Axis"
    }
    , xAxis: {
        "categories":["Messi", "CR7", "Bambang Pamungkas", "Del Piero"], "labels": {
            "rotation":15, "align":"top", "formatter":function() {
                return this.value + " (Footbal Player)"
            }
        }
    }
    , legend: {
        "layout": "vertikal", "align": "right", "verticalAlign": "middle"
    }
    , series: [ {
        "name": "Voting", "data": [43934, 52503, 57177, 69658]
    }
    ], chart: {
        "type": "line", "renderTo": "chart1"
    }
    , colors: ["#0c2959"], credits:false
}

);
</script>


```

cdn highstock.js and others js only generated one time

## License

https://mit-license.org/

