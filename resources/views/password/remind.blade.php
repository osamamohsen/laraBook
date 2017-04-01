@extends('layouts.master')

@section('content')

    <h1>Need Reset your Password</h1>
    {!! Form::open(array('action'=>'PasswordController@ResetPassword')) !!}
        {!! csrf_field() !!}
        {!! Form::label('Email') !!}
        <div class="form-group">
            {!! Form::email('email',null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Reset Password',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@stop