<?php

namespace edgewizz\marew;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MarewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Marew\Controllers\MarewController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'marew');
        Blade::component('marew::marew.open', 'marew.open');
        Blade::component('marew::marew.index', 'marew.index');
        Blade::component('marew::marew.edit', 'marew.edit');
    }
}
