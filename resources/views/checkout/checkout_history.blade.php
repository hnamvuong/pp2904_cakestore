@extends('master')
@section('title', 'Lịch sử đặt hàng')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('source/image/slide/banner2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Bill</span></p>
                <h1 class="mb-0 bread">My Bill</h1>
            </div>
        </div>
    </div>
</div>
<section class="content-header breadcrumb">
    <h3 style="color: green; width: 100%">
        <i class="fas fa-wallet"></i>
        My bills
    </h3>
<div class="container">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                <table class="table">
                    <thead class="thead-primary">
                        <tr class="text-center">
                            <th>Mã đơn hàng</th>
                            <th>Tên người order</th>
                            <th>Địa chỉ</th>
                            <th>Ngày đặt hàng</th>
                            <th>Email</th>
                            <th>Thanh toán</th>
                            <th>Tổng tiền</th>
                            <th>Chi tiết</th>
                            <th>Trạng thái</th></tr>
                        </thead>
                        <tbody>
                            @foreach($bills_history as $bill_history)
                            <tr>
                                <td>{{ $bill_history->id }}</td>
                                <td>{{ $bill_history->customer->name }}</td>
                                <td>{{ $bill_history->customer->address }}</td>
                                <td>{{ $bill_history->date_oder }}</td>
                                <td>{{ $bill_history->customer->email }}</td>
                                <td>{{ $bill_history->payment }}</td>
                                <td>
                                    {{ $bill_history->total }}
                                </td>
                                <td><a href="/bill-detail/{{$bill_history->id}}">Detail</a></td>
                                @switch($bill_history->status)
                                @case(1)
                                <td class="m--font-accent" style="color: blue">Processing</td>
                                @break

                                @case(2)
                                <td class="m--font-focus" style="color: violet">Delivering</td>
                                @break

                                @case(3)
                                <td class="m--font-danger" style="color: red">Failed</td>
                                @break

                                @case(4)
                                <td class="m--font-warning" style="color: brown">Cancelled</td>
                                @break

                                @case(5)
                                <td class="m--font-success" style="color: yellow">Done</td>
                                @break

                                @default
                                <td class="m-badge--brand m--font-primary" style="color: green">New</td>
                                @endswitch
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection
