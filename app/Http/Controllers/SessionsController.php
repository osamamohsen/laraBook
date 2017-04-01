<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use LaraBook\Forms\SignInForm;
use App\Session;
use Auth;
use Flash;
use App\Http\Requests\SessionRequest;
class SessionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sessions.create');
    }


    /**
     * insert in DataBase
     * @param Request $request
     */
    public function store(SessionRequest $request){
        if (Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ],
            ($request->input('remember_me')?true:false))){

            Flash::success('welocme in LaraBook : '.Auth::user()->username);
            return redirect('/');
        }else{
            Flash::error('Error in username or password');
           return redirect('/login')->withInput($request->all());
        }
    }
}