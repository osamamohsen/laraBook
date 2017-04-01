<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Auth\Passwords\PasswordBroker;
class PasswordController extends Controller
{
    use ResetsPasswords;
//password Email,index

    function __construct()
    {
        $this->middleware('guest');
    }

    function index(){
//        dd("ad");
        return view('auth.password');
    }

function email(){
        return view('auth.reset');
    }

    function ResetPassword(Request $request){
//        dd("here");

        switch ($response = $this->passwords->sendResetLink($request->only('email'), function($message)
        {
            $message->subject('Password Reminder');
        }))
        {
            case PasswordBroker::INVALID_USER:
                return redirect()->back()->withErrors(['email' =>trans($response)]);

            case PasswordBroker::RESET_LINK_SENT:
                return redirect()->back()->with('status', trans($response));
        }
    }

}
