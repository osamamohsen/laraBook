<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
{{--<script src="{{URL::asset('js/jquery/jquery.js')}}"></script>--}}
{{--<script src="{{URL::asset('js/jquery/jquery.min.js')}}"></script>--}}
    <script src="//d2wy8f7a9ursnm.cloudfront.net/bugsnag-2.min.js"
            data-apikey="ef3e40305d5de37163e7bb5a4303f542"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
</head>

<div class="container">
    @include('layouts.partials.nav')
    @include('vendor.flash.message')
    <body>
        @yield('content')
    </body>
</div>

<script src="{{URL::asset('js/comment.js')}}"></script>


<script>
    $('.comments__create_form').on('keydown',function(event){
        var res = comment(event,'#status_id','#body',this);
        if(res)
            buildComment($('#username').val(),res,$('#image_src').val(),'commentsBody');
    });
</script>


<script>
    try {
        // Some code which might throw an exception
    } catch (e) {
        Bugsnag.notifyException(e, "CustomErrorName");
    }
</script>
</html>