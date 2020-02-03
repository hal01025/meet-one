<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowingController extends Controller
{
     public function index () 
    {
        $followings = \Auth::User()->followings()->orderBy('id', 'desc')->paginate(10);
        
        return view('followings.index', ['followings' => $followings,]);
    }
    
    public function show ($id)
    {
        $following = \Auth::user()->followings()->find($id);
        $comments = $following->comments()->orderBy('id', 'desc')->paginate(10);
        
        return view('followings.show', ['following' => $following, 'comments' => $comments]);
    }
}
