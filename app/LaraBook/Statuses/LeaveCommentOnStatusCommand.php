<?php
/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 25/09/15
 * Time: 12:40 م
 */

namespace LaraBook\Statuses;


class LeaveCommentOnStatusCommand
{
    public $user_id,$status_id,$body;

    /**
     * LeaveCommentOnStatusCommand constructor.
     * @param $user_id
     * @param $status_id
     * @param $body
     */
    public function __construct($user_id, $status_id, $body)
    {
        $this->user_id = $user_id;
        $this->status_id = $status_id;
        $this->body = $body;
    }

}