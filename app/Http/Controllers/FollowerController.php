<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class FollowerController extends Controller
{
    public function index () 
    {
        $followers = \Auth::User()->followers()->get();
        
        return view('followers.index', ['followers' => $followers,]);
    }
    
    public function show ($id)
    {
        $follower = \Auth::user()->followers()->find($id);
        
        return view('followers.show', ['follower' => $follower]);
    }
}
