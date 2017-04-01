<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 9/21/15
 * Time: 5:46 AM
 */

namespace LaraBook\Users;

use App\User,Auth;
use LaraBook\Statuses\Status;
trait FollowableTrait {

    /**
     * @return all user i attached them
     */
    public function follows(){
        return $this->belongsToMany(static::class,'follows','user_Auth','user_id');
    }

    /**
     * @return all user there attached me
     */
    public function who_followed_me(){
        return $this->belongsToMany(static::class,'follows','user_id','user_Auth');
    }

    /**
     * @param $stranger
     * @return check if user attached or not to determine the button name
     */
    public function isFollowedBy($stranger){

        $users = Auth::user()->follows()->lists('user_id');

        if(in_array($stranger,$users->toArray()))
            return true;

        return false;
    }


    /**
     * @param User $user
     * @return mixed
     */
    function getFollowNames(User $user){
        return $user->follows()->get();
    }


    /**
     * @param array $usersIds all ids who attach me
     * @param User $user Auth user
     * @return mixed all data status for all user
     */
    function getFollowedStatus($usersIds = [],User $user){
        $usersIds[] = $user->id;
        return Status::with('comments')->whereIn('user_id',$usersIds)->latest()->get();
    }


    /**
     * @param User $user
     * @return who follow this user
     */
    function who_Follow_him(User $user){
        $usersIDS = $user->who_followed_me()->lists('user_Auth');
        return User::whereIn('id',$usersIDS)->get();
    }


    /**
     * @param $userIdToFollow
     * @param User $user
     * @return attach to user
     */
    public function follow_attach($userIdToFollow,User $user){
        return $user->follows($userIdToFollow);
    }

    /**
     * @param $userIdUnFollow
     * @param User $user
     * @return deatach to user
     */
    function unFollowUser($userIdUnFollow,User $user){
        return $user->follows()->detach($userIdUnFollow);
    }
} 