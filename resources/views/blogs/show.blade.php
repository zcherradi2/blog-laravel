@extends('layouts.app')

@section('content')
    <div class='container'>
        <h4 class='title'>{{$blog->title}}</h4>
        <p class='content'>{{$blog->content}}</p>
        <strong><p>{{$blog->user->email}}</p></strong>
        <br>
        @auth
        @include('layouts.add_comment',['blog'=>$blog])
        @endauth
        @include('layouts.linear_listing',['comments'=>$blog->comments])
    </div>

@endsection