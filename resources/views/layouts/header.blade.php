<div class="py-1 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">0968134061</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">hnam.vuong@gmail.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Cake Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product Type</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        @foreach($loai_sp as $loai)
                        <a class="dropdown-item" href="{{route('producttype', $loai->id)}}">{{$loai->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('user_feedbacks.index') }}" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
            </ul>
            <div class="nav-item cta cta-colored">
                @if (Session::has('cart'))
                <div class="cart" style="border-style: none;">
                    <div class="beta-select"><i class="fa fa-shopping-cart"></i> 
                        Giỏ hàng  
                        (@if (Session::has('cart'))
                        {{Session('cart')->totalQty}} 
                        @else Trống 
                        @endif) 
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="beta-dropdown cart-body">
                        @foreach($product_cart as $product)
                        <div class="cart-item">
                            <a class="cart-item-delete" href="{{route('xoagiohang', $product['item']['id'])}}"><i class="fa fa-times"></i></a>
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
                </div>
                @else 
                <div class="cart" style="border-style: none;">
                    <div class="beta-select">
                        <i class="fa fa-shopping-cart"></i> 
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <!-- .cart -->
                @endif
            </div>
        </div>
    </div>
</nav>
