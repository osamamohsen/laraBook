<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth,Input;
use App\Http\Controllers\Controller;
use LaraBook\Statuses\LeaveCommentOnStatusCommand;
use Laracasts\Commander\CommanderTrait;

class CommentsController extends Controller
{
    use CommanderTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  leave a new comment
     */
    public function store(Request $request, $id)
    {

        $request = array_add($request->all(), 'user_id', Auth::user()->id);

        return $result = $this->execute(LeaveCommentOnStatusCommand::class,$request);

    }
}
