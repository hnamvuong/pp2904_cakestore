@if (Session::has('cart'))
@foreach($product_cart as $product)
<div class="cart-item">
    <a class="cart-item-delete" href="{{route('xoagiohang', $product['item']['id'])}}" id="delete_cart"><i class="fa fa-times"></i></a>
    <div class="media">
        <a class="pull-left" href="#"><img src="source/image/product/{{$product['item']['image']}}" alt=""></a>
        <div class="media-body">
            <span class="cart-item-title">{{$product['item']['name']}}</span>
            <span class="cart-item-amount">{{$product['qty']}}*<span>@if($product['item']['promotion_price'] == 0){{number_format($product['item']['unit_price'])}} @else {{number_format($product['item']['promotion_price'])}}@endif</span></span>
        </div>
    </div>
</div>
@endforeach

<div class="cart-caption">
    Tổng tiền: <span class="cart-total-value">{{number_format(Session('cart')->totalPrice)}} đ</span>
    <div class="clearfix"></div>

    <div class="center">
        <div class="space10">&nbsp;</div>
        <a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
    </div>
</div>
</div>
@endif
