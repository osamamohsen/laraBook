<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 9/21/15
 * Time: 7:31 AM
 */

namespace LaraBook\Mailer;

use Illuminate\Mail\Mailer as Mail;

abstract class Mailer {

    private $mail;

    function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }


    public function sendTo($user , $subject , $view ,$data = []){
        $this->mail->queue($view,$data,function($message) use ($user,$subject){
            $message->to($user->email)->subject();
        });
    }
} 