<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 9/20/15
 * Time: 8:56 AM
 */

namespace LaraBook\Users;


class UnfollowUserCommand{

    public $user_Auth,$user_id;

    function __construct($user_Auth, $user_id)
    {
        $this->user_Auth = $user_Auth;
        $this->user_id = $user_id;
    }


} 