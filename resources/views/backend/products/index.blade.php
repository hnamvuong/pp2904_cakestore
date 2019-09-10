@extends('backend.admin.master')
@section('title', 'CakeStore')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper" style="width: 1400px;">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader">
        @if (session('status'))
        <div class="alert m-alert m-alert--default alert alert-success" style="position: relative;top: 60px;">
            {{ session('status') }}
        </div>
        @endif
    </div>
    <!-- END: Subheader -->
    <div class="m-content">                     
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head" style="position: relative;top: 50px;">
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
                            <a href="{{ route('product.create') }}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>{{ trans('product.add_new') }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="m-portlet__nav-item"></li>
                        <li class="m-portlet__nav-item">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body" style="width: 1200px, margin: 0 auto; position: relative; top: 40px;">

                <!--begin: Datatable -->

                <div id="m_table_1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer" style="margin: 0 auto;">
                    <div class="row">
                        <div class="col-sm-12 col-md-9">
                            <div class="dataTables_length" id="m_table_1_length">
                                <label>
                                    Show entries
                                    <select name="m_table_1_length" aria-controls="m_table_1" class="form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>                                    
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div id="m_table_1_filter" class="dataTables_filter">
                                <label>Search:
                                    <form method="get" action="{{ action('Admin\ProductController@getSearch') }}">
                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="m_table_1" name="key">
                                        <button class="fa fa-search" type="submit" id="searchsubmit" style="position: absolute; left: 194px; bottom: 8px; padding-top: 5px; padding-bottom: 7px; background-color: white;"></button>
                                    </form>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 976px;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 117.25px;" aria-sort="ascending" aria-label="Agent: activate to sort column descending">{{ trans('product.img') }}</th>
                                        <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 117.25px;" aria-label="CompanyEmail: activate to sort column ascending">{{ trans('product.name') }}</th>
                                        <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 105.25px;" aria-label="CompanyAgent: activate to sort column ascending">{{ trans('product.unit_price') }}</th>
                                        <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 120.25px;" aria-label="CompanyName: activate to sort column ascending">{{ trans('product.unit') }}</th>
                                        <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 120.25px;" aria-label="Status: activate to sort column ascending">{{ trans('product.created_at') }}</th>
                                        <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 120.25px;" aria-label="Type: activate to sort column ascending">{{ trans('product.updated_at') }}</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 69.5px;" aria-label="Actions">{{ trans('product.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr role="row" class="odd">
                                        <td>    
                                            <div ><img src="{{ asset('/source/image/product/' . $product->image) }}" style="height: 100px; width: 100%;"></div>             
                                        </td>
                                        <td><a class="m-link" href="{{ action('Admin\ProductController@show', $product->id) }}">{!! $product->name !!}</a></td>
                                        <td>{!! $product->unit_price !!}</td>
                                        <td>{!! $product->unit !!}</td>
                                        <td>
                                            @if (!isset($product->created_at))
                                            <span class="m-badge  m-badge--info m-badge--wide">{{ trans('admin.create_date') }}</span>
                                            @else
                                            <span class="m-badge  m-badge--info m-badge--wide">{!! $product->created_at->format('m/d/Y') !!}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!isset($product->updated_at))
                                            <span class="m-badge  m-badge--info m-badge--wide">{{ trans('admin.no_update') }}</span>
                                            @else
                                            <span class="m-badge  m-badge--info m-badge--wide">{!! $product->updated_at->format('m/d/Y') !!}</span>
                                            @endif
                                        </td>
                                        <td nowrap="">
                                            <span class="dropdown">
                                                <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div>
                                                        <a class="dropdown-item" href="{{ action('Admin\ProductController@edit', $product->id) }}"><i class="la la-edit"></i>{{ trans('product.edit') }}</a>
                                                    </div>
                                                    <form method="post" action="{{ action('Admin\ProductController@destroy', $product->id) }}">
                                                        @csrf
                                                        <button class="la la-leaf dropdown-item" style="background-color: white; border:none;">{{ trans('product.delete') }}</button>
                                                    </form>
                                                </div>
                                            </span>
                                            <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                                                <i class="la la-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        @endsection
