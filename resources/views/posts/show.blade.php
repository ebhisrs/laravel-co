@extends('layouts.app')

@section('content')

<a href="/fxdd/public/posts" class="btn btn btn-primary" role="button"> go back</a>
    <h1> {{$post->title}}</h1>
    <small>{{$post->created_at}}</small>
        <p>{{$post->body}}</p>
@endsection