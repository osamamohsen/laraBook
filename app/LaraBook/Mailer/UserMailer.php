<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 9/21/15
 * Time: 7:54 AM
 */

namespace LaraBook\Mailer;


use App\User;

class UserMailer extends Mailer {

    public function sendWelcomeMessageTo(User $user){
        $subject = "Welcome in Larabook";
        $view = 'emails.registration.confirm';
        return $this->sendTo($user,$subject,$view);
    }
} 