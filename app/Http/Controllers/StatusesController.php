<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use LaraBook\Statuses\PublishStatusCommand;
use Auth,Flash;
use Laracasts\Commander\CommanderTrait;
use App\Http\Requests\StatusesRequest;
use LaraBook\Users\UserRepository;
class StatusesController extends Controller
{
    use CommanderTrait;


    public function __construct(UserRepository $userReprository)
    {
        $this->userReprository = $userReprository;
        $this->middleware('auth',['only'=>'store']);
    }


    public function show($username){

        $user = $this->userReprository->findByName($username);

        $who_Follow_him = $this->userReprository->who_Follow_him($user);

        $statusesNameFollow = $this->userReprository->getFollowNames($user);

//        dd($statusesNameFollow);
        $statuses = $this->userReprository->getFollowedStatus($statusesNameFollow->lists('id'),$user);

        unset($statusesNameFollow[0]); //delete me from following users ( Iam not follow me)

        return view('user.show')->
        with(compact('user','statuses','statusesNameFollow','who_Follow_him'));
    }

    public function store(StatusesRequest $request){

        $this->execute(PublishStatusCommand::class);

        Flash::success('status had been created successfully');
        return redirect()->back();
    }
}
