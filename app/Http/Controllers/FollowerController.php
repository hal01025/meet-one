<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class FollowerController extends Controller
{
    public function index () 
    {
        $followers = \Auth::User()->followers()->orderBy('id', 'desc')->paginate(10);
        
        return view('followers.index', ['followers' => $followers,]);
    }
    
    public function show ($id)
    {
        $follower = \Auth::user()->followers()->find($id);
        if ($follower != null){
        $comments = $follower->comments()->orderBy('id', 'desc')->paginate(10);
        
        return view('followers.show', ['follower' => $follower, 'comments' => $comments]);
        } else {
            return back();
        }
    }
}
