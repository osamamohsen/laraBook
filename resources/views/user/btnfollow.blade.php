@if(Auth::check() && Auth::user()->username != $user->username)
    @if(Auth::user()->isFollowedBy($user->id))
        {!! Form::open(['url'=>'follow/'.$user->id,'method' => 'delete']) !!}
            {!! Form::hidden('user_id',$user->id) !!}
            {!! Form::hidden('user_Auth',\Auth::user()->id) !!}
            {!! Form::submit('unFollow '.$user->username,['class'=>'btn btn-sm btn-danger']) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['action'=>'FollowersController@follow']) !!}
        {!! Form::hidden('user_Auth',\Auth::user()->id) !!}
        {!! Form::hidden('user_id',$user->id) !!}
        {!! Form::submit('Follow '.$user->username,['class'=>'btn btn-sm btn-primary']) !!}
        {!! Form::close() !!}
    @endif
@endif