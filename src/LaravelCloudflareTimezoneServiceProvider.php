<?php

namespace Alignwebs\LaravelCloudflareTimezone;

use Illuminate\Support\ServiceProvider;
use PragmaRX\Countries\Package\Countries;

class LaravelCloudflareTimezoneServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-cloudflare-timezone.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-cloudflare-timezone');

        if (!config('laravel-cloudflare-timezone.enabled'))
            return false;

        if (!isset($_SERVER['HTTP_CF_IPCOUNTRY']) && empty($_SERVER['HTTP_CF_IPCOUNTRY']))
            return false;

        $country_code = $_SERVER['HTTP_CF_IPCOUNTRY'];

        $countries = new Countries();
        $country = $countries->where('cca2', $country_code)->first();

        if (!$country->count())
            return false;

        $timezone = $country->hydrate('timezones')->timezones->first()->zone_name;

        config(['app.timezone' => $timezone]);
        date_default_timezone_set($timezone);
    }
}
