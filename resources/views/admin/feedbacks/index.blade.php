@extends('admin.layouts.master')
@section('title', 'Admin')
@section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Feedbacks</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/home" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Feedbacks</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">All</span>
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
                    Feedbacks List
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                        <span>
                            <i class="la la-book"></i>
                            <span>{{ trans('category.new') }}</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="m-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_author">
            <thead>
                <tr>
                    <th>Feedback ID</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>{{ trans('master.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->id }}</td>
                    <td>{{ $feedback->subject }}</td>
                    <td>{{ $feedback->message }}</td>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td nowrap>
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">
                                    <i class="la la-edit"></i>Answer
                                </a>
                                <a class="dropdown-item"
                                onclick="event.preventDefault();
                                document.getElementById('delete-form-{{$feedback->id}}').submit();">
                                <i class="la la-trash"></i>{{ trans('master.delete') }}
                                </a>
                            </div>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @foreach ($feedbacks as $feedback)
        <form id="delete-form-{{ $feedback->id }}" action="{{ action('Admin\FeedbackController@destroy', $feedback->id) }}" method="POST" style="display: none;">
            @method('DELETE')
            @csrf
        </form>
        @endforeach
    </div>
    @endsection
