@extends('admin.layouts.master')
@section('title', 'Admin')
@section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">{{ trans('product.subheader_product') }}</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/home" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">{{ trans('product.subheader_product') }}</span>
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
                    {{ trans('product.list') }}
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="/manager/books/create" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
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
                    <th>{{ trans('product.id') }}</th>
                    <th>{{ trans('product.name') }}</th>
                    <th>{{ trans('product.category_name') }}</th>
                    <th>{{ trans('product.image') }}</th>
                    <th>{{ trans('product.unit') }}</th>
                    <th>{{ trans('product.promotion_price') }}</th>
                    <th>{{ trans('product.unit_price') }}</th>
                    <th>{{ trans('master.created_at') }}</th>
                    <th>{{ trans('master.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    
                    <td>
                        <a href="{{ action('Admin\ProductController@edit', $product->id)}}"> {{ $product->id }} </a>
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->product_type->name }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->unit }}</td>
                    <td>{{ $product->promotion_price }}</td>
                    <td>{{ $product->unit_price }}</td>
                    <td>
                        @if (!isset($product->created_at))
                        {{ trans('master.create_date') }}
                        @else
                        {!! $product->created_at->format('m/d/Y') !!}
                        @endif
                    </td>
                    <td nowrap>
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ action('Admin\ProductController@edit', $product->id) }}">
                                    <i class="la la-edit"></i>{{ trans('master.edit') }}</a>
                                    <a class="dropdown-item"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-form-{{ $product->id }}').submit();">
                                    <i class="la la-trash"></i>{{ trans('master.delete') }}</a>
                                </div>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @foreach ($products as $product)
        <form id="delete-form-{{ $product->id }}" action="{{ action('Admin\ProductController@destroy', $product->id) }}" method="POST" style="display: none;">
            @method('DELETE')
            @csrf
        </form>
        @endforeach
    </div>
    @endsection
