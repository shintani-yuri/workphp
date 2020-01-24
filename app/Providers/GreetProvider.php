<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Sample\Greeting;
use App\Sample\GreetingModel;

class GreetProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Greeting::class, GreetingModel::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
