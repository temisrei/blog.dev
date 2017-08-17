@extends('layouts.master')


@section('content')

{{--  <form method="post" action="/posts/{{ $post->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">  --}}
{!! Form::model($post, ['method'=>'put','action'=>['PostsController@update', $post->id]]) !!}

    <div class="form-group">
        {{--  <label for="title">文章標題</label>  --}}
        {!! Form::label('title', '文章標題') !!}
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入標題"
                value="{{ $post->title }}">
    </div>        
    <div class="form-group">
        {{--  <label for="fulltext">文章內容</label>  --}}
        {!! Form::label('fulltext', '文章內容') !!}
        <textarea class="form-control" name="fulltext" id="fulltext" placeholder="請輸入內容">{{ $post->fulltext }}</textarea>
    </div>
    {{--  <button type="submit" class="btn btn-info">修改並存檔</button>     --}}
    {!! Form::submit('修改並存檔', ["class"=>"btn btn-info"]) !!}

{{--  </form>  --}}
{!! Form::close() !!}

{{--  <form method="post" action="/posts/{{ $post->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">  --}}
{!! Form::open(['method'=>'delete','action'=>['PostsController@destroy', $post->id]]) !!} 

    {{--  <button type="submit" class="btn btn-danger">刪除</button>     --}}
    {!! Form::submit('刪除', ["class"=>"btn btn-danger"]) !!}

{{--  </form>  --}}
{!! Form::close() !!}

    @if(count($errors) > 0)
    <div class="alert alert-success" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


@endsection('content')


@section('footer')

@endsection('footer')
