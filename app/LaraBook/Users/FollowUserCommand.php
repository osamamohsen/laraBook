<?php
/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 20/09/15
 * Time: 05:35 ص
 */

namespace LaraBook\Users;


class FollowUserCommand
{
    public $user_id,$user_Auth;

    /**
     * FollowUserCommand constructor.
     * @param $user_id
     * @param $user_Auth
     */
    public function __construct($user_id, $user_Auth)
    {
//        dd($user_Auth);
        $this->user_id = $user_id;
        $this->user_Auth = $user_Auth;


    }


}