<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Cart;
use Session;

class CartComposer
{
    public function compose(View $view)
    {
        if(Session('cart')) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $view->with([
                'cart' => Session::get('cart'), 
                'product_cart' => $cart->items, 
                'totalPrice' => $cart->totalPrice, 
                'totalQly' => $cart->totalQly
            ]);
        }
    }
}
