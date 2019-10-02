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
        <div class="alert alert-success" role="alert">
            <strong>Well done!</strong> {{ session('status') }}
        </div>
        @endif
        <div class="m-portlet__body">
            <div class="form-group m-form__group m--margin-top-10">
                <div class="alert m-alert m-alert--default" role="alert">
                    <span>{{ trans('product.alert_edit') }}</span>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-lg-3 col-form-label">{{ trans('product.name') }}</label>
                <div class="col-lg-6">
                    <input class="form-control m-input" type="text" value="{{ $product->name }}" id="example-text-input" name="name">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputPassword1">{{ trans('product.id_type') }}</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <select name="id_type" class="form-control m-input" id="exampleSelect1">
                        @if ($product_types->isEmpty())
                        <option value="0"> There is no product types.</option>
                        @else
                        @foreach ($product_types as $type)
                            @if ($type->id == $product->id_type)
                            <option value="{{ $type->id }}" selected="">{{ $type->name }}</option>
                            @else
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endif
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-email-input" class="col-lg-3 col-form-label">{{ trans('product.description') }}</label>
                <div class="col-lg-6">
                    <input class="form-control m-input" type="text" value="{{ $product->description }}" name="description" id="example-email-input">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-url-input" class="col-lg-3 col-form-label">{{ trans('product.unit_price') }}</label>
                <div class="col-lg-6">
                    <input class="form-control m-input" type="number" value="{{ $product->unit_price }}" name="unit_price" id="example-url-input">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-tel-input" class="col-lg-3 col-form-label">{{ trans('product.promotion_price') }}</label>
                <div class="col-lg-6">
                    <input class="form-control m-input" type="number" value="{{ $product->promotion_price }}" name="promotion_price" id="example-tel-input">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-password-input" class="col-lg-3 col-form-label">{{ trans('product.image') }}</label>
                <div class="custom-file col-lg-6 col-md-9 col-sm-12">
                    <input type="file" class="form-control m-input custom-file-input" id="example-tel-input" name="image" value="{{ $product->image }}">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="example-number-input" class="col-lg-3 col-form-label">{{ trans('product.unit') }}</label>
                <div class="col-lg-6">
                    <input class="form-control m-input" type="text" value="{{ $product->unit }}" name="unit" id="example-number-input">
                </div>
            </div>  
            <div class="form-group m-form__group row">
                <label for="example-datetime-local-input" class="col-lg-3 col-form-label">{{ trans('product.new') }}</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <select name="id_type" class="form-control m-input" id="exampleSelect1">
                        @foreach($new_product as $key => $value)
                        @if ($key == $product->new)
                        <option value="{{ $key }}" selected="">{{ $value }}</option>
                        @else
                        <option value="{{ $key }}">{{ $value }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>   
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-9">
                        <button type="submit" class="btn btn-success">{{ trans('master.update') }}</button>
                        <button type="reset" class="btn btn-secondary">{{ trans('master.cancel') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
