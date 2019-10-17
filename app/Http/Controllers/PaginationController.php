<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PaginationController extends Controller
{
    function fetch_data(Request $request) 
    {
        if($request->ajax())
        {
            $new_product = Product::where('new', '1')->paginate(4);

            return view('layouts.pagination_new_product', compact('new_product'))->render();
        }
    }

    function fetch_data_sale_product(Request $request) 
    {
        if($request->ajax())
        {
            $sale_product = Product::where('promotion_price', '<>', 0)->paginate(8);

            return view('layouts.pagination_sale_product', compact('sale_product'))->render();
        }
    }
}
