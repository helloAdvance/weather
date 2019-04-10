<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2019/4/10 13:50
 */

namespace Tom\Weather;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function () {
            return new  Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}