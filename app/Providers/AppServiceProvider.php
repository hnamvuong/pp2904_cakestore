<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductType;
use Session;
use App\Models\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.header', 'welcome'], function($view) {
            $loai_sp = ProductType::paginate(4);
            
            $view->with('loai_sp', $loai_sp);
        });

        view()->composer(['layouts.header', 'checkout.checkout'], function($view) {
            if(Session('cart')) {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQly'=>$cart->totalQly]);
            }
        });
    }
}
