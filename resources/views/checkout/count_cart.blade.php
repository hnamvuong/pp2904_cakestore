<i class="fa fa-shopping-cart"></i> 
Giỏ hàng  
(@if (Session::has('cart'))
{{Session('cart')->totalQty}} 
@else 0 
@endif) 
<i class="fa fa-chevron-down"></i>
