<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InterfaceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Contracts\Interfaces\ProductInterface', 'App\Contracts\Repositories\ProductRepository');

        $this->app->bind('App\Contracts\Interfaces\CategoryInterface', 'App\Contracts\Repositories\CategoryRepository');
    }
}
