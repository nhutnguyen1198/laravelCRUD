@extends('layouts.app')

@section('content')
    <h1>Danh sách đơn hàng</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Người Dùng</th>
                <th>Danh sách sản phẩm</th>
                <th>Ngày tạo</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $orders->id }}</td>
                    <td>{{ $orders->user_id }}</td>
                    <td>{{ $orders->list_products }}</td>
                    <td>{{ $orders->created_at }}</td>
                </tr>
        </tbody>
    </table>
@endsection