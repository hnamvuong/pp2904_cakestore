@extends('master')
@section('title', 'Lịch sử đặt hàng')
@section('content')
    <section class="content-header">
        <h1>
            Danh sách đơn hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Bill</a></li>
            <li class="active">List</li>
        </ol>
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
                        <th scope="col" >ID</th>
                        <th scope="col">Tên người order</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Ngày đặt hàng</th>
                        <th scope="col">Email</th>
                        <th scope="col">Thanh toán</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Action</th>
                        <th scope="col">Xóa</th></tr>
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
                                <td>Chưa xử lý</td>
                                <td><a href="/bill-detail/{{$histories->id}}">Detail</a></td>
                                <td>
                                    <form action="#/" method="post" id="formDelete">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                        {{ csrf_field() }}
                                    </form>
                                </td>
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