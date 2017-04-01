<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 9/20/15
 * Time: 8:56 AM
 */

namespace LaraBook\Users;


use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class UnfollowUserCommandHandler implements CommandHandler{

    use DispatchableTrait;

    public $userReprository;

    function __construct(UserRepository $userReprository)
    {
        $this->userReprository = $userReprository;
    }


    /**
     * Handle the command.
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $userIdUnFollow = $command->user_id;
        $user = $this->userReprository->findById($command->user_Auth);
        $this->userReprository->unFollowUser($userIdUnFollow,$user);
    }
}