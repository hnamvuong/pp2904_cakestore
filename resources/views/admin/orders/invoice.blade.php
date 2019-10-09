@extends('admin.layouts.master')
@section('title', 'CakeStore')
@section('content')
<div class="m-portlet">
    <div class="m-portlet__body m-portlet__body--no-padding">
        <div class="m-invoice-1">
            <div class="m-invoice__wrapper">
                <div class="m-invoice__head" style="background-image: url({{ asset('assets/app/media/bg-6.png') }}) ;">
                    <div class="m-invoice__container m-invoice__container--centered">
                        <div class="m-invoice__logo">
                            <a href="#">
                                <h1>INVOICE</h1>
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/app/media/img/logos/logo_client_white.png') }}">
                            </a>
                        </div>
                        <span class="m-invoice__desc">
                            <span>Handico Tower, Phạm Hùng, Nam Từ Liêm,HN</span>
                            <span>Cake Store</span>
                        </span>
                        <div class="m-invoice__items">
                            <div class="m-invoice__item">
                                <span class="m-invoice__subtitle">DATA</span>
                                @if (!isset($order->date_oder))
                                <span class="m-invoice__text">{{ trans('admin.create_date') }}</span>
                                @else
                                <span class="m-invoice__text">{!! Carbon\Carbon::parse($order->date_oder)->format('d-m-Y') !!}</span>
                                @endif
                            </div>
                            <div class="m-invoice__item">
                                <span class="m-invoice__subtitle">INVOICE NO.</span>
                                <span class="m-invoice__text">CS {{ $order->id }}</span>
                            </div>
                            <div class="m-invoice__item">
                                <span class="m-invoice__subtitle">INVOICE TO.</span>
                                <span class="m-invoice__text">{{ $order->customer->name }}
                                    <br>{{ $order->customer->address }}</span>                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-invoice__body m-invoice__body--centered">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>DESCRIPTION</th>
                                        <th>QUANTITY</th>
                                        <th>UNIT PRICE</th>
                                        <th>AMOUNT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bill_details as $bill_detail)
                                    <tr>
                                        <td>{{ $bill_detail->product->name }}</td>
                                        <td>{{ $bill_detail->quantity }}</td>
                                        @if (!isset($bill_detail->product->promotion_price))
                                        <td>{{ $bill_detail->product->unit_price }}</td>
                                        <td>{{ $bill_detail->product->unit_price * $bill_detail->quantity }}</td>
                                        @else
                                        <td>{{ $bill_detail->product->promotion_price }}</td>
                                        <td>{{ $bill_detail->product->promotion_price * $bill_detail->quantity }}</td>
                                        @endif                            
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="m-invoice__footer">
                        <div class="m-invoice__container m-invoice__container--centered">
                            <div class="m-invoice__content">            
                            </div>
                            <div class="m-invoice__content">
                                <span>TOTAL AMOUNT</span>
                                <span class="m-invoice__price">{{ $order->total }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
