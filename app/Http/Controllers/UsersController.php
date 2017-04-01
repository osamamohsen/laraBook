<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use LaraBook\Users\UserRepository;

class UsersController extends Controller
{
    public $userReprository;

    /**
     * UsersController constructor.
     * @param $userReprository
     */
    public function __construct(UserRepository $userReprository)
    {
        $this->userReprository = $userReprository;
    }


    public function index(){
        $users = $this->userReprository->getPaginate();
        return view('user.index')->with(compact('users'));
    }

    public function reset(Request $request){

    }

}
