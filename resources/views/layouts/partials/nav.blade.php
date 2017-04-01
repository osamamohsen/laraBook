<nav class="navbar navbar-inverse navbar-fixed-top"  role="navigation">
    <div class="container-fluid" style="background-color: #337ab7">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="logo" href="/{!! (Auth::check()?'username/'.Auth::user()->username:'') !!}">DashBook</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/users">Browse Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img class="nav-gravatar"  src="{!! Auth::user()->present()->gravatar !!}" title="{!! Auth::user()->username !!}" >
                            {!! Form::label('username',Auth::user()->username) !!}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/username/{!! Auth::user()->username !!}">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Sign Up</a></li>
                    </ul>
                @endif
            </ul>
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>--}}
                {{--<li><a href="../navbar-static-top/">Static top</a></li>--}}
                {{--<li><a href="../navbar-fixed-top/">Fixed top</a></li>--}}
            {{--</ul>--}}
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
{{--<div class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}
{{--<a>  <img  style="width: 50px; margin-top: 8px; height: 30px;" src="{!! Auth::user()->present()->gravatar !!}" />--}}
{{--{!! Form::label('username',Auth::user()->username) !!}--}}
{{--</a>--}}

{{--<span class="caret"></span>--}}

{{--</div>--}}