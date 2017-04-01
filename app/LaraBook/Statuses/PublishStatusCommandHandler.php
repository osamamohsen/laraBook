<?php
/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 19/09/15
 * Time: 02:16 ص
 */

namespace LaraBook\Statuses;


use LaraBook\Users\StatusRepository;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class PublishStatusCommandHandler implements CommandHandler
{
    use DispatchableTrait;

    public $reprsitory;

    /**
     * PublishStatusCommandHandler constructor.
     * @param $status
     */
    public function __construct(StatusRepository $reprsitory)
    {
        $this->reprsitory = $reprsitory;
    }


    public function handle($command)
    {


//        dd("ad");
        $status = Status::Publish($command->body);

        $this->reprsitory->save($status);

        $this->dispatchEventsFor($status);

//        dd($status);
        return $status;
    }
}