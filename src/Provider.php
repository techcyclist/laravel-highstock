<?php

namespace Techcyclist\Highstock;

use Illuminate\Support\ServiceProvider;

class Provider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/highstock.php' => config_path('highstock.php'),
        ], 'highstock_config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/highstock.php', 'highstock'
        );

        $this->app->bind('register-highstock', function () {
            return new Highstock();
        });
    }
}
