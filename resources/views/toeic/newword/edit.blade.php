@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa từ mới</h1>
            <form name="edit" action="{{url('toeicapp/edit',$newword->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Từ mới:</label>
                    <input type="text" name="newword" class="form-control" value="{{$newword->newword}}">
                </div>
                <div class="form-group">
                    <label>Ý nghĩa:</label>
                    <input type="text" name="mean" class="form-control" value="{{$newword->mean}}">
                </div>
                <div class="form-group">
                    <label>Kiểu từ:</label>
                    <input type="text" name="type" class="form-control" value="{{$newword->type}}">
                </div>

                <button type="submit" class="btn btn-warning">sửa từ mới</button>
                <a href="{{url('toeicapp')}}" class="btn btn-info">Quay lại</a>
            </form>

        </div>
    </div>
</div>
@endsection
