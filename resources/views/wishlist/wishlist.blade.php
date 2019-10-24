@extends('master')
@section('title', 'Sản phẩm đã thích')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('source/image/slide/banner2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="index.html">Checkout</a></span>
                <h1 class="mb-0 bread">Checkout</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>Product List</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                            	@foreach($productlist as $productlists)
                                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                <td class="image-prod">
                                    <div class="img" style="background-image:url(source/image/product/{{$productlists->image}});"></div>
                                </td>

                                <td class="price">{{$productlists->id}}</td>

                                <td class="product-name">
                                    <h3>{{$productlists->name}}</h3>
                                    <p>{{$productlists->description}}</p>
                                </td>

                                <td class="total">{{$productlists->unit_price}}</td>
                                @endforeach
                            </tr>
                            <!-- END TR-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection