<?php
/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 19/09/15
 * Time: 02:31 ص
 */

namespace LaraBook\Users;

use Illuminate\Support\Facades\Auth;
use LaraBook\Statuses\Comment;
use LaraBook\Statuses\Status;
use App\User;
class StatusRepository
{

    public function save(Status $status)
    {
        return Auth::user()->statuses()->save($status);
    }

    public function leaveComment($user_id,$status_id,$body){
        $comment = Comment::leave($status_id,$body);
        $myComment = User::findorFail($user_id)->comments()->save($comment);
        return $myComment;
    }

}