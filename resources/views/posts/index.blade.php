@extends('layouts.app')

@section('content')
    <h1> Postss</h1>


    @if(count($posts)>0)

    @foreach($posts as $post)

    <div class="well">
        <h3><a href="/fxdd/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>{{$post->created_at}}</small>
        <p>{{$post->body}}</p>
    </div>

    @endforeach

    @else
        <p>no post found</p>
    @endif

    
@endsection