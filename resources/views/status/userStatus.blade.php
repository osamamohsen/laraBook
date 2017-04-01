{{--<div class="form-control" style="background-color: #000000; color: #ffffff;">--}}
{{--{!! $status = $statuses->count() !!} {!! str_plural('Status',$status) !!}--}}
{{--</div>--}}
@foreach($statuses as $status)
    <div class="comment_body">
    <article class="media status-media">
            <div class="pull-left">
                @include('layouts.partials.avatar',['user'=>$status->user()->get()[0]])
            </div>
            <div class="media-body">
                <h4 class="media-heading">{!! $status->user->username !!}</h4>
                <p>{!! $status->created_at->diffForHumans() !!}</p>
                {!! $status->body !!}
            </div>
            <div class="commentsBody">
            @include('user.comments')
            </div>
    </article>
    </div>
@endforeach

