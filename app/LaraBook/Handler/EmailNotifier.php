<?php
namespace LaraBook\Handler;

use LaraBook\Mailer\UserMailer;
use Laracasts\Commander\Events\EventListener;
use LaraBook\Registration\Events\UserRegistered;
class EmailNotifier extends EventListener {

    private $mailer;

    function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }


    public function WhenUserHasReigistered(UserRegistered $event){

        $this->mailer->sendWelcomeMessageTo($event->user);
    }


} 