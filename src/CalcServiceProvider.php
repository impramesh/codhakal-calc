<?php

namespace Codhakal\Calc;

use Illuminate\Support\ServiceProvider;

class CalcServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'calc');

        $this->publishes([
            __DIR__ . '/database/migrations' => base_path('/database/migrations'),
            __DIR__ . '/config/calc.php' => base_path('/config/calc.php'),
            __DIR__ . '/views/calc' => base_path('/resources/views/calc'),
        ]);
    }

    public function register()
    {
    }
}
