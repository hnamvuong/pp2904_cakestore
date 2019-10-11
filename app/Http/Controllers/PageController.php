<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use Session;
use Illuminate\Http\Request;
use App\Contracts\Interfaces\SlideInterface;
use App\Contracts\Interfaces\ProductInterface;
use App\Contracts\Interfaces\ProductTypeInterface;
use App\Contracts\Interfaces\ProductDetailInterface;

class PageController extends Controller
{
    protected $slideRepository;

    public function __construct(SlideInterface $slideRepository, ProductInterface $productRepository, ProductTypeInterface $producttypeRepository, ProductDetailInterface $productdetailRepository )
    {
        $this->slideRepository = $slideRepository;
        $this->productRepository = $productRepository;
        $this->producttypeRepository = $producttypeRepository;
        $this->productdetailRepository = $productdetailRepository;
    }

    public function getIndex() {
    	$slide = $this->slideRepository->getAll();
        $new_product = $this->productRepository->getNewProduct()->paginate(4);
        $count_new = $this->productRepository->getNewProduct()->count();
        $sale_product = $this->productRepository->getSaleProduct()->paginate(8);
        $count_sale = $this->productRepository->getSaleProduct()->count();
        return view('welcome', compact('slide', 'new_product', 'sale_product', 'count_new', 'count_sale'));
    }

    public function getProductType($type) {
        $data = $type == 0 ? Product::all() : $this->productRepository->getProductByType($type)->get();
        $sp_khac = $this->productRepository->getProductOther($type)->paginate(3);
        $loai = $this->producttypeRepository->getAll();
        $loai_sp = $this->producttypeRepository->getProductTypeName($type);


        return view('producttype.product_type', compact('sp_khac', 'loai', 'loai_sp', 'data'));
    }

    public function getProductDetail(Request $request) {
        $sanpham = $this->productdetailRepository->getProductByID($request);
        $sp_tuongtu = $this->productdetailRepository->getProductSimilar($sanpham->id_type)->paginate(6);

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
