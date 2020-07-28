@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liệt kê ví dụ cho từ : "{{$newword->newword}}"</h1>
            <h1>
                <a href="{{url('sentence/create',$newword->id)}}" class="btn btn-success">Thêm ví dụ</a>
                <a href="{{url('toeicapp')}}" class="btn btn-success">Quay lại</a>
            </h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Ví dụ</th>
                    <th>Nghĩa</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sentences as $sentenceitem)
                <tr>
                    <td>{{$sentenceitem->id}}</td>
                    <td>{{$sentenceitem->sentence_example}}</td>
                    <td>{{$sentenceitem->sentence_translate}}</td>
                    <td>
                        <p><a href="{{url('sentence/edit',$sentenceitem->id)}}" class="btn btn-warning">Sửa ví dụ</a> </p>
                        <p><a href="{{url('sentence/delete',$sentenceitem->id)}}" class="btn btn-danger">Xóa ví dụ</a> </p>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
