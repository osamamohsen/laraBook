<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 9/16/15
 * Time: 6:15 AM
 */

namespace LaraBook\Users;


use App\Follow;
use App\User;
use LaraBook\Statuses\Status;

class UserRepository {
    use FollowableTrait;

    protected $user;

    public function save(User $user){
        return $user->save();
    }

    public function getPaginate($showNumber = 25){
        return User::paginate($showNumber);
    }

    public function findByName($username){
        return User::whereusername($username)->first();
    }

    public function findById($id){
        return User::findOrFail($id);
    }

}