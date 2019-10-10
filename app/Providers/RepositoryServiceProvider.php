<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
                    'App\Contracts\Interfaces\SlideInterface',
                    'App\Contracts\Repositories\SlideRepository'
                );
        $this->app->bind(
                    'App\Contracts\Interfaces\ProductInterface',
                    'App\Contracts\Repositories\ProductRepository'
        );
        $this->app->bind(
                    'App\Contracts\Interfaces\ProductTypeInterface',
                    'App\Contracts\Repositories\ProductTypeRepository'
        );
        $this->app->bind(
                    'App\Contracts\Interfaces\ProductDetailInterface',
                    'App\Contracts\Repositories\ProductDetailRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
