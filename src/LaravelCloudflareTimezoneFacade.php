<?php

namespace Alignwebs\LaravelCloudflareTimezone;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alignwebs\LaravelCloudflareTimezone\Skeleton\SkeletonClass
 */
class LaravelCloudflareTimezoneFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-cloudflare-timezone';
    }
}
