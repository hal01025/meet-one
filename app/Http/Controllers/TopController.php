<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Community;

class TopController extends Controller
{
    public function index() 
    {
        $friends = User::orderBy('id', 'desc')->paginate(5);
        $communities = Community::orderBy('id', 'desc')->paginate(5);
        
        return view('welcome', ['friends' => $friends, 'communities' => $communities]);
    }
}
