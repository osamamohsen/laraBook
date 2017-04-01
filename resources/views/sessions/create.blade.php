
@extends('layouts.master')
@section('content')
@include('layouts.partials.errors')
<center><h1>Login</h1></center>

<div class="form-group">
{!! Form::open(array('action'=>'SessionsController@store')) !!}
        <div class="div form-group">
            {!! Form::label('Email') !!}
            {!! Form::email('email','',array('class'=>'form-control','required'=>'required')) !!}

        </div>
        <div class="div form-group">
            {!! Form::label('Password') !!}
            {!! Form::password('password',array('class'=>'form-control','required'=>'required')) !!}
        </div>
        <div class="form-group">
            {!! Form::checkbox('remember_me','on','off') !!}
            {!! Form::label('Remember me') !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Login',array('class'=>'btn btn-lg btn-primary')) !!}
        </div>
    {!! Form::close() !!}
</div>
@stop
