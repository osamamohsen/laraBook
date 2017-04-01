<?php
/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 19/09/15
 * Time: 02:16 ص
 */

namespace LaraBook\Statuses;


class PublishStatusCommand
{
    public $body;
    public $user_id;

    function __construct($body, $user_id)
    {
        $this->body = $body;
        $this->user_id = $user_id;
    }
    /**
     * PublishStatusCommand constructor.
     */

}