<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use Session;
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

    public function getAddtoCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function getDelItemCart($id) {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0) {
            Session::put('cart', $cart);
        }
        else {
            Session::forget('cart');
        }

        return redirect()->back();
    }

    public function getCheckout() {
        return view('checkout.checkout');
    }

    public function postCheckout(Request $request) {
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->note = $request->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_oder = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $request->payment_method;
        $bill->note = $request->notes;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = ($value['price']/$value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao', 'Đặt hàng thành công');
    }

    public function getSearch(Request $request){
        $product = Product::where('name', 'like', '%'.$request->key.'%')->orWhere('unit_price', $request->key)->get();

        return view('search.search', compact('product'));
    }
}
