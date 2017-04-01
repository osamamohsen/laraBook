<?php
/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 19/09/15
 * Time: 02:30 ص
 */

namespace LaraBook\Statuses\Events;


class StatusWasPublished
{
    public $body;

    /**
     * StatusWasPublished constructor.
     * @param $body
     */
    public function __construct($body)
    {
        $this->body = $body;
    }


}