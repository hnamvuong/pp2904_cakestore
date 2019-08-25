<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
    	$slide = Slide::all();
    	$new_product = Product::where('new','1')->paginate(4);
    	$sale_product = Product::where('promotion_price', '<>', 0)->paginate(8);

    	return view('welcome', compact('slide', 'new_product', 'sale_product'));
    }

    public function getProductType($type) {
        $sp_theoloai = Product::where('id_type', $type)->get();
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);
        $loai = ProductType::all();
        $loai_sp = ProductType::where('id', $type)->first();

    	return view('producttype.product_type', compact('sp_theoloai', 'sp_khac', 'loai', 'loai_sp'));
    }

    public function getProductDetail(Request $request) {
        $sanpham = Product::where('id', $request->id)->first();
        $sp_tuongtu = Product::where('id_type', $sanpham->id_type)->paginate(6);

    	return view('productdetail.product_detail', compact('sanpham', 'sp_tuongtu'));
    }

    public function getContact() {
    	return view('contact');
    }

    public function getAbout() {
    	return view('about');
    }
}
