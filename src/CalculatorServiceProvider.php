<?php

namespace Anran31\Greeting;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // initiate class and binding class into service container.
        $this->app->bind('calculator', function ($app) {
            return new Calculator();
        });
    }

    public function boot()
    {
        // called after all services are registered.
    }
}
