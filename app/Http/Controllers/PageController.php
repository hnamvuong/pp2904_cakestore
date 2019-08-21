<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
    	return view('welcome');
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
