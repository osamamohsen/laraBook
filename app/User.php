<?php
namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use LaraBook\Registration\Events\UserRegistered;
use LaraBook\Users\FollowableTrait;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;


/**
 * Class User
 * @package App
 */
class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, EventGenerator,PresentableTrait,FollowableTrait;

    protected $presenter = 'LaraBook\Users\UserPeresnter';

    protected $table = 'users';

    protected $fillable = ['username', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];


    /**
     * @param must bcrypt $password
     */
    public function setPasswordAttribute($password){
        $this->attributes['password']=bcrypt($password);
    }

    public function statuses(){
        return $this->hasMany('LaraBook\Statuses\Status');
    }

    public function comments(){
        return $this->hasMany('LaraBook\Statuses\Comment');
    }

    /**
     * Register an new User
     */

    public static function register($username,$email,$password){
        $user = new static (compact('username','email','password'));

        $user->raise(new UserRegistered($user));

        return $user;

    }



}
