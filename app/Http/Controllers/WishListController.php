<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;
use Illuminate\Support\Facades\Auth;
use DB;

class WishListController extends Controller
{
	public function wishlist(Request $request) {
    	$wishlist = WishList::whereUserId(Auth::user()->id)->paginate(20);
        return view('wishlist.wishlist', compact('wishlist'));
        // dd($request->product_id);
        // $wishlist = new WishList;
        // $wishlist->user_id =  Auth::user()->id;
        // $wishlist->product_id = $request->product_id;

        // $wishlist->save();

        // $productlist = DB::table('products')->where('id', $request->product_id)->get();
        
        // return view('wishlist.wishlist', compact('productlist'));
    }

    public function addProduct($product_id)
    {
        $wishlist = new WishList;
        $wishlist->user_id =  Auth::user()->id;
        $wishlist->product_id = $product_id;

        $wishlist->save();

        $productlist = DB::table('products')->where('id', $product_id)->get();
        
        return view('wishlist.wishlist', compact('productlist'));
    }
}

