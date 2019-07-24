<?php

declare(strict_types=1);

namespace Tests;

use EventSauce\LaravelEventSauce\EventSauceServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [EventSauceServiceProvider::class];
    }
}
