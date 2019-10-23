@extends('master') 
@section('title', 'Chi tiết đơn hàng') 
@section('content')
<section class="content-header">
    <h1>
            Chi tiết đơn hàng
        </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/lich-su">Bill</a></li>
        <li class="active">List</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="m-portlet__body">
        <!--begin::Section-->
        <div class="m-section">
            <div class="m-section__content">
                <table class="table m-table m-table--head-bg-success">
                    <thead>
                        <tr>
                            <label>Thông tin khách hàng</label>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Thông tin người đặt hàng</td>
                            <td>{{ $customer_detail->name }}</td>
                        </tr>
                        <tr>
                            <td>Ngày đặt hàng</td>
                            <td>{{ $customer_detail->date_oder }}</td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td>{{ $customer_detail->phone_number }}</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td>{{ $customer_detail->address }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $customer_detail->email }}</td>
                        </tr>
                        <tr>
                            <td>Ghi chú</td>
                            <td>{{ $customer_detail->note }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <table class="table m-table m-table--head-bg-success">
                <thead>
                    <tr role="row">
                        <th class="col-6">Tên sản phẩm</th>
                        <th class="col-2">Số lượng</th>
                        <th class="col-2">Giá tiền</th>
                </thead>
                <tbody>
                    @foreach( $bill_detail as $bill_details)
                    <tr>
                        <td class="col-6">{{ $bill_details->name }}</td>
                        <td class="col-2">{{ $bill_details->quantity }}</td>
                        <td class="col-2">{{ number_format($bill_details->unit_price) }} VNĐ</td>

                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"><b>Tổng tiền</b></td>
                        <td colspan="1"><b class="text-red">{{ number_format($bill_details->total) }} VNĐ</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12">
        <form action="#" method="POST">
            <input type="hidden" name="_method" value="PUT"> {{ csrf_field() }}
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="form-inline">
                    <label>Trạng thái giao hàng: </label>
                    <select name="status" class="form-control input-inline" style="width: 200px">
                        <option value="1">Chưa giao</option>
                        <option value="2">Đang giao</option>
                        <option value="2">Đã giao</option>
                    </select>

                    <input type="submit" value="Xử lý" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</section>
@endsection