
{{--{!! strtotime($status->created_at) !!}--}}
{{--@if(\Carbon\Carbon::createFromTimeStamp(strtotime($status->created_at,time()))->diffInSeconds() < 60)--}}
{{--{!! \Carbon\Carbon::createFromTimeStamp(strtotime($status->created_at,time()))->diffInSeconds() !!} seconds ago--}}
{{--@else--}}
{{--@if(\Carbon\Carbon::createFromTimeStamp(strtotime($status->created_at,time()))->diffInSeconds()>=60)--}}
{{--{!! (int) (\Carbon\Carbon::createFromTimeStamp(strtotime($status->created_at,time()))->diffInSeconds()/60)  !!} minute--}}
{{--@endif--}}
{{--@if( \Carbon\Carbon::createFromTimeStamp(strtotime($status->created_at,time()))->diffInSeconds()%60!=0)--}}
{{--and {!! \Carbon\Carbon::createFromTimeStamp(strtotime($status->created_at,time()))->diffInSeconds()%60 !!} seconds ago--}}
{{--@endif--}}
{{--@endif--}}