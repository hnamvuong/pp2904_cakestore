@extends('admin.layouts.master')
@section('title', 'CakeStore')
@section('content')

<div class="m-portlet m-portlet--tab" >
    <div class="m-portlet__head">
    </div>

    <!--begin::Form-->
    <form class="m-form m-form--fit m-form--label-align-right" method="post">
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
            <div class="form-group m-form__group m--margin-top-10">
                <div class="alert m-alert m-alert--default" role="alert">
                    <span>{{ trans('product.alert_edit') }}</span>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">{{ trans('product.name') }}</label>
                <div class="col-10">
                    <input class="form-control m-input" type="text" value="{{ $product->name }}" id="example-text-input" name="name">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-search-input" class="col-2 col-form-label">{{ trans('product.id_type') }}</label>
                <div class="col-10">
                    <input class="form-control m-input" type="number" value="{{ $product->id_type }}" name="id_type" id="example-search-input">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-email-input" class="col-2 col-form-label">{{ trans('product.description') }}</label>
                <div class="col-10">
                    <input class="form-control m-input" type="text" value="{{ $product->description }}" name="description" id="example-email-input">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-url-input" class="col-2 col-form-label">{{ trans('product.unit_price') }}</label>
                <div class="col-10">
                    <input class="form-control m-input" type="number" value="{{ $product->unit_price }}" name="unit_price" id="example-url-input">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-tel-input" class="col-2 col-form-label">{{ trans('product.promotion_price') }}</label>
                <div class="col-10">
                    <input class="form-control m-input" type="number" value="{{ $product->promotion_price }}" name="promotion_price" id="example-tel-input">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-password-input" class="col-2 col-form-label">{{ trans('product.img') }}</label>
                <div class="col-10">
                    <input class="form-control m-input" type="url" value="{{ $product->image }}" name="image" id="example-password-input">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-number-input" class="col-2 col-form-label">{{ trans('product.unit') }}</label>
                <div class="col-10">
                    <input class="form-control m-input" type="text" value="{{ $product->unit }}" name="unit" id="example-number-input">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-datetime-local-input" class="col-2 col-form-label">{{ trans('product.new') }}</label>
                <div class="col-10">
                    <input class="form-control m-input" type="number" value="{{ $product->new }}" name="new" id="example-datetime-local-input">
                </div>
            </div>      
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <button type="submit" class="btn btn-success">{{ trans('product.update') }}</button>
                        <button type="submit" class="btn btn-success">{{ trans('product.delete') }}</button>
                        <button type="reset" class="btn btn-secondary">{{ trans('product.cancel') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
