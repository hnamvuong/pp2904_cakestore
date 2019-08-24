<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
    	$slide = Slide::all();
    	$new_product = Product::where('new','1')->paginate(4);
    	$sale_product = Product::where('promotion_price', '<>', 0)->paginate(8);

    	return view('welcome', compact('slide', 'new_product', 'sale_product'));
    }

    public function getProductType() {
    	return view('producttype.product_type');
    }

    public function getProductDetail() {
    	return view('productdetail.product_detail');
    }

    public function getContact() {
    	return view('contact');
    }

    public function getAbout() {
    	return view('about');
    }
}
