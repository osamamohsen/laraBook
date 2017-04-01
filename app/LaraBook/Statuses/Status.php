<?php

namespace LaraBook\Statuses;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Commander\Events\EventGenerator;
use LaraBook\Statuses\Events\StatusWasPublished;

class Status extends Model
{
    //LaraBook\Statuses\Status
    use EventGenerator;

    protected $fillable = ['body'];

    public static function Publish($body){
        $status = new static(compact('body'));
        $status->raise(new StatusWasPublished($status));
        return $status;
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }


    public function comments(){
        return $this->hasMany('LaraBook\Statuses\Comment');
    }
}
