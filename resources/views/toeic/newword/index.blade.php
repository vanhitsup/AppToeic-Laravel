@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liệt kê từ mới</h1>
            <h1>
                <a href="{{url('toeicapp/create')}}" class="btn btn-success">Thêm từ mới</a>
                <a href="{{url('search')}}" class="btn btn-info">Trở lại từ điển</a>
            </h1>
            <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Từ mới</th>
                <th>Loại</th>
                <th>Ý nghĩa của từ</th>
                <th style="text-align: center;">Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($newwords as $newworditem)
            <tr>
                <td>{{$newworditem->id}}</td>
                <td>{{$newworditem->newword}}</td>
                <td>{{$newworditem->mean}}</td>
                <td>{{$newworditem->type}}</td>
                <td style="text-align: center">
                    <a href="{{url('sentence',$newworditem->id)}}" class="btn btn-info">Xem ví dụ</a>
                    <a href="{{url('toeicapp/edit',$newworditem->id)}}" class="btn btn-warning">Sửa từ này</a>
                    <a href="{{url('toeicapp/delete',$newworditem->id)}}" class="btn btn-danger">Xóa từ này</a>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
