<?php
/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 19/09/15
 * Time: 07:13 ص
 */

namespace LaraBook\Users;


use Laracasts\Presenter\Presenter;

class UserPeresnter extends Presenter
{
    public function gravatar($size = 30){
        return "http://s.gravatar.com/avatar/".md5(strtolower(trim($this->email)))."?s=".$size;
    }

    public function getCount($number , $name){
        $count = $number->count();
        $exp = str_plural($name,$count);
        return "{$count} {$exp}";
    }

}
