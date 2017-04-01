@if(Auth::check() && $user->username == Auth()->user()->username)
    @include('layouts.partials.errors')
    <div class="form-group">
    {!! Form::open(array('action'=>'StatusesController@store')) !!}
    {!! Form::input('user_id','user_id',\Auth::user()->id,[ 'class' => 'hidden']) !!}
    {!! Form::textarea('body',null,array(
    'class' => 'form-control textarea-status-submit',
    'rows' => 3,
    'placeholder'=>"what's in your mind?",
    'id'=>'postStatusForm')) !!}

    <div class="form-group status-post-submit">
        {!! Form::submit('Post status',array('class'=>'btn btn-xs btn-default status-post')) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endif