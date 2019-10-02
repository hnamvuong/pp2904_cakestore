<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class NewProductComposer
{
    private $new_product = [];

    public function __construct()
    {
        $this->new_product = ['Old', 'New'];
    }
    
    public function compose(View $view)
    {
        $view->with('new_product', $this->new_product);
    }
}
