<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Bugsnag;
class PagesController extends Controller
{
    public function home(){

//        Bugsnag::notifyError('ErrorType', 'Test Error');
        $data = "http://s.gravatar.com/avatar/8d9fe8f37d0140234c1b521d0437bfc";
//        dd($data);
//        Bugsnag::notifyError('ErrorType', 'Test Error');


            if(Auth::viaRemember()) dd("in / Route Home function Remember");
            return  view('pages.home');
    }

    public function register(){
        return view('user.register');
    }

    public function store(Request $request){
        dd($request->all());
    }

    //
}
