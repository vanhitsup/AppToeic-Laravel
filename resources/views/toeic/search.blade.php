@extends('layouts.master')
@section('content')
    <style type="text/css">
        body {
            background: #ededed;
            color: #666;
            font: 90%/180% Arial, Helvetica, sans-serif;
            max-width: 96%;
            margin: 0 auto;
        }
        a {
            color: #69C;
            text-decoration: none;
        }
        a:hover {
            color: #F60;
        }
        h1 {
            font: 1.7em;
            line-height: 110%;
            color: #000;
        }
        p {
            margin: 0 0 20px;
        }


        input {
            outline: none;
        }
        input[type=search] {
            -webkit-appearance: textfield;
            -webkit-box-sizing: content-box;
            font-family: inherit;
            font-size: 100%;
        }
        input::-webkit-search-decoration,
        input::-webkit-search-cancel-button {
            display: none;
        }


        input[type=search] {
            border: solid 1px #ccc;
            padding: 9px 10px 9px 32px;
            width: 400px;

            -webkit-border-radius: 10em;
            -moz-border-radius: 10em;
            border-radius: 10em;

            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            transition: all .5s;
        }
        input:-moz-placeholder {
            color: #999;
        }
        input::-webkit-input-placeholder {
            color: #999;
        }
        .tutim{
            text-align: center;
            border-radius: 20px;
            margin-bottom: 5px;
            border: 1px solid;
        }
        .container{
            margin-top: 50px;
            padding: 5px;
            width: 70%;
            min-height: 400px;
            border-radius: 20px;
            background: #fff;
            box-shadow: 20px 20px 20px 20px #636b6f;
        }
        .tutim:hover{
            background: #cccccc;
            color: red;
        }
        .tutim:hover > a{
            color: red;
        }
        .btn1{
            background:#ededed ;
            color: black;
        }
        .tumoi{
            padding:10px;
            border-radius: 20px;
            box-shadow: 5px 5px 5px ;
        }
    </style>
<div class="container">
    <div class="row float-left" style="margin-left: 20px;margin-top: 50px;margin-right: 50px;box-shadow: 10px 10px 10px greenyellow; border-radius: 60px">
        <img src="http://localhost/toeicapp_thu/public/images/toeic.png">
    </div>
    <div class="row" style="margin-top: 50px;">
        <h1>Ứng dụng từ điển TOEIC</h1>
        <p style="margin-left: 30px"><a href="{{url('toeicapp')}}" class="btn btn-info">Quản lý từ vựng</a></p>
    </div>
    <form action="{{url('search')}}" name="" method="get">
        <input type="search" name="search" value="{{request('search')}}" placeholder="Nhập từ muốn tra cứu">
        <input type="submit" name="translate" class="btn btn-info btn1" value="Tìm kiếm">
    </form>
    <div class="row tumoi">
        <div class="col-md-4" style="border-right: 2px solid gray; box-shadow: 5px 5px 5px 5px">
            <h3 style="color: black">Các từ tìm được</h3>
            @if(isset($new) && count($new) > 0)
                @foreach($new as $item)
                    <a href="{{url('search',$item->id)}}">  <div class="col-md-12 tutim">{{$item->newword}}</div></a>
                @endforeach
            @else
                <div class="alert alert-danger">{{"Không tìm thấy từ vựng nào"}}</div>
            @endif
        </div>
        <div class="col-md-8">
            @foreach($new as $item)
                @if(request('id')==$item->id)
                    <div class="alert alert-info"><h3>Từ mới : {{$item->newword}} </h3></div>
                    <div class="alert alert-info">Nghĩa của từ : {{$item->mean}}</div>
                    <h3>Các ví dụ:</h3>
                    @if(isset($sen) && count($sen) > 0)
                        @foreach($sen as $senitem)
                            @if($item->id == $senitem->newword_id)
                                <div class="alert alert-success">{{$senitem->sentence_example}}</div>
                                <div class="alert alert-success">{{$senitem->sentence_translate}}</div>
                            @endif
                        @endforeach
                    @else
                        <div class="alert alert-danger">{{"Không tìm thấy ví dụ cho từ vựng này"}}</div>
                    @endif
                @endif
            @endforeach
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("a #reset").on("click", function (e) {
            e.preventDefault();

            $("input[name='search']").val();

            window.location.replace("{{url('search')}}");
        });
    });
</script>
@endsection
