@extends('admin.layouts.master')
@section('title', 'Admin')
@section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">{{ trans('order.subheader_order') }}</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/home" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">{{ trans('order.subheader_order') }}</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">{{ trans('master.subheader_all') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    {{ trans('order.list') }}
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="{{ route('products.create') }}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                        <span>
                            <i class="la la-book"></i>
                            <span>{{ trans('product.add_new') }}</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="m-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_2">
            <thead>
                <tr>
                    <th>{{ trans('order.id_bill') }}</th>
                    <th>{{ trans('customer.name') }}</th>
                    <th>{{ trans('order.total') }}</th>
                    <th>{{ trans('customer.phone') }}</th>
                    <th>{{ trans('order.date_order') }}</th>
                    <th>{{ trans('order.note') }}</th>
                    <th>{{ trans('order.payment') }}</th>
                    <th>{{ trans('order.status') }}</th>
                    <th>{{ trans('master.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>
                        <a href="{{ action('Admin\OrderController@show', $order->id)}}"> {{ $order->id }} </a>
                    </td>
                    <td>{{ $order->customer->name }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->customer->phone_number }}</td>
                    <td>{{ Carbon\Carbon::parse($order->date_oder)->format('d-m-Y') }}</td>
                    <td>{{ $order->note }}</td>
                    <td>{{ $order->payment }}</td>
                    @switch($order->status)
                    @case(1)
                    <td class="m--font-accent">Processing</td>
                    @break

                    @case(2)
                    <td class="m--font-focus">Delivering</td>
                    @break

                    @case(3)
                    <td class="m--font-danger">Failed</td>
                    @break

                    @case(4)
                    <td class="m--font-warning">Cancelled</td>
                    @break

                    @case(5)
                    <td class="m--font-success">Done</td>
                    @break

                    @default
                    <td class="m-badge--brand m--font-primary">New</td>
                    @endswitch
                    <td nowrap>
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"> 
                                <a class="dropdown-item" href="" onclick="event.preventDefault();
                                document.getElementById('update-form-{{ $order->id }}').submit();">
                                <select class="m-dropdown__toggle btn-warning dropdown-toggle" name="state" form="update-form-{{ $order->id }}">
                                    <option value="0">New</option>
                                    <option value="1">Processing</option>
                                    <option value="2">Delivering</option>
                                    <option value="3">Failed</option>
                                    <option value="4">Cancelled</option>
                                    <option value="5">Done</option>  
                                </select>
                                </a>
                            </div>   
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@foreach ($orders as $order)
<form id="update-form-{{ $order->id }}" action="{{ action('Admin\OrderController@update', $order->id) }}" method="POST" style="display: none;">
    @method('PUT')
    @csrf
</form>
@endforeach
</div>
@endsection
