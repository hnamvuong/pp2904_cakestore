<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer(
            [
                'layouts.footer', 
                'layouts.header', 
                'admin.products.create',
                'admin.products.edit'
            ], 
            'App\Http\ViewComposers\FooterComposer'
        );
        
        view::composer(
            ['layouts.header', 'checkout.checkout'],
            'App\Http\ViewComposers\CartComposer'
        );     

        view::composer(
            'admin.products.edit',
            'App\Http\ViewComposers\NewProductComposer'
        );      
    }
}
