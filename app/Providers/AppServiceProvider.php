<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // $globalUrl = Request::fullUrl();

        // print_r($globalUrl);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    if ($this->app->environment() !== 'production') {
        $this->app->register(\Way\Generators\GeneratorsServiceProvider::class);
        $this->app->register(\Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class);
    }
    }
}
