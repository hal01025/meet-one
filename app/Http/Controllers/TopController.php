<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Community;

class TopController extends Controller
{
    public function index() 
    {
        if (\Auth::check()){
            $followings = \Auth::user()->followings()->orderBy('id', 'desc')->paginate(5);
            $followers = \Auth::user()->followers()->orderBy('id', 'desc')->paginate(5);
            $communities = Community::orderBy('id', 'desc')->paginate(5);
            
            
            return view('welcome', ['followings' => $followings, 'followers' => $followers,'communities' => $communities]);
        }
        
        else {
            return view('welcome');
        }
    }
}
