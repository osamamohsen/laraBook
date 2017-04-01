@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <h1>Welcome in DashBook</h1>
        <p>Welcome to the preimer place to talk about laravel with other. why you dont see sign up to see what is talking about?</p>
        <p>
            @unless(Auth::check())
            <a class="btn btn-lg btn-primary" href="/register" role="button">Sign Up Now &raquo;</a>
            @endunless
        </p>
    </div>
@stop