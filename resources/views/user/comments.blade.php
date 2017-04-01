
@if(count($status->comments))
    {{--{!! dd($status->comments) !!}--}}
    {{--<div class="frame-comments">--}}
    <div class="commentsBody" id="commentsBody{{ $status->id }}">

         @foreach($status->comments as $comment)

            <article class="comments__comment media status-media">
                <div class="pull-left">
                    @include('layouts.partials.avatar',['size'=>30,'user'=>$comment->owner()->get()[0],'class'=>'media-object'])
                </div>
                <h4 class="media-heading">{!! $comment->owner->username !!}</h4>
                {!! $comment->body !!}
            </article>
        @endforeach
    </div>
@endif
@if(Auth::check())

{!! Form::hidden('username',Auth::user()->username,['id'=>'username']) !!}
{!! Form::hidden('image_src',Auth::user()->present()->gravatar(30),['id'=>'image_src']) !!}

{!! Form::open(['class'=>'comments__create_form','name'=>$status->id]) !!}
    {!! Form::hidden('status_id',$status->id,['id'=>'status_id'.$status->id]) !!}
    {!! Form::textarea('body',null,['class'=>'form-control','rows'=>1,'placeholder'=>'write your comment','id'=>'body'.$status->id]) !!}
{!! Form::close() !!}

@endif

