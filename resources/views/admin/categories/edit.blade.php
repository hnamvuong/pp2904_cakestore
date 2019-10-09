@extends('admin.layouts.master')
@section('title', 'Admin')
@section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Edit</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/home" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Category</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Edit</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="m-portlet m-portlet--tab">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="m-portlet__head-text">
                Edit Category
                </h3>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{ action('Admin\CategoryController@update', $category->id)}}">
        @method('PUT')
        @csrf
        @foreach ($errors->all() as $error)
        <div class="alert m-alert m-alert--default alert alert-danger m--margin-top-10">
                <span>{{ $error }}</span>
        </div>
        @endforeach
        @if (session('status'))
        <div class="alert m-alert m-alert--default alert alert-success" style="position: relative;top: 20px;">
            {{ session('status') }}
        </div>
        @endif
        <div class="m-portlet__body">
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">Name</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <input type="text" name="name" value="{{$category->name}}" class="form-control m-input" id="exampleInputEmail1">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">Description</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <input type="text" name="description" value="{{$category->description}}" class="form-control m-input" id="exampleInputEmail1">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">Image</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <input type="text" name="image" value="{{$category->image}}" class="form-control m-input" id="exampleInputEmail1">
                </div>
            </div>
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection