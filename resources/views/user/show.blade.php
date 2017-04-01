@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="form-group col-md-3">
            <div class="media">

                <div class="pull-left">
                    @include('layouts.partials.avatar',['size'=>50])
                </div>

                <div class="media-body">

                    <h4 class="media-heading">{!! $user->username !!}</h4>

                    <ul class="list-inline text-muted">
                        <li>{!! $user->present()->getCount($statuses,'Status') !!}</li>
                        <li>{!! $user->present()->getCount($who_Follow_him,'Follower') !!}</li>
                    </ul>

                    @foreach($who_Follow_him as $follow_me)
                        @include('layouts.partials.avatar',['size'=>25,'user'=>$follow_me])
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-7">
            @include('user.btnfollow')

            @include('status.statusForm')

            @include('status.userStatus')
        </div>
        <div class="col-md-2">
            @include('status.iFollowNews')
        </div>
    </div>
@stop