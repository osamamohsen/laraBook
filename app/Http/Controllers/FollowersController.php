<?php

namespace App\Http\Controllers;

use App\Follow;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Laracasts\Commander\CommanderTrait;
use LaraBook\Users\FollowUserCommand;
use Laracasts\Flash\Flash;
use LaraBook\Users\UnfollowUserCommand;
class FollowersController extends Controller
{
    use CommanderTrait;

    /**
     * follow user
     */
    public function follow(Request $request){

        Follow::create($request->all());

        $this->execute(FollowUserCommand::class,$request->all());

        Flash::info('you are following this user. ');

        return redirect()->back();

    }


    /**
     * @param $id unfollow
     */
    public function destroy($unFollowId){

        $this->execute(UnfollowUserCommand::class);

        Flash::success('Unfollow user made successfully ');
        return redirect()->back();
    }
}
