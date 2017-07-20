@extends('layouts.master')

@section('content')

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->fulltext }}</p>

    <hr style="border: 5px solid black;">

    <a href="{{ route('posts.edit', $post->id) }}"
       class="btn btn-success">修改</a>
    


@endsection('content')


@section('footer')
@endsection('footer')
