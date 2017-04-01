<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 9/16/15
 * Time: 10:22 AM
 */

namespace LaraBook\Registration\Events;

use App\User;
class UserRegistered {

    public $user ;

    function __construct(User $user)
    {
        $this->user = $user;
    }
} 