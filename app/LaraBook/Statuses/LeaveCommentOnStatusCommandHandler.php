<?php
/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 25/09/15
 * Time: 12:40 م
 */

namespace LaraBook\Statuses;


use LaraBook\Users\StatusRepository;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class LeaveCommentOnStatusCommandHandler implements CommandHandler
{

    use DispatchableTrait;
    public $statusReprository;

    /**
     * LeaveCommentOnStatusCommandHandler constructor.
     * @param $statusReprository
     */
    public function __construct(StatusRepository $statusReprository)
    {
        $this->statusReprository = $statusReprository;
    }

    public function handle($command)
    {
        $comment = $this->statusReprository->leaveComment($command->user_id,$command->status_id,$command->body);
        return $comment;
    }
}