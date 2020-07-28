@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa câu ví dụ</h1>
            <form name="edit" action="{{url('sentence/edit',$sentence->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Câu ví dụ:</label>
                    <textarea class="form-control" name="sentence_example">{{$sentence->sentence_example}}</textarea>
                </div>
                <div class="form-group">
                    <label>Ý nghĩa:</label>
                    <textarea class="form-control" name="sentence_translate">{{$sentence->sentence_translate}}</textarea>
                </div>

                <button type="submit" class="btn btn-warning">Sửa ví dụ</button>
                <a href="{{url('toeicapp')}}" class="btn btn-info">Quay lại</a>
            </form>

        </div>
    </div>
</div>
@endsection
