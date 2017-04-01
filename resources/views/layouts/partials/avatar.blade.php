<a href="{!! route('profile_path',$user->username) !!}">
<img class="status-gravatar avatar img-circle @if(isset($class)) {!! $class !!} @endif"
     src="{!! $user->present()->gravatar(isset($size) ? $size : 30) !!}"
     alt="{!! $user->username !!}"
     title="{!! $user->username !!}">
</a>
