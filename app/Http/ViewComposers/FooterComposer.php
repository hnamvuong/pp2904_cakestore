<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\ProductType;

class FooterComposer
{
    public $product_types= [];

    public function __construct()
    {
        $this->product_types = ProductType::withTrashed()->get();
    }
    
    public function compose(View $view)
    {
        $view->with('product_types', $this->product_types);
    }
}
