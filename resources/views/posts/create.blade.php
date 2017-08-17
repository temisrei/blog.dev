@extends('layouts.master')


@section('content')

 {!! Form::open(['method'=>'post','action'=>'PostsController@store']) !!} 

    <div class="form-group">
        {!! Form::label('title', '文章標題') !!}
        {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'請輸入標題']) !!}
    </div>        

    <div class="form-group">
        {!! Form::label('fulltext', '文章內容') !!}
        {!! Form::textarea('title', null, ['class'=>'form-control','placeholder'=>'請輸入內容','rows'=>3]) !!}
    </div>
    
    {!! Form::submit('存檔', ["class"=>"btn btn-primary"]) !!}


    @if(count($errors) > 0)
    <div class="alert alert-success" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

{!! Form::close() !!}


@endsection('content')


@section('footer')

@endsection('footer')
