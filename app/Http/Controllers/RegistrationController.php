<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Contracts\Validation;
use  LaraBook\Registration\RegisterUserCommand;
use Illuminate\Support\Facades\Validator;
use Auth;
use Laracasts\Commander\CommanderTrait;
use Laracasts\Flash\Flash;
use App\Http\Requests\RegistrationRequest;
class RegistrationController extends Controller
{
    use CommanderTrait;
    public function __construct(){
        $this->middleware('guest',['only'=>['create','store']]);
    }

    public function create(){
        return view('user.register');
    }

    public function store(RegistrationRequest $register){

        $user = $this->execute(RegisterUserCommand::class);
        Auth::login($user);
        Flash::success('Glad you have an new laraBook account');
        return redirect('/')->with('flash_message','Welcome a board');
    }

    public function logout(){
//        dd("hre");
        Auth::logout();
        Flash::message('You are logout now.');
        return redirect('/');
    }
}
