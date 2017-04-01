<div class="iFollow">
    @foreach(array_chunk($statusesNameFollow->all(),4) as $usersSet)
        <div class="row">
            @foreach($usersSet as $userIFollow)
                <div  class="col-md-3">
                    <div class="pull-left">
                        @include('layouts.partials.avatar',['user'=>$userIFollow])
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>