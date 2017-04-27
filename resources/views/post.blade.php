
@extends('layouts.master')

@section('content')

<ul>    
    <li>新聞分類：{{$category}}</li>
    <li>發布日期：{{$date}}</li>
    <li>新聞代碼：{{$id}}</li>
</ul>

@endsection('content')


@section('footer')

<script>
    console.log('{{$category}} {{$date}} {{$id}}');
</script>

@endsection('footer')