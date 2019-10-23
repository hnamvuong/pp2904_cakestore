@extends('master')
@section('title', 'Lịch sử đặt hàng')
@section('content')
<section class="content-header breadcrumb">
    <h1>
        My bills
    </h1>
</section>
<!-- Main content -->
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" >Mã đơn hàng</th>
                            <th scope="col">Tên người order</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Ngày đặt hàng</th>
                            <th scope="col">Email</th>
                            <th scope="col">Thanh toán</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Chi tiết</th>
                            <th scope="col">Trạng thái</th></tr>
                        </thead>
                        <tbody>
                            @foreach($history as $histories)
                            <tr>
                                <td>{{ $histories->id }}</td>
                                <td>{{ $histories->name }}</td>
                                <td>{{ $histories->address }}</td>
                                <td>{{ $histories->date_oder }}</td>
                                <td>{{ $histories->email }}</td>
                                <td>{{ $histories->payment }}</td>
                                <td>
                                    {{ $histories->total }}
                                </td>
                                <td><a href="/bill-detail/{{$histories->id}}">Detail</a></td>
                                <td>Chưa xử lý</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
