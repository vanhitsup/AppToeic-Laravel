@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xóa ví dụ</h1>
            <form name="delete" action="{{url('sentence/delete',$sentence->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label>{{$sentence->sentence_example}}</label>
                </div>
                <button type="submit" class="btn btn-danger">Xác nhận xóa</button>
                <a href="{{url('sentence',$sentence->id)}}" class="btn btn-warning">Quay lại</a>
            </form>

        </div>
    </div>
</div>
@endsection
