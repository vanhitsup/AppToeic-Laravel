@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Xóa từ mới: </h1>
                <form name="delete" action="{{url('toeicapp/delete',$newword->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Từ mới:</label>
                        <p>{{$newword->newword}}</p>
                    </div>
                    <button type="submit" class="btn btn btn-danger">Xóa từ</button>
                    <a href="{{url('toeicapp')}}" class="btn btn-info">Quay lại</a>
                </form>

            </div>
        </div>
    </div>
@endsection
