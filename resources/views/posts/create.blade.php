@extends('layouts.master')


@section('content')

 {{--  <form method="post" action="/posts">  --}}
    {{--  {{ csrf_field() }}   --}}
 {!! Form::open(['method'=>'post','action'=>'PostsController@store']) !!} 

    <div class="form-group">
        {{--  <label for="title">文章標題</label>  --}}
        {!! Form::label('title', '文章標題') !!}
        {{--  <input type="text" class="form-control" name="title" id="title" placeholder="請輸入標題">  --}}
        {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'請輸入標題']) !!}
    </div>        

    <div class="form-group">
        {{--  <label for="fulltext">文章內容</label>  --}}
        {!! Form::label('fulltext', '文章內容') !!}
        {{--  <textarea class="form-control" name="fulltext" id="fulltext" placeholder="請輸入內容"></textarea>  --}}
        {!! Form::textarea('title', null, ['class'=>'form-control','placeholder'=>'請輸入內容','rows'=>3]) !!}
    </div>
    
    {{--  <button type="submit" class="btn btn-primary">存檔</button>  --}}
    {!! Form::submit('存檔', ["class"=>"btn btn-primary"]) !!}

{{--  </form>  --}}
{!! Form::close() !!}


@endsection('content')


@section('footer')

@endsection('footer')
