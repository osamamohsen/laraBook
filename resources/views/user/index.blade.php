@extends('layouts.master')
@section('content')
    @include('layouts.partials.errors')
    <h1>All Users</h1>
    @foreach(array_chunk($users->all(),4) as $usersSet)
        <div class="row row-group">
            @foreach($usersSet as $user)
              <div class="col-md-3 user-block">
                 @include('layouts.partials.avatar',['size'=>50])
                  <h4 class="user-block-username">
                    <a href="{!! route('profile_path',$user->username) !!}">
                          {!! $user->username !!}
                    </a>
                  </h4>
              </div>
            @endforeach
        </div>
    @endforeach
    {!! $users->render() !!}
@stop
