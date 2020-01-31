<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowingController extends Controller
{
     public function index () 
    {
        $followings = \Auth::User()->followings()->get();
        
        return view('followings.index', ['followings' => $followings,]);
    }
    
    public function show ($id)
    {
        $following = \Auth::user()->followings()->find($id);
        
        return view('followings.show', ['following' => $following]);
    }
}
