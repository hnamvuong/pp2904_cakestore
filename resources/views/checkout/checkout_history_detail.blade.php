@extends('admin.master')
@section('title', 'Chi tiết đơn hàng')
@section('content')
    <section class="content-header">
        <h1>
            Chi tiết đơn hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Bill</a></li>
            <li class="active">List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container123  col-md-6"   style="">
                            <h4></h4>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="col-md-4">Thông tin khách hàng</th>
                                    <th class="col-md-6"></th>
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
                        <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting col-md-1" >ID</th>
                                <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                                <th class="sorting col-md-2">Số lượng</th>
                                <th class="sorting col-md-2">Giá tiền</th>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>{{ $bill_detail->id }}</td>
                                    <td>{{ $bill_detail->name }}</td>
                                    <td>{{ $bill_detail->quantity }}</td>
                                    <td>{{ number_format($bill_detail->unit_price) }} VNĐ</td>
                                </tr>
                            <tr>
                                <td colspan="3"><b>Tổng tiền</b></td>
                                <td colspan="1"><b class="text-red">{{ number_format($bill_detail->total) }} VNĐ</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                <form action="#" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
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
            </div>
        </div>
    </section>
@endsection