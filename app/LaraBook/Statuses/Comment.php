<?php

namespace LaraBook\Statuses;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable= ['user_id','status_id','body'];


    /**
     * @return which owner specify this comment
     */
    public function owner(){
        return $this->belongsTo('App\User','user_id');
    }

    public function post_status(){
        return $this->belongsTo('LaraBook\Statuses\Status');
    }

    public static function leave($status_id,$body){
        $comment = new Comment();
        $comment->status_id = $status_id;
        $comment->body = $body;
        return $comment;
    }
}
