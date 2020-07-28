@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo từ mới</h1>
            <form name="create" method="post" action="{{url('toeicapp/create')}}">
                @csrf
                <div class="form-group">
                    <label>Từ mới:</label>
                    <input type="text" name="newword" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Ý nghĩa:</label>
                    <input type="text" name="mean" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Từ loại:</label>
                    <input type="text" name="type" class="form-control" value="">
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="{{url('toeicapp')}}" class="btn btn-warning">Quay lại</a>
            </form>

        </div>
    </div>
</div>
@endsection
