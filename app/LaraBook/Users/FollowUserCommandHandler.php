<?php
/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 20/09/15
 * Time: 05:35 ص
 */

namespace LaraBook\Users;


use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use App\Follow;
class FollowUserCommandHandler implements CommandHandler
{

    protected $userRepo;

    /**
     * FollowUserCommandHandler constructor.
     * @param $userRepo
     */
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }


    public function handle($command)
    {
        $user = $this->userRepo->findById($command->user_Auth);

        $this->userRepo->follow_attach($command->user_id,$user);

        return $user;
    }
}