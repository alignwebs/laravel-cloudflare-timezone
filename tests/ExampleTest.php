<?php

namespace Alignwebs\LaravelCloudflareTimezone\Tests;

use Orchestra\Testbench\TestCase;
use Alignwebs\LaravelCloudflareTimezone\LaravelCloudflareTimezoneServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelCloudflareTimezoneServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
