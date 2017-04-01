
@extends('layouts.master')
@section('content')


<h1>Register</h1>

@include('layouts.partials.errors')

{!! Form::open(array('action'=>'RegistrationController@store')) !!}
<div class="row">
    <div class="col-md-6">

<div class="form-group">
{!! Form::label('name') !!}
{!! Form::text('username',null,array('class'=>'form-control')) !!}
</div>
<div class="form-group">
{!! Form::label('Email') !!}
{!! Form::email('email',null,array('class'=>'form-control')) !!}
</div>
<div class="form-group">
{!! Form::label('Password') !!}
{!! Form::password('password',array('class'=>'form-control')) !!}
</div>
<div class="form-group">
{!! Form::label('Confirm Password') !!}
{!! Form::password('password_confirmation',array('class'=>'form-control')) !!}
</div>
<div class="form-group">
{!! Form::submit('Register', array('class' => 'btn btn-lg btn-primary')) !!}
</div>
{!! Form::close() !!}

    </div>

</div>
@stop



