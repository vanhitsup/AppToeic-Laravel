@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo ví dụ cho từ : "{{$newword->newword}}"</h1>
            <form name="create" action="{{url('sentence/create',$newword->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Câu ví dụ:</label>
                    <textarea class="form-control" name="sentence_example"></textarea>
                </div>
                <div class="form-group">
                    <label>Ý nghĩa:</label>
                    <textarea class="form-control" name="sentence_translate"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="{{url('sentence',$newword->id)}}" class="btn btn-warning">Quay lại</a>
            </form>

        </div>
    </div>
</div>
@endsection
