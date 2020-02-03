<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Community;

use App\Comment;

class TopController extends Controller
{
    public function index() 
    {
        if (\Auth::check()){
            $communities = Community::orderBy('id', 'desc')->paginate(10);
            $comments = \Auth::user()->comments()->orderBy('id', 'desc')->paginate(10);
            
            
            return view('welcome', ['communities' => $communities, 'comments' => $comments]);
        }
        
        else {
            return view('welcome');
        }
    }
}
