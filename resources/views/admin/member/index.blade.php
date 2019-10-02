@extends('admin.layouts.master')
@section('title', 'Admin')
@section('content')
<div class="m-portlet">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    List User
                </h3>
            </div>
        </div>
    </div>
    <div class="m-portlet__body">

        <!--begin::Section-->
        <div class="m-section">
            <div id="m_table_1_filter" class="dataTables_filter">
                <label>Search:
                    <form method="post" action="{{ route('usersearch') }}">
                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="m_table_1" name="search">
                        <button class="fa fa-search" type="submit" id="searchsubmit" style="position: absolute; left: 194px; bottom: 25px; padding-top: 5px; padding-bottom: 7px; background-color: white;"></button>
                    </form>
                </label>
            </div>  
            <div class="m-section__content">
                <table class="table table-sm m-table m-table--head-bg-brand">
                    <thead class="thead-inverse">
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if (!isset($order->date_oder))
                                <span class="m-badge  m-badge--info m-badge--wide">{{ trans('admin.create_date') }}</span>
                                @else
                                <span class="m-badge  m-badge--info m-badge--wide">{!! Carbon\Carbon::parse($order->date_oder)->format('d-m-Y') !!}</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!--end::Section-->
    </div>
</div>
@endsection
